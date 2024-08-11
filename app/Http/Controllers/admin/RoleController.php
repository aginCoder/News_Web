<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index(){
        $title = 'Danh sách vai trò';
        $roles = Role::all();
        return view('admin.page.role.index', compact(
            'roles',
            'title'
        ));
    }

    function create(){
        $permissions = Permission::all();
        // Truy vấn tất cả các quyền hạn từ bảng permissions bằng câu lệnh Permission::all()
        return view('admin.page.role.create', compact(
            'permissions'
            // Trả về view admin.page.role.create,  
            // đồng thời truyền biến permissions vào view bằng compact('permissions').
        ));
    }
    
    function store(Request $request){
        $request->validate([     // kiểm tra dữ liệu đầu vào
            'role_name' => 'required|unique:roles,name',
            // role_name là bắt buộc và phải là duy nhất trong bảng roles
        ],[
            'role_name.required' => 'Tên vai trò không được để trống',
            'role_name.unique' => 'tên vai trò đã tồn tại'
            // nếu dữ liệu không hợp lệ sẽ thông báo ra
        ]);

        // tạo mới vai trò
        $role = Role::create(['name' => $request->role_name]);
        // Kiểm tra xem cso quyền nào được chọn không, nếu có thì thêm vào bảng role_has_permission
        if ($request->has('permissions')){
            $role->syncPermissions($request->permissions);
            // Nếu người dùng đã chọn các quyền hạn,
            // sử dụng $role->syncPermissions($request->permissions) 
            // để đồng bộ hóa các quyền hạn được chọn vào vai trò mới tạo
        }
        toastr()->success ('Thêm vai trò thành công');
        return redirect()->route('admin.page.role');
    }

    public function edit($id) {
        $role = Role::findOrFail($id);
        // Truy vấn tất cả các vai trò từ bảng role bằng câu lệnh Role::findOrFail($id)
        // Nếu không tìm thấy vai trò với ID tương ứng, nó sẽ ném ra một ngoại lệ. 
        $permissions = Permission::all();
        return view('admin.page.role.edit', compact(
            'permissions',
            'role'
            // Trả về view admin.page.role.edit,  
            // đồng thời truyền biến permissions, role vào view bằng compact('permissions', 'role').
        ));
    }

    public function update(Request $request, $id) {   // Đây là hàm xử lý khi người dùng gửi form để cập nhật vai trò.
        $request->validate([        // kiểm tra dữ liệu đầu vào
            'role_name' => 'required|unique:roles,name,'.$id,
            'permissions' => 'array'    // Biến permissions phải là một mảng nếu được truyền.
        ]);
        $role = Role::findOrFail($id);
        // Truy vấn vai trò cần cập nhật từ bảng roles bằng câu lệnh Role::findOrFail($id).
        $role->update(['name' => $request->role_name]);       // Cập nhật tên vai trò
            if ($request->has('permissions')) {
                $role->syncPermissions($request->permissions);
            } 
            // Nếu người dùng đã chọn các quyền hạn, dùng $role->syncPermissions($request->permissions) để đồng bộ hóa các quyền hạn được chọn
        toastr()->success('Cập nhật vai trò thành công');
        return redirect()->route('admin.page.role');
    }

    public function delete($id) {
        $role = Role::findOrFail($id);
        $role->delete();         // xóa vai trò đã tìm thấy
        toastr()->success('Xóa vai trò thành công');
        return redirect()->route('admin.page.role');
    }
}
