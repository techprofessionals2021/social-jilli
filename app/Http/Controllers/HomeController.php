<?php

namespace App\Http\Controllers;

use App\Http\Requests\Dashboard\GetAllStatsRequest;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(GetAllStatsRequest $request)
    {
       
        $getCurrentUser = Auth::user();

        if ($getCurrentUser->role == 1) {
            $admin_stats = $request->statsForAdmin();
         
            return view('admin.dashboard.index',compact('admin_stats'));
 
        }

     
        else {
            $user_stats = $request->statsForUser(); 
            
            return view('admin.dashboard.index',compact('user_stats'));
        }

      
    }
}
