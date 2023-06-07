<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\GetAllUsersRequest;
use App\Http\Requests\User\GetUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @param GetAllUsersRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(GetAllUsersRequest $request)
    {
        $response = $request->handle();

        return view('admin.user.index', ['users' => $response]);
    }

    /**
     * @param GetUserRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(GetUserRequest $request)
    {
        $request->id = 0;

        $response = $request->handle();

        $route = url('user');

        return view('admin.user.form', ['user' => $response, 'route' => $route, 'edit' => false]);
    }

    /**
     * @param CreateUserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store (CreateUserRequest $request)
    {
        $response = $request->handle();

        return redirect()->route('user.index')->with('success', __('custom.create_successfully'));
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse]
     */
    public function edit($id)
    {
        $request = new GetUserRequest();

        $request->id = $id;

        $response = $request->handle();

        if (!isset($response->id)) {
            return redirect()->route('user.index')->with('error',__('custom.data_not_found'));
        }

        $route = route('user.update', ['user' => $response->id]);

        return view('admin.user.form', ['user' => $response, 'route' => $route, 'edit' => true]);
    }

    /**
     * @param UpdateUserRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $request->id = $id;

        $response = $request->handle();

        return redirect()->route('user.index')->with('success', __('custom.edit_successfully'));
    }

    /**]
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('user.index')->with('success', __('custom.deleted_successfully'));
    }
}
