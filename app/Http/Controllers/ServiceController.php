<?php

namespace App\Http\Controllers;

use App\Http\Requests\Service\CreateServiceRequest;
use App\Http\Requests\Service\GetAllServicesRequest;
use App\Http\Requests\Service\GetServiceRequest;
use App\Http\Requests\Service\UpdateServiceRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\Service;
use App\Models\Status;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * @param GetAllServicesRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(GetAllServicesRequest $request)
    {
        $response = $request->handle();

        return view('admin.service.index', ['services' => $response]);
    }

    /**
     * @param GetServiceRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(GetServiceRequest $request)
    {
        $request->id = 0;

        $response = $request->handle();

        $getStatus = Status::whereIn('id',[1,2])->get();

        $route = url('service');

        return view('admin.service.form', ['service' => $response,'getStatus' => $getStatus, 'route' => $route, 'edit' => false]);
    }

    /**
     * @param CreateServiceRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateServiceRequest $request)
    {
        $response = $request->handle();

        return redirect()->route('page.index')->with('success', __('custom.create_successfully'));
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
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function edit($id)
    {

        $request = new GetServiceRequest();

        $request->id = $id;

        $response = $request->handle();

        if (!isset($response->id)) {
            return redirect()->route('service.index')->with('error',__('custom.data_not_found'));
        }
        $getStatus = Status::whereIn('id',[1,2])->get();
        $route = route('service.update', ['service' => $response->id]);

        return view('admin.service.form', ['service' => $response,'getStatus' => $getStatus, 'route' => $route, 'edit' => true]);
    }

    /**
     * @param UpdateServiceRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateServiceRequest $request, $id)
    {
        $request->id = $id;

        $response = $request->handle();

        return redirect()->route('service.index')->with('success', __('custom.edit_successfully'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Service::find($id)->delete();

        return redirect()->route('service.index')->with('success', __('custom.deleted_successfully'));
    }
}
