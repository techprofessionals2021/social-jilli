<?php

namespace App\Http\Requests\SupportTicket;

use App\Models\Support;
use Illuminate\Foundation\Http\FormRequest;

class CreateSupportTicketRequest extends FormRequest
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
      $support = new Support;
      $support->user_id = auth()->id();
      $support->subject = $this->subject;
      $support->description = $this->description;
      $support->status_id = 3;
      $support->save();
    }
}
