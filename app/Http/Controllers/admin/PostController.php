<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use Flasher\Toastr\Laravel\Facade\Toastr;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestEmail;
use App\Mail\ApprovePost;
use App\Mail\OrderShipped;
use App\Models\User;

class PostController extends Controller
{
    public function index(){
        $title = " Quản lý bài viết";
        $post = Post::all();    
        return view('admin.page.post.index', compact(   // render giao diện, truyền data xuống giao diện
            'post',
            'title',    
        ));
    }
    public function create(){
        $title = 'Thêm bài viết';
        $category = Category::all();
        return view('admin.page.post.create', compact(
            'title',
            'category',
        ));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|unique:posts',
            'id_category' => 'required' 
        ],[
            'name.required' => 'Trường tên bài viết không được để trống',
            'name:unique' => 'Trường tên bài viết đã tồn tại',
            'id_category.required' => 'Chưa chọn danh mục bài viết',
        ]);

        $post = new Post;
        $post->name = $request->name;
        $post->slug = Str::slug($request->name);
        $post->short_content = $request->short_content;
        $post->content = $request->content;
        $post->thumbnail = $request->thumbnail;
        $post->status = 'pending';
        $post->user_id = Auth::user()->id;
        $post->meta_title = $request->meta_title;
        $post->meta_keyword = $request->meta_keyword;
        $post->meta_description = $request->meta_description;

        $post->save();

        foreach($request->id_category as $category){
            $post->categories()->attach($category);
        }

        toastr()->success('Thêm bài viết thành công');
        return to_route('admin.post');
    }
    public function edit($id){  
        $title = 'Chỉnh sửa bài viết';
        $post = Post::find($id); 
        $category = Category::all();
        return view('admin.page.post.edit', compact(
            'title',
            'post',
            'category',
        ));
    }
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|unique:posts,name,' . $id,
            'id_category' => 'required',
        ], [
            'name.required' => 'Trường tên bài viết không được để trống',
            'name.unique' => 'Trường tên bài viết đã tồn tại',
            'id_category.required' => 'Chưa chọn danh mục bài viết',
        ]);
        
        $post = Post::find($id);
        $post->name = $request->name;
        $post->slug = Str::slug($request->name);
        $post->short_content = $request->short_content;
        $post->content = $request->content;
        $post->thumbnail = $request->thumbnail;
        $post->status = 'pending';
        $post->user_id = Auth::user()->id;
        $post->meta_title = $request->meta_title;
        $post->meta_keyword = $request->meta_keyword;
        $post->meta_description = $request->meta_description;
        $post->save();

        
        $post->categories()->sync($request->id_category);

        toastr()->success('Cập nhật thành công');
        return redirect()->route('admin.post');
    }
    public function delete($id){
        $post = Post::findOrFail($id);    
        $post->delete();           
        toastr::success('Xóa thành công!');      
        return redirect()->back();
    }

    // Quản lý trang thái bài viết
    public function indexApprove(){
        $title = 'Duyệt bài viết';
        $posts = Post::where('status', 'pending')->get();

        return view('admin.page.post.approve.index', compact(
            'title',
            'posts'
        ));
    }

    public function viewApprove($slug){
        $title = "Xem bài viết";
        $post = Post::where('slug', $slug)->first();
     
        return view('admin.page.post.approve.view', compact(
            'title',
            'post'
        ));
    }

    public function statusApprove($id, $status){
        $post = Post::find($id);
        $post->status = $status;
        $post->save();
        
        if($status == 'reject'){
            $notice = 'Bài viết đã bị từ chối';
            Mail::to($post->user->email)->send(new ApprovePost($post, $notice));
            toastr()->success('Từ chối bài viết');
        }

        $notice = 'Bài viết đã được duyệt';
        Mail::to($post->user->email)->send(new ApprovePost($post, $notice));
        toastr()->success('Đã duyệt bài viết');
        return back();
    }
}
