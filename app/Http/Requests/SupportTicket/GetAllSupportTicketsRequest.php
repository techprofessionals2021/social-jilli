<?php

namespace App\Http\Requests\SupportTicket;

use App\Models\Support;
use Illuminate\Foundation\Http\FormRequest;

class GetAllSupportTicketsRequest extends FormRequest
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
        if(auth()->user()->role == 2){
         return Support::where('user_id',auth()->id())->get();
        }else{
            return Support::all();
        }
    }
}
