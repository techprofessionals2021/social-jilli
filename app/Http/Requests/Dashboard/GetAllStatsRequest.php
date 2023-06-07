<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

use App\Models\Order;
use App\Models\Package;
use App\Models\User;
use Illuminate\Support\Arr;

class GetAllStatsRequest extends FormRequest
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

    public function statsForAdmin()
    {
   

        $order_count = Order::count();

        $total_revenue = Package::sum('price');
        
        $total_customers = User::where('role','2')->count();
        
        $pending_orders = Order::where('status_id','3')->count();

        $processing_orders = Order::where('status_id','4')->count();

        $inprogress_orders = Order::where('status_id','5')->count();

        $completed_orders = Order::where('status_id','6')->count();

        $canceled_orders = Order::where('status_id','8')->count();


        return [
            "order_count"=>$order_count,
            "total_revenue"=>$total_revenue,
            "total_customers"=>$total_customers,
            "pending_orders"=>$pending_orders,
            "processing_orders"=>$processing_orders,
            "inprogress_orders"=>$inprogress_orders,
            "completed_orders"=>$completed_orders,
            "canceled_orders"=>$canceled_orders
        ];


    }

    public function statsForUser()
    {
        $order_count = Order::count();

        $total_revenue = Package::sum('price');
        
        $total_customers = User::where('role','2')->count();
        
        $pending_orders = Order::where('status_id','3')->count();

        $processing_orders = Order::where('status_id','4')->count();

        $inprogress_orders = Order::where('status_id','5')->count();

        $completed_orders = Order::where('status_id','6')->count();

        $canceled_orders = Order::where('status_id','8')->count();

        return [
            "order_count"=>$order_count,
            "total_revenue"=>$total_revenue,
            "total_customers"=>$total_customers,
            "pending_orders"=>$pending_orders,
            "processing_orders"=>$processing_orders,
            "inprogress_orders"=>$inprogress_orders,
            "completed_orders"=>$completed_orders,
            "canceled_orders"=>$canceled_orders
        ];
    }
}
