<?php

namespace App\Http\Requests\campaign;

use App\Models\Campaign;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Http;

class CreateCampaignRequest extends FormRequest
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

    public function groupByOsVersionsIntoOs($OSVersionsWithOs)
    {
        $os_versions = [];

        foreach ($OSVersionsWithOs as $key => $value) {
            $array = explode('|', $value);
            $os_id = array_shift($array);
            $os_version_id = implode($array);
            if(array_key_exists($os_id,$os_versions)){

                 if(is_array($os_versions[$os_id]))
                {
                    array_push($os_versions[$os_id],$os_version_id);
                }else{
                    $os_versions[$os_id] = array($os_versions[$os_id],$os_version_id);
                }
            }else{
                $os_versions[$os_id] = array($os_version_id);
            }

        }

        return $os_versions;

    }

    public function handle()
    {
        $this->validated();
        $params = $this->all();
//        dd(json_encode($this->groupByOsVersionsIntoOs($params['os_version'])));



//        dd($params,12,number_format(11231232,2));

        $country_codes = $params['country'];
        $costs = $params['cost'];

        $result = array();

        // Combine the arrays and create the associative array
        $combined = array_combine($country_codes, $costs);

        // Iterate through the associative array and convert cost values to floats
        foreach ($combined as $country => $cost) {
            $result[$country] = floatval($cost);
        }

        $os_array = $params['os'];

        $os = [];

        foreach ($os_array as $element) {
            $os[] = (int)$element;
        }

        $browser_array = $params['browser'];

        $browser = [];

        foreach ($browser_array as $element) {
            $browser[] = (int)$element;
        }

        $browser_lang_array = $params['browser_language'];

        $browser_lang = [];

        foreach ($browser_lang_array as $element) {

            $browser_lang[] = $element;
        }


        $device_array = $params['device'];

        $device = [];

        foreach ($device_array as $element) {
            $device[] = (int)$element;
        }


        $audience_array = $params['audiences'];

        $audience = [];

        foreach ($audience_array as $element) {
            $audience[] = (int)$element;
        }




        $response = Http::withHeaders([
            'X-Api-Key' => config('services.evadav.api_key'),
        ])->post('https://evadavapi.com/api/v2.2/advertiser/campaigns/create-popunder',[
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
                "device"=> $device,
                "os"=> $os,
                "browser"=> $browser,
                "browserLang"=> $browser_lang,
//                "osVersions" => json_encode($this->groupByOsVersionsIntoOs($params['os_version'])),
                "osVersions" => $this->groupByOsVersionsIntoOs($params['os_version'])
    ,
                "budgetLimitTotal"=> $params['total_budget_limit'],
                "budgetLimitDaily"=> $params['daily_budget_limit'],
                "clicksLimitTotal"=>$params['total_click_limit'],
                "clicksLimitDaily"=> $params['daily_click_limit'],
                "audiencesType"=> $params['audience_type'],
                "audiences"=> $audience,
            ],

//                "autoLaunch": true,
                "autoLaunch"=> false,
                "trafficQuality"=> $params['traffic_quality'],
//            'bid' => 0.005,
        ]);


        $data = $response->json(); // todo we need to create API first then save it in our DB.

        if ($data['success'] == true) {

            $item = new Campaign;

            $item->camp_id = $data['data']['id'];

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
            return redirect()->route('campaign.create')->with('error', __('Campaign was not Created'));
        }



    }
}
