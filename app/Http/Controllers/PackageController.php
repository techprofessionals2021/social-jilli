<?php

namespace App\Http\Controllers;

use App\Http\Requests\Package\CreatePackageRequest;
use App\Http\Requests\Package\GetAllPackagesRequest;
use App\Http\Requests\Package\GetPackageRequest;
use App\Http\Requests\Package\UpdatePackageRequest;
use App\Http\Requests\Service\GetAllServicesRequest;
use App\Models\Package;
use App\Models\Status;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * @param GetAllPackagesRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(GetAllPackagesRequest $request)
    {
        $response = $request->handle();

        return view('admin.package.index', ['packages' => $response]);
    }

    public function service_package(GetAllPackagesRequest $request)
    {
        $response = $request->handleForUser();

        return view('user.package.index', ['packages' => $response]);
    }

    public function service_package_for_front(GetAllPackagesRequest $request)
    {
        $response = $request->handleForUser();

        $listing_categories = $request->handleForUser();


        return view('front.services', ['packages' => $response,'listing_categories' => $listing_categories]);
    }

    public function service_package_for_front_search(Request $request)
    {
        // dd($request->id);
         $data = new GetAllPackagesRequest();

         $data->id = $request->id;
         $data->search = $request->search;

 
        $response = $data->handleForUserSearch();

        $packages = new GetAllPackagesRequest();

        $listing_categories = $packages->handleForUser();


        return view('front.services', ['packages' => $response,'listing_categories' => $listing_categories]);
    }


    public function service_package_for_panel_search(Request $request)
    {
        // dd($request->id);
         $data = new GetAllPackagesRequest();

         $data->search = $request->search;

         $packages = $data->handleForServiceSearchPanel();

         return view('user.package.index',compact('packages'));
    }
    

    /**
     * @param GetPackageRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(GetPackageRequest $request)
    {
        $request->id = 0;

        $response = $request->handle();

        $getStatus = Status::whereIn('id',[1,2])->get();

        $services = new GetAllServicesRequest();

        $services = $services->handle();

        $route = url('package');

        return view('admin.package.form', ['package' => $response,'services' => $services,'getStatus' => $getStatus, 'route' => $route, 'edit' => false]);
    }

    /**
     * @param CreatePackageRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreatePackageRequest $request)
    {
        $response = $request->handle();

        return redirect()->route('package.index')->with('success', __('custom.create_successfully'));
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

        $request = new GetPackageRequest();

        $request->id = $id;

        $response = $request->handle();

        if (!isset($response->id)) {
            return redirect()->route('package.index')->with('error',__('custom.data_not_found'));
        }
        $getStatus = Status::whereIn('id',[1,2])->get();

        $services = new GetAllServicesRequest();

        $services = $services->handle();

        $route = route('package.update', ['package' => $response->id]);

        return view('admin.package.form', ['package' => $response,'services' => $services,'getStatus' => $getStatus, 'route' => $route, 'edit' => true]);
    }

    /**
     * @param UpdatePackageRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdatePackageRequest $request, $id)
    {
        $request->id = $id;

        $response = $request->handle();

        return redirect()->route('package.index')->with('success', __('custom.edit_successfully'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Package::find($id)->delete();

        return redirect()->route('package.index')->with('success', __('custom.deleted_successfully'));
    }
}
