<?php

namespace App\Http\Requests\campaign;

use App\Models\Campaign;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Http;

class UpdateCampaignRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      
        return [
            'name' => ['required'],
            'traffic_quality' => ['required'],
            'pricing_model' => ['required'],
            'campaign_group' => ['required'],
            'target_url' => ['required'],
            'frequency_capping' => ['required'],
            // 'conversion_postback_url' => ['required'],
            // 'btn_title' => ['required'],
            // 'btn_description' => ['required'],
            'country' => ['required'],
//            'city' => ['required'],
            'device' => ['required'],
            'os' => ['required'],
            'os_version' => ['required'],
            'browser' => ['required'],
            'browser_language' => ['required'],
            'connection_type' => ['required'],
            'total_budget_limit' => ['required'],
            'daily_budget_limit' => ['required'],
            'total_click_limit' => ['required'],
            'daily_click_limit' => ['required'],
        ];
    }
    public function messages()
    {
        return [
            //
        ];
    }
    public function handle()
    {
    
        $this->validated();
        $params = $this->all();
        $item = Campaign::find($this->id);
       



        $country_codes = $params['country']; 
        $costs = $params['cost']; 

        $result = array();

        // Combine the arrays and create the associative array
        $combined = array_combine($country_codes, $costs);

        // Iterate through the associative array and convert cost values to floats
        foreach ($combined as $country => $cost) {
            $result[$country] = floatval($cost);
        }



        $response = Http::withHeaders([
            'X-Api-Key' => config('services.evadav.api_key'),
        ])->post('https://evadavapi.com/api/v2.2/advertiser/campaigns/update-popunder?id='.$item->camp_id,[
            "CampaignForm"=>[
                "name"=> $params['name'],
                "link"=> $params['target_url'],
        //                "pricing"=> $item->pricing_model,
                "pricing"=> "cpm",
                "groupId"=> 1,
            ],
            "CampaignSettingsForm"=>[
                "frequency"=> $params['frequency_capping'],
        //                "cost" => 0.0011,
        //                "price" => 0.0011,
                "country"=> $result,
                "device"=> json_encode($params['device']),
                "os"=> json_encode($params['os']),
                "browser"=> json_encode($params['browser']),
                "browserLang"=> json_encode($params['browser_language']),

                "budgetLimitTotal"=> $params['total_budget_limit'],
                "budgetLimitDaily"=> $params['daily_budget_limit'],
                "clicksLimitTotal"=>$params['total_click_limit'],
                "clicksLimitDaily"=> $params['daily_click_limit'],
                "audiencesType"=> $params['audience_type'],
                "audiences"=> json_encode($params['audiences']),
            ],

        //                "autoLaunch": true,
                "autoLaunch"=> false,
                "trafficQuality"=> $params['traffic_quality'],
        //            'bid' => 0.005,
        ]);


        $data = $response->json(); // todo we need to create API first then save it in our DB.

        // dd($data);

        if ($data['success'] == true) {

            // $item = new Campaign;

            // $item->camp_id = $data['data']['id'];
        
            $item->name = $params['name'];
            $item->traffic_quality = $params['traffic_quality'];
            $item->pricing_model = $params['pricing_model'];
            $item->campaign_group = $params['campaign_group'];
            $item->target_url = $params['target_url'];
            $item->frequency_capping = $params['frequency_capping'];
            $item->conversion_postback_url = $params['conversion_postback_url'];
            $item->btn_title = $params['btn_title'];
            $item->btn_description = $params['btn_description'];
            $item->status_id = 4;

            $item->country = json_encode($params['country']);
            

        //        $item->city = json_encode($params['city']);
            $item->device = json_encode($params['device']);
            $item->os = json_encode($params['os']);
            $item->os_version = json_encode($params['os_version']);
            $item->browser = json_encode($params['browser']);
            $item->browser_language = json_encode($params['browser_language']);
            $item->connection_type = json_encode($params['connection_type']);
            $item->audience = json_encode($params['audiences']);




            $item->total_budget_limit = $params['total_budget_limit'];
            $item->daily_budget_limit = $params['daily_budget_limit'];
            $item->total_click_limit = $params['total_click_limit'];
            $item->daily_click_limit = $params['daily_click_limit'];
            $item->audience_type = $params['audience_type'];

            $item->save();


        }

        else{
            return redirect()->route('campaign.edit')->with('error', __('Campaign was not Updated'));
        }




        // dd($item->camp_id);
      
        // $item->name = $params['name'];
        // $item->traffic_quality = $params['traffic_quality'];
        // $item->pricing_model = $params['pricing_model'];
        // $item->campaign_group = $params['campaign_group'];
        // $item->target_url = $params['target_url'];
        // $item->frequency_capping = $params['frequency_capping'];
        // $item->conversion_postback_url = $params['conversion_postback_url'];
        // $item->btn_title = $params['btn_title'];
        // $item->btn_description = $params['btn_description'];
        // $item->country = $params['country'];
        // $item->city = $params['city'];
        // $item->device = $params['device'];
        // $item->os = $params['os'];
        // $item->os_version = $params['os_version'];
        // $item->browser = $params['browser'];
        // $item->browser_language = $params['browser_language'];
        // $item->connection_type = $params['connection_type'];
        // $item->total_budget_limit = $params['total_budget_limit'];
        // $item->daily_budget_limit = $params['daily_budget_limit'];
        // $item->total_click_limit = $params['total_click_limit'];
        // $item->daily_click_limit = $params['daily_click_limit'];

        // $item->save();

        // return true;

    }
}
