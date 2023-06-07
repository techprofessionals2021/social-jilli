<?php

namespace App\Http\Requests\CampaignTime;

use App\Models\CampaignTimeSchedule;
use Illuminate\Foundation\Http\FormRequest;

class CreateCampaignTimeRequest extends FormRequest
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

    public function handle()
    {
        $params = $this->all();

        $campaign_time = CampaignTimeSchedule::first();
    
        $campaign_time->minutes = $params['time'];
        $campaign_time->save();

    }
}
