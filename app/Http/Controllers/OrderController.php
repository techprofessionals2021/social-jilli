<?php

namespace App\Http\Controllers;

use App\Http\Requests\Order\GetAllOrdersRequest;
use App\Http\Requests\Order\GetOrderByStatusRequest;
use App\Models\Order;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Service\GetAllServicesRequest;
use App\Models\Service;
use Illuminate\Database\Eloquent\Model;

class OrderController extends Controller
{
    /**
     * @param GetAllOrdersRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(GetAllOrdersRequest $request)
    {
        $response = $request->handle();

        $getStatus = Status::whereIn('id', [3, 4, 5, 6, 7, 8, 9])->get();

        return view('admin.order.index', ['orders' => $response, 'getStatus' => $getStatus]);
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function order_by_status($slug)
    {
        $status = Status::where('slug', $slug)->first();

        $request = new GetOrderByStatusRequest();

        $request->status_id = $status->id;

        $response = $request->handle();

        $getStatus = Status::whereNotIn('id', [1, 2])->get();

        return view('admin.order.index', ['orders' => $response, 'getStatus' => $getStatus]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order, Request $request)
    {
        $getStatus = 1;
        $id = $order->id;
        $services = DB::table('services')->get();
        $package = DB::table('packages')->get();
        $orders = DB::table('orders')
            ->join('packages', 'orders.package_id', '=', 'packages.id')
            ->join('services', 'packages.service_id', '=', 'services.id')
            ->select('packages.name as packName', 'packages.id as packId', 'services.id as servId', 'services.name as servName', 'services.description as servDesc', 'orders.link', 'orders.quantity', 'orders.price')
            ->where('orders.id', '=', $order->id)
            ->first();
        return view('user.order.edit-form', compact('orders', 'services', 'package', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $getStatus = Status::whereIn('id', [3, 4, 5, 6, 7, 8, 9])->get();
        $response = new GetAllOrdersRequest;
        $orders = $response->handle();

        $update_orders = Order::find($request->order_id);
        $update_orders->package_id = $request->package_id;
        $update_orders->link = $request->link;
        $update_orders->quantity = $request->quantity;
        $update_orders->save();
        
        return redirect()->route('order.index')->with('updated_success', 'Updated successfully!');;
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    /**
     * @param Request $request
     * @return false|string
     */
    public function update_order_status(Request $request)
    {
        $item = Order::find($request->orderId);
        $item->status_id = $request->selectedOptions;
        $item->save();

        $bod['status'] = 1;
        return json_encode($bod);
    }
}
