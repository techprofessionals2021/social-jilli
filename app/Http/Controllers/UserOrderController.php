<?php

namespace App\Http\Controllers;

use App\Http\Requests\Order\GetOrderByStatusRequest;
use App\Http\Requests\Package\GetAllPackagesRequest;
use App\Http\Requests\Service\GetAllServicesRequest;
use App\Http\Requests\Service\GetServiceRequest;
use App\Http\Requests\User\GetUserRequest;
use App\Http\Requests\UserOrder\CreateUserOrderRequest;
use App\Http\Requests\UserOrder\GetAllUserOrdersRequest;
use App\Http\Requests\UserOrder\GetUserOrderByStatusRequest;
use App\Http\Requests\UserOrder\GetUserOrderRequest;
use App\Models\Order;
use App\Models\Package;
use App\Models\Status;
use Illuminate\Http\Request;

class UserOrderController extends Controller
{
    /**
     * @param GetAllUserOrdersRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(GetAllUserOrdersRequest $request)
    {
        $response = $request->handle();

        $getStatus = Status::whereIn('id',[3,4,5,6,7,8,9])->get();

        // dd($getStatus);

        return view('user.order.index', ['orders' => $response,'getStatus' => $getStatus]);
    }

    public function user_order_by_status($slug)
    {

        $status = Status::where('slug',$slug)->first();

        $request = new GetUserOrderByStatusRequest();

        $request->status_id = $status->id;

        $response = $request->handle();

        $getStatus = Status::whereNotIn('id',[1,2])->get();

        return view('user.order.index', ['orders' => $response,'getStatus' => $getStatus]);
    }

    /**
     * @param GetUserOrderRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(GetUserOrderRequest $request)
    {
        $request->id = 0;

        $response = $request->handle();

        $getStatus = Status::whereIn('id',[1,2])->get();

        $services = new GetAllServicesRequest();

        $services = $services->handle();

        $route = url('user-order');

        return view('user.order.form', ['user_order' => $response,'getStatus' => $getStatus, 'services' => $services,'route' => $route, 'edit' => false]);
    }

    public function getPackageByServiceId(Request $request)
    {
        $servicePackages = Package::where('service_id', $request->service_id)->get();
//        dd($servicePackages);
        $body = "<option value='' selected>".__('Select Package')."</option>";
        if ($servicePackages) {
            foreach ($servicePackages as $key => $value) {
                $body .= "<option value='" . $value->id . "' data-price='" . $value->price . "' data-min-val='" . $value->min . "' data-max-val='" . $value->max . "' data-desc='" . $value->description . "' >" . $value->name ."--$". $value->price ."</option>"; // if this not working try below
//          $body[$key] = "<option value='".$value->id."'>".$value->name."</option>";  // Todo  Resolved
            }
            $bod['status'] = 1;
            $bod['body'] = $body;
        } else {
            $bod['status'] = 0;
            $bod['body'] = $bod;
        }

        $response = json_encode($bod);
        return $response;
    }

    /**
     * @param CreateUserOrderRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateUserOrderRequest $request)
    {
        $response = $request->handle();

        return redirect()->route('user-order.index')->with('success', __('custom.create_successfully'));
    }

    public function massOrderSelection(GetAllPackagesRequest $request)
    {
        $services = $request->handleForUser();

        $route = route('user_mass_order_submit');

        return view('user.order.mass-form-select', [ 'services' => $services,'route' => $route]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function massOrderSelectionSubmit(Request $request)
    {

        $getPackages = Package::whereIn('id',$request->servicePackages)->get();

        $route = route('user_mass_order_create_submit');

        return view('user.order.mass-form', [ 'getPackages' => $getPackages,'route' => $route]);

    }

    /**
     * @param Request $request
     */
    public function massOrderSelectionCreateSubmit(Request $request)
    {
        $user = auth()->user();
        foreach ($request->packageids as $key => $params){
        $getPackage = Package::find($params);
        $perPrice = $getPackage->price/1000;

        $item = new Order();
        $item->order_id = rand(8,1000000);
        $item->api_order_id = rand(8,1000000);
        $item->user_id  = $user->id;
        $item->package_id = $params;
        $item->link = $request['link'][$key];
//        $item->price = $request['order-price'][$key]; // from front site but its not technically save.
        $item->price = $perPrice*$request['quantity'][$key];
        $item->quantity = $request['quantity'][$key];
        $item->create_by = $user->id;
        $item->status_id = 3; // pending
        $item->start_counter = 0;
        $item->remains = $request['quantity'][$key];

        $item->save();
        }

        return redirect()->route('user-order.index')->with('success', __('custom.create_successfully'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
