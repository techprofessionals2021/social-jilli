<?php

namespace App\Http\Requests\UserOrder;

use App\Models\Order;
use Illuminate\Foundation\Http\FormRequest;

class GetAllUserOrdersRequest extends FormRequest
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
        $user = auth()->user();
        return Order::where('user_id',$user->id)->get();
    }
}
