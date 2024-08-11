<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class loginController extends Controller
{
    public function index1(){
        return view("admin.auth.register");  // render giao diện
    }
    public function index(){
        return view("admin.auth.login");  // render giao diện
    } 

    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5',
            'password_c' => 'same:password',
        ],[
            'name.required' => 'Bạn chưa nhập tên',
            'email.required' => 'Bạn chưa nhập email!',
            'email.email' => 'Email không đúng định dạng!',
            'password.required' => 'Bạn chưa nhập mật khẩu!',
            'password.passqord_c' => 'Bạn nhập lại mật khẩu chưa đúng!',
            'password.min' => 'Độ dài mật khẩu tối thiểu là 5!',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = 1;
        $user->save();

        if($user){
            toastr()->success('Đăng ký thành công');
            return redirect()->route('admin.login.index');
        }else{
            toastr()->error('Đăng ký thất bại');
            return  redirect()->back();
        }
    }


    public function login(LoginRequest $request){        
        $validated = $request->validate([        
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($validated)) {
            $user = Auth::user();
            toastr()->success('Đăng nhập thành công');
            return redirect()->route('admin.dashboard');
        }
        toastr()->error('Đăng nhập thất bại');
        return redirect()->back();      
    }

    public function doLogout(Request $request){         
        Auth::logout();                 

        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
        toastr()->success('Đăng xuất thành công');  
        return redirect()->route('login');       
    }
}
