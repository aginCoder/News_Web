<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Flasher\Toastr\Laravel\Facade\Toastr;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
        ],[
            'content.required' => 'Nội dung bình luận không được để trống',
        ]);

        $comment = new Comment;
        $comment->post_id = $request->post_id;
        $comment->user_id = $request->user_id;
        $comment->content = $request->content;
        $comment->save();

        toastr()->success('Bình luận thành công');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $comment = Comment::findOrFail($id); 
        return view('admin.comments.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required',
        ],[
            'content.required' => 'Bình luận không được để trống',
        ]);
        $comment = Comment::findOrFail($id);
        $comment->content = $request->content;
        $comment->save();
        session()->flash('success', 'Bình luận của bạn đã được cập nhật thành công.');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $comment = Comment::findOrFail($id);    
        $comment->delete();           
        toastr::success('Xóa thành công!');     
        return redirect()->back();
    }

    public function reply(Request $request, $id)
    {
        $reply = new Comment();
        $reply->content = $request->input('content');
        $reply->parent_id = $id; 
        $reply->user_id = auth()->id(); 
        $reply->save();

        return redirect()->back()->with('success', 'Trả lời thành công!');
    }
}
