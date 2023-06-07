<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        if (!isset($user)){
            return redirect()->route('login');
        }
//        $userRole = $user->getRoles()->first();

//        if ($userRole != 'admin'){
        if ($user->role != 1){
            return redirect()->route('home');
        }
        return $next($request);
    }
}
