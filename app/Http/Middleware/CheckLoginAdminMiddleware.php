<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckLoginAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dùng cho mấy trang đã đăng nhập, đăng ký
        if(!Auth::check()){          
            return $next($request);
        }else if(Auth::check() && Auth::user()->role == "2" && Auth::user()->status == "1"){
            return redirect()->route('admin.dashboard');       
        } else{
            Auth::logout();
            return redirect()->route('admin.auth.login');         
        }
    }
}
