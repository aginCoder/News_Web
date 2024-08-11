<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategory;
use Flasher\Toastr\Laravel\Facade\Toastr;

class CategoryController extends Controller
{
    public function index(){
        // foreach (Category::all() as $test) {
        //     echo $test->name. '<br>';
        // }

        $title = " Quản lý danh mục";
        $category = Category::all();    // lấy tất cả danh mục
        return view('admin.page.category.index', compact(   // render giao diện, truyền data xuống giao diện
            'category',
            'title',    
        ));
    }

    public function create(){
        $title = 'Thêm mới danh mục';
        return view('admin.page.category.create', compact(   // render giao diện, truyền data xuống giao diện
            'title',    
        ));
    }

    public function store(StoreCategoryRequest $request){
        $category = Category::create([
            // dùng để tạo và lưu một bản ghi mới trong bảng categories của cơ sở dữ liệu. 
            'name' => $request->name,       // Lưu tên danh mục từ dữ liệu gửi đến.
            'slug' => Str::slug($request->name, '-'),  //dùng STR của laravel chuyển name -> slug
            'meta_keyword' => $request->meta_keyword,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);

        toastr()->success('thêm danh mục mới thành công!');
        return redirect()->route('admin.category');
    }

    public function edit($id){
        $title = 'Chỉnh sửa danh mục';
        $category = DB::table('categories')->find($id); 
        // để thực hiện truy vấn cơ sở dữ liệu
        return view('admin.page.category.edit', compact(
            'title',
            'category',
        ));
    }

    public function update(UpdateCategory $request, $id){
        // categoryUpdate là một đối tượng đại diện cho một bản ghi danh mục trong cơ sở dữ liệu
        $categoryUpdate = Category::find($id);
        $categoryUpdate->name = $request->name;    // $request chứa dữ liệu từ form gửi lên và gán giá trị mới
        $categoryUpdate->slug = Str::slug($request->name, '-');
        $categoryUpdate->meta_keyword = $request->meta_keyword;
        $categoryUpdate->meta_title = $request->meta_title;
        $categoryUpdate->meta_description = $request->meta_description;
        $categoryUpdate->save();

        toastr()->success('Cập nhật thành công');
        return redirect()->route('admin.category');
    }

    public function delete($id){
        $category = Category::findOrFail($id);    
        $category->delete();           
        toastr::success('Xóa thành công!');      
        return redirect()->back();
    }
}
