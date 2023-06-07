<?php

namespace App\Http\Controllers;

use App\Helpers\Helpers;
use App\Http\Requests\campaign\CreateCampaignApiRequest;
use App\Http\Requests\campaign\CreateCampaignRequest;
use App\Http\Requests\campaign\GetAllCampaignsRequest;
use App\Http\Requests\campaign\GetCampaignRequest;
use App\Http\Requests\campaign\UpdateCampaignRequest;
use App\Http\Requests\campaign\UpdateCampaignStatusRequest;
use App\Http\Requests\Order\GetOrderRequest;
use App\Models\Campaign;
use App\Models\Status;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class CampaignController extends Controller
{
    /**
     * @param GetAllCampaignsRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(GetAllCampaignsRequest $request)
    {
        $response = $request->handle();

        $getStatus = Status::whereIn('id',[2,3,4,7,8,9,10,11])->get();
        
        // dd($response);

        return view('admin.campaign.index', ['campaigns' => $response,'getStatus' => $getStatus]);
    }

    /**
     * @param GetCampaignRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(GetCampaignRequest $request)
    {
        $countryList  = Helpers::hitEvadavApi('reference/country-list');
        $osList  = Helpers::hitEvadavApi('reference/os-list');
        $osVersionsList  = Helpers::hitEvadavApi('reference/os-versions-list');
        $browserList  = Helpers::hitEvadavApi('reference/browser-list');
        $browserLanguagesList  = Helpers::hitEvadavApi('reference/browser-languages-list');

        $audienceList  = Helpers::hitEvadavApi('advertiser/audiences/list?limit=54');


        // dd($audienceList);

        $request->id = 0;

        $response = $request->handle();

        $getStatus = Status::whereIn('id',[1,2])->get();

        $route = url('campaign');

        return view('admin.campaign.form',
            [
                'campaign' => $response,
                'getStatus' => $getStatus,
                'countryList' => $countryList,
                'osList' => $osList,
                'osVersionsList' => $osVersionsList,
                'browserList' => $browserList,
                'browserLanguagesList' => $browserLanguagesList,
                'audienceList' => $audienceList,
                'route' => $route,
                'edit' => false
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCampaignRequest $request)
    {
        $request->handle();

        return redirect()->route('campaign.index')->with('success', __('custom.create_successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function show(Campaign $campaign)
    {
        //
    }

    /**
     * @param Campaign $campaign
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Campaign $campaign)
    {

        $countryList  = Helpers::hitEvadavApi('reference/country-list');
        // dd($countryList);
        $osList  = Helpers::hitEvadavApi('reference/os-list');
        $osVersionsList  = Helpers::hitEvadavApi('reference/os-versions-list');
        $browserList  = Helpers::hitEvadavApi('reference/browser-list');
        $browserLanguagesList  = Helpers::hitEvadavApi('reference/browser-languages-list');
        $audienceList  = Helpers::hitEvadavApi('advertiser/audiences/list?limit=54');

        $route = url('campaign');

        $getStatus = Status::whereIn('id',[1,2])->get();

        return view('admin.campaign.form',
            [
                'campaign' => $campaign,
                'getStatus' => $getStatus,
                'countryList' => $countryList,
                'osList' => $osList,
                'osVersionsList' => $osVersionsList,
                'browserList' => $browserList,
                'browserLanguagesList' => $browserLanguagesList,
                'audienceList' => $audienceList,
                'route' => $route,
                'edit' => true
            ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCampaignRequest $request, $id)
    {
 
        $request->id = $id;
        $request->handle();
       

    

        return redirect()->route('campaign.index')->with('success', __('custom.edit_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
       $campaign =  Campaign::findorFail($campaign->id);


       $response = Http::withHeaders([
        'X-Api-Key' => config('services.evadav.api_key'),
    ])->post('https://evadavapi.com/api/v2.2/advertiser/campaigns/archive?id='.$campaign->camp_id);

       $data = $response->json(); 

    //    dd($data);

       $campaign->delete();

       return redirect()->route('campaign.index')->with('danger', __('Campaign Deleted Succesfully'));

  
        
    }



    public function refresh_campaigns()
    {

        //set campaign status while they reached limit of clicks and budget
        $UpdateCampaignStatus = Campaign::get();

        foreach ($UpdateCampaignStatus as $key => $value) {

            $findCampaign = Campaign::findorFail($value->id);

            if (isset($findCampaign)) {

                if ($findCampaign->daily_click_limit > $findCampaign->total_click_limit ) {
                    $findCampaign->status_id = 11;
                    $findCampaign->save();
                }

                if ($findCampaign->daily_budget_limit > $findCampaign->total_budget_limit ) {
                    $findCampaign->status_id = 10;
                    $findCampaign->save();
                }

            
            }

            // dd('updated');
            
          
        }


        // Set the initial offset to 0
        $offset = 0;

        // Set the batch size to 50
        $batchSize = 10;

        // Get the total number of records from the API response
//        $initCampaigns  = Helpers::hitEvadavApi('advertiser/campaigns/list'); // todo we will open it up once we are live
//        $campaignsCount = $initCampaigns['data']['total']; // todo we will open it up once we are live
        $campaignsCount = 30;

        // Loop through the API data in batches of 50 until we reach the end
        while ($offset < $campaignsCount) {
            // Get the next batch of records from the API
            $apiBatch  = Helpers::hitEvadavApi('advertiser/campaigns/list?limit='.$batchSize.'&offset='.$offset.'&extended=true')['data']['campaigns']; // use your own method to get API data with offset and limit

            foreach ($apiBatch as $record) {
                $getCampaign = Helpers::hitEvadavApi('advertiser/campaigns/get?id='.$record['id'])['data']['campaign'];
              
                // Use the 'id' field to try and find an existing record in the database
                $existingRecord = Campaign::where('camp_id', $record['id'])->first();

                // dd($existingRecord);

                if ($existingRecord) {
                    continue;
//                    dd($existingRecord);

                    // Update the existing record with the new values
//                    $existingRecord->update($record);
                } else {
                    $creatCampagin = new CreateCampaignApiRequest();
                    $creatCampagin->handle($record);
                }
            }
            // Increment the offset by the batch size to get the next batch of records
            $offset += $batchSize;
        }

        return redirect()->route('campaign.index')->with('success', __('custom.refresh_successfully'));
    }



    public function update_campaign_status(Request $request , UpdateCampaignStatusRequest $updatecampstatusrequest)
    {

        // $updatecampstatusrequest->id = $request->id;

        $updatecampstatusrequest->handle();
        // dd($updatecampstatusrequest->id);

        // $item = Campaign::find($request->orderId);
        // $item->status_id  = $request->selectedOptions;
        // $item->save();

        

        $bod['status'] = 1;
        return json_encode($bod);

    }
}
