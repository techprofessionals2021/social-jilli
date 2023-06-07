<?php

namespace App\Http\Requests\campaign;

use App\Models\Campaign;
use App\Models\Status;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Http;

class CreateCampaignApiRequest extends FormRequest
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
            //
        ];
    }
    public function handle($params)
    {
//        dd($params);

        $status = Status::where('slug', $params['status'])->first();

        
      

        $item = new Campaign;
        $item->camp_id = $params['id'];
        $item->name = $params['name'];
        $item->status_id = $status->id ?? null;
        $item->traffic_quality = 'standard';
        $item->pricing_model = isset($params['settings']['cpm']) ? 'cpm':'cpc';
        $item->campaign_group = $params['groupId'];
        $item->target_url = $params['link'];
        $item->frequency_capping = $params['settings']['frequency'];
        $item->conversion_postback_url = $params['link'];
        $item->btn_title = "Click me !";
        $item->btn_description = "Get Bounces";

        $item->country = json_encode($params['settings']['country']);
//        $item->city = json_encode($params['city']);
        $item->device = json_encode($params['settings']['device']);
        $item->os = json_encode($params['settings']['os']);
        $item->os_version = isset($params['settings']['os_version']) ? json_encode($params['settings']['os_version']) : json_encode([]);
        $item->browser = json_encode($params['settings']['browser']);
        $item->browser_language = json_encode($params['settings']['browserLang']);
        $item->connection_type = json_encode($params['settings']['cityListType']);

        $item->total_budget_limit = $params['settings']['budgetLimitTotal'];
        $item->daily_budget_limit = $params['settings']['budgetLimitDaily'];
        $item->total_click_limit = $params['settings']['clicksLimitTotal'];
        $item->daily_click_limit = $params['settings']['clicksLimitDaily'];
        $item->created_at = $params['created_at'];

        $item->save();

        return true;

    }
}
