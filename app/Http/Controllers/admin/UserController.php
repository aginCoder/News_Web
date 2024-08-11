<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Flasher\Toastr\Laravel\Facade\Toastr;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\admin\users;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Flight;
use Spatie\Permission\Models\Role;    
use Spatie\Permission\Models\Permission;
class UserController extends Controller
{
    public function index(){

        $users = User::all();      // lấy tất cả user
        $title = "Quản lý thành viên";
        return view('admin.page.user.index', compact(        // Muốn truyền xuống giao diện phải dùng compact
            'users',
            'title'
        ));
    }

    
    public function create(){
        $roles = Role::all(); // lấy để truyền vào giao diện phần quyền hạn
        $title = "Thêm mới thành viên"; // truyền tiêu đề trang
        return view('admin.page.user.create_edit', compact(
            'title',
            'roles'
        )); // trả về view thêm
    }

    public function store(StoreUserRequest $request){ 
        $user = new User(); // tạo ra 1 user mới
        $user->name = $request->name;
        // Gán giá trị name từ ($request) cho thuộc tính name của đối tượng User
        $user->email = $request->email;
        $user->password = $request->password;
        $user->status = $request->status;
        $user->save();

        $user->assignRole($request->role); // gán vai trò cho người dùng

        if($user){
            toastr()->success('Thêm thành viên thành công');
            return redirect()->route('admin.user');
        }else{
            toastr()->error('Thêm thành viên thất bại');
            return redirect()->back();
        }
    }

    public function edit($id){ // lấy id của row cần edit
        $roles = Role::all(); // lấy all row quyền
        $title = 'Chỉnh sửa thành viên';
        $user = User::find($id); // lấy user thông tin cần sửa
        return view('admin.page.user.edit', compact(
            'title',
            'user',
            'roles'
        ));
    }

    public function update(UpdateUserRequest $request, $id){
        $validated = $request->validate([
            'name' => 'required',
            'status' => 'required',
            'role' => 'required'             
        ]); 

        $userUpdate = User::find($id);  // lấy user cần sửa
        $userUpdate->name = $request->name;
        $userUpdate->status = $request->status;
        // $userUpdate-> là dữ liệu cũ
        // $request chứa dữ liệu từ form gửi lên và gán giá trị mới
        $userUpdate->save();
        $userUpdate->syncRoles($request->role);

        if($userUpdate){
            toastr()->success('Cập nhật thành công');
            return redirect()->route('admin.user');
        }else{
            toastr()->error('Sửa thành viên thất bại');
            return redirect()->back();
        }
    }

    public function delete($id){
        $user = User::findOrFail($id);    
        $user->delete();           
        toastr::success('Xóa thành công!');      
        return redirect()->back();
    }
}