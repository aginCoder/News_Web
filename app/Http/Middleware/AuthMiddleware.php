<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dùng cho mấy trang đã đăng nhập rồi mới sử dụng đc
        // if(Auth::check() && Auth::user()->role == "2" && Auth::user()->status == "1"){
            if(Auth::check()){
            return $next($request);
        } else {     
            Auth::logout();          
            toastr()->error('Lỗi đăng nhập');
            return redirect()->route('admin.login.index');  
        }
    }
}
