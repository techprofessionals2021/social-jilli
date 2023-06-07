<?php

namespace App\Http\Requests\UserOrder;

use App\Models\Order;
use Illuminate\Foundation\Http\FormRequest;

class CreateUserOrderRequest extends FormRequest
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
            'link' => ['required', 'string', 'min:3', 'max:150'],
        ];
    }
    public function handle()
    {
        $this->validated();
        $params = $this->all();
        $user = auth()->user();

        $item = new Order();
        $item->order_id = rand(8,1000000);
        $item->api_order_id = rand(8,1000000);
        $item->user_id  = $user->id;
        $item->package_id = $params['package_id'];
        $item->link = $params['link'];
        $item->price = $params['order-price'];
        $item->quantity = $params['quantity'];
        $item->create_by = $user->id;
        $item->status_id = 3; // pending
        $item->start_counter = 0;
        $item->remains = $params['quantity'];

        $item->save();

        return true;

    }
}
