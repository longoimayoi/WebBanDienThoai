<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if(Session::has('login') && Session::get('login') == true)
        /*if(Auth::check())*/
        {
           if(Session::get('role')==1)
                return $next($request);
           else if(Session::get('role')==0)
                return redirect('user/pages/index');
        }
        else
            return redirect('login')->with('thongbao','Sai tài khoản hoặc mật khẩu');

    }
}
