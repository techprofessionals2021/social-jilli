<?php

namespace App\Http\Requests\SupportTicket;

use App\Models\SupportMessage;
use Illuminate\Foundation\Http\FormRequest;

class SendMessageRequest extends FormRequest
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
            'message' => ['required'],
        ];
    }
    public function handle()
    {
        $this->validated();
        $params = $this->all();

        $user = auth()->user();

        $item = new SupportMessage();
        $item->support_id = $params['support_id'];
        $item->message = $params['message'];
        $item->send_by = $user->id;

        $item->save();

        return true;

    }
}
