<?php

namespace App\Http\Requests\SupportTicket;

use App\Models\Support;
use Illuminate\Foundation\Http\FormRequest;

class GetSupportTicketRequest extends FormRequest
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

    public function handle(){
        return Support::findOrNew($this->id);
    }
}
