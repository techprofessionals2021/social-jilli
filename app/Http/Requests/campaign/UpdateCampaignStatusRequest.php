<?php

namespace App\Http\Requests\campaign;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Campaign;
use Illuminate\Support\Facades\Http;
class UpdateCampaignStatusRequest extends FormRequest
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
        // dd($this->id);
        $params = $this->all();

        $item = Campaign::find($params['orderId']);
        $item->status_id  = $params['selectedOptions'];
        // dd($item->status_id);
        $item->save();

        // dd($item->camp_id);

        if ($item->status_id == "2") {
            $response = Http::withHeaders([
                'X-Api-Key' => config('services.evadav.api_key'),
            ])->post('https://evadavapi.com/api/v2.2/advertiser/campaigns/activate?id='.$item->camp_id);
    
            $data = $response->json(); 
        }

        if ($item->status_id == "9") {
            $response = Http::withHeaders([
                'X-Api-Key' => config('services.evadav.api_key'),
            ])->post('https://evadavapi.com/api/v2.2/advertiser/campaigns/stop?id='.$item->camp_id);
    
            $data = $response->json(); 
        }


    }
}
