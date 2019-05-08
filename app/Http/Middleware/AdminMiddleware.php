<?php

namespace App\Http\Middleware;

use Closure;
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
        if(Auth::check())
        {

           if(Auth::user()->role==1)
                return $next($request);
           else if(Auth::user()->role==0)
                return redirect('user/pages/index');
        }
        else
            return redirect('login')->with('thongbao','Sai tài khoản hoặc mật khẩu');

    }
}
