<?php

namespace App\Http\Controllers;

use App\Http\Requests\Page\CreatePageRequest;
use App\Http\Requests\Page\GetAllPagesRequest;
use App\Http\Requests\Page\GetPageRequest;
use App\Http\Requests\Page\UpdatePageRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetAllPagesRequest $request)
    {
        $pages = $request->handle();

        // dd($pages);

        return view('admin.page.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(GetPageRequest $request)
    {
        $request->id = 0;

        $response = $request->handle();

        $route = url('page');

        return view('admin.page.form', ['page' => $response,'edit' => false,'route' => $route]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePageRequest $request)
    {
        $response = $request->handle();

        return redirect()->route('page.index')->with('success', __('custom.create_successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $request = new GetPageRequest();

        $request->id = $id;

        $response = $request->handle();

        if (!isset($response->id)) {
            return redirect()->route('page.index')->with('error',__('custom.data_not_found'));
        }
    
        $route = route('page.update', ['page' => $response->id]);

        return view('admin.page.form', ['page' => $response, 'route' => $route, 'edit' => true]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePageRequest $request, $id)
    {
        $request->id = $id;

        $response = $request->handle();

        return redirect()->route('page.index')->with('success', __('custom.edit_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }

    public function get_page_by_slug($slug)
    {
        $request = new getPageRequest();

        $request->slug = $slug;

        $page = $request->getPageBySlug();
        // dd($request);

        return view('front.page-slug',compact('page'));
        
        
    }

    
}
