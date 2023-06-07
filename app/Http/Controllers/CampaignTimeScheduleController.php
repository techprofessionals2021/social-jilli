<?php

namespace App\Http\Controllers;

use App\Http\Requests\CampaignTime\CreateCampaignTimeRequest;
use App\Http\Requests\CampaignTime\GetCampaignTimeRequest;
use Illuminate\Http\Request;

class CampaignTimeScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //    return view('admin.campaignTime.form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(GetCampaignTimeRequest $request)
    {
   
        $request->id = 1;
     
        $response = $request->handle();
       
        // dd($response->minutes);
        
        $route = route('time.store');

        return view('admin.campaignTime.form', ['time' => $response,'route' => $route, 'edit' => false]);//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCampaignTimeRequest $request)
    
    {
    // dd($request);
       $request->id = 1;

       $response = $request->handle();

      
       $route = route('time.store');

       return view('admin.campaignTime.form', ['time' => $response,'route' => $route, 'edit' => false]);//

    //    return view('admin.campaignTime.form');//

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
