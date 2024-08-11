<div class="{{ $class ?? '' }} comment d-flex shadow-sm p-3 mb-3 bg-white rounded"> 
    <div class="flex-shrink-0">
        <div class="avatar avatar-sm rounded-circle avarta_vd">
            <img class="avatar-img" src="https://ui-avatars.com/api/?name={{ $comment->user->name }}&background=random" alt="Avatar của {{$comment->user->name}}" class="img-fluid">
        </div>
    </div>
    <div class="flex-shrink-1 ms-2 ms-sm-3 w-100">
        <div class="comment-meta d-flex justify-content-between">
            <h6>
                <a class="text-secondary font-weight-bold" href="">{{$comment->user->name}}</a>
                <small class="text-muted">
                    <i>{{$comment->created_at}}</i>
                </small>
            </h6>
            @auth
            <div class="comment-actions">
                <a data-bs-toggle="collapse" href="#collapseRep_{{ $comment->id }}" role="button" aria-expanded="false" 
                    aria-controls="collapseRep_{{ $comment->id }}" type="button" 
                    class="btn btn-outline-success btn-sm"><i class="bi bi-reply"></i></a>
                @if (Auth()->user()->id == $comment->user->id)
                    <a data-bs-toggle="collapse" href="#collapseEdit_{{ $comment->id }}" role="button" aria-expanded="false" 
                        aria-controls="collapseEdit_{{ $comment->id }}" type="button" 
                        class="btn btn-outline-success btn-sm"><i class="bi bi-pencil-square"></i></a>
                    <a onclick="return confirm('Bạn có chắc muốn xóa cmt không?')" 
                    href="{{ route('admin.comment.delete', $comment->id) }}" class="btn btn-outline-success btn-sm"><i class="bi bi-trash"></i></a>
                @endif
            </div>
            @endauth
        </div>
        <div class="comment-body">
            <p>{{$comment->content}}</p>
        </div>

        {{-- Rep cmt --}}
        <div class="collapse" id="collapseRep_{{ $comment->id }}">
            <div class="card card-body">
                <form action="{{ route('comments.reply', ['id' => $comment->id]) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="replyContent_{{ $comment->id }}" class="form-label">Your Reply</label>
                        <textarea name="content" id="replyContent_{{ $comment->id }}" class="form-control" rows="3" placeholder="Write your reply..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Reply</button>
                </form>                
            </div>
        </div>
                
        {{-- Edit cmt --}}
        <form action="{{ route('comments.update', ['comment' => $comment->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="collapse" id="collapseEdit_{{ $comment->id }}">
                <div class="card card-body">
                    <form action="{{ route('comment.update') }}" method="post">
                        @csrf
                        <div class="col-12 mb-3">
                            <textarea class="form-control small-textarea" name="content" id="comment-message" 
                                placeholder="Enter your comment" required>{{ $comment->content }}</textarea>
                        </div>
                        @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div>
                            <button type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseEdit_{{ $comment->id }}"
                                aria-expanded="false" aria-controls="collapseEdit_{{ $comment->id }}"
                                class="btn btn-sm btn-outline-danger">Hủy</button>
                            <button type="submit" class="btn btn-outline-primary">Gửi</button>
                        </div>
                    </form>
                </div>
            </div>
        </form>
    </div>
</div>

@foreach ($comment->replies as $reply)
    <div class="cmt_reply">
        @include('client.layouts.page.chiTietTin.components.comment', [
            'comment'=> $reply, 
            'class' => 'cmt_reply'])
    </div>
@endforeach


<style>
    .comment {
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 15px;
        background-color: #f9f9f9;
    }

    .cmt_reply {
        border-left: 2px solid #6c757d;
        padding-left: 30px;
        margin-top: 15px;
        background-color: #f1f1f1;
        border-radius: 10px;
    }

    .comment:not(.cmt_reply) {
        border-left: none;
    }

    .avatar img {
        border-radius: 50%;
        border: 2px solid #6c757d;
    }

    .comment-meta h6 a {
        color: #007bff;
    }

    .comment-meta h6 a:hover {
        color: #0056b3;
        text-decoration: underline;
    }

    .comment-actions {
        display: flex;
        gap: 5px;
    }

    .btn-outline-success {
        border-color: #28a745;
        color: #28a745;
    }

    .btn-outline-success:hover {
        background-color: #28a745;
        color:
    }
</style>
