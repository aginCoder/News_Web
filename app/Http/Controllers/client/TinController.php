<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class TinController extends Controller
{
    public function index(){
        $tinmoi = Post::with('user', 'categories')
                    ->orderBy('created_at', 'desc')
                    ->limit(9)->get();
        $categories = Category::all();
        return view('client.layouts.page.home.index', compact(
            'tinmoi',
            'categories'
        ));
    }

    public function tin(){
        $category = Category::with('posts')->first();
        if (!$category) {
            abort(404); 
        }
        $categories = Category::all();

        return view('client.layouts.page.loaiTin.tin', compact(
            'category',
            'categories'
        ));
    }
    public function loaitin($slug)
    {
        $tinmoinhat = Post::with('user', 'categories')
        ->where('status', 'public')
        ->orderByDesc('created_at')
        ->limit(4)->get();
        $slug = str_replace(".html", "", $slug);
        
        $categories = Category::all();

        $category = Category::with('posts')->where('slug', $slug)->first();
        if ($category == NULL) {
            return abort(403, 'Loại tin không tồn tại');
        }

        return view("client.layouts.page.loaiTin.tin", compact(
            'category',
            'tinmoinhat',
            'categories'
        ));
    }

    public function tinchitiet($slug)
    {
        $slug = str_replace(".html", "", $slug);
        $post = Post::where('slug', $slug)->where('status', 'public')->first();
        if ($post == NULL) {
            return abort(403, 'Trang không tồn tại');
        }

        $tinmoinhat = Post::with('user', 'categories')
        ->where('status', 'public')
        ->orderByDesc('created_at')
        ->limit(4)->get();
        $id_danhmuc = $post->categories()->first()->id;
        $tinlienquan = Category::with('posts')->find($id_danhmuc);
        // dd($tinlienquan->posts);
        // dd($post);
        return view("client.pages.detail", compact(
            'post',
            'tinlienquan',
            'tinmoinhat'
        ));
    }

    function tinmoi()
    {
        $tinmoinhat = Post::with('user', 'categories')
            ->where('status', 'public')
            ->orderByDesc('created_at')
            ->limit(4)->get();
        $title = "Tin mới nhất";
        $meta_description = 'Tin mới nhất';
        $meta_keyword = 'Tin xem nhiều, xem nhiều,...';
        $data = Post::with('user', 'categories')
            ->where('status', 'public')
            ->orderByDesc('created_at')
            ->limit(10)->paginate(2);
        return view('Client.pages.tinmoinhat', compact(
            'title',
            'data',
            'meta_description',
            'meta_keyword',
            'tinmoinhat'
        ));
    }

    function tinxemnhieu()
    {
        $tinmoinhat = Post::with('user', 'categories')
        ->where('status', 'public')
        ->orderByDesc('created_at')
        ->limit(4)->get();
        $title = "Tin xem nhiều";
        $meta_description = 'Tin xem nhiều';
        $meta_keyword = 'Tin xem nhiều, xem nhiều,...';
        $data = Post::with('user', 'categories')
            ->where('status', 'public')
            ->orderByDesc('view')
            ->limit(10)->paginate(2);
        return view('Client.pages.tinmoinhat', compact(
            'title',
            'data',
            'meta_description',
            'meta_keyword',
            'tinmoinhat'
        ));
    }
    public function ctt($slug){ 
        // @dd($comments);
        $slug = str_replace(".html", "", $slug);
        $post = Post::with('user', 'categories')
                ->where('slug', $slug)->first();
        $categories = Category::all();
        return view('client.layouts.page.chiTietTin.ctt', compact(
            'post',
            'categories',
            'slug'
        ));
    }

    function timKiem(Request $request)
    {
        $categories = Category::all();
        if(isset($_POST['keyword']) && $_POST['keyword'] != ""){
            // Kiểm tra xem tham số 'keyword' có tồn tại trong URL hay không
            $keyword = '%' . $request->keyword . '%';
            // Lưu giá trị tìm kiếm vào biến $q
            $posts = Post::where('name', 'like', $keyword)  // Lọc các bài viết có tên chứa chuỗi tìm kiếm $q
                        ->where('status', 'public') // chỉ lấy các bài viết có trạng thái là 1
                        ->get();
            
            // Truy vấn cơ sở dữ liệu đồng thời load các quan hệ user và categories để giảm số lượng truy vấn.
            return view('client.layouts.page.timkiem.search', compact(
                'posts'
                ,'categories'
            ));
        }
        $posts = NULL;
        // Nếu không có tham số tìm kiếm, đặt $posts là NULL và trả về view với biến $posts là NULL.
        return view('client.layouts.page.timkiem.search', compact(
            'posts',
            'categories'
        ));
    }
}
