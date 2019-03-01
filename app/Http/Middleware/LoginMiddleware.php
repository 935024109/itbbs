<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(session('flag') == false){
            return response()->view('admin.login.index');
        } else {
           $auth = User::select('auth')->find(session('id'))->auth;
            if($auth == 0){
                session(['flag'=>false]); 
                session()->forget('uname');
                session()->forget('id');
                session()->forget('photo');
                return response()->view('admin.login.index');
            }
        }
        return $next($request);
    }
}
