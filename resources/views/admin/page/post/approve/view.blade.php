@extends('admin.layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.approve-post.status', ['id' => $post->id, 'status' => 'public']) }}" class="btn btn-primary me-2" onclick="return confirm('Chắc không?')">Duyệt</a>
            <a href="{{ route('admin.approve-post.status',  ['id' => $post->id, 'status' => 'reject']) }}" class="btn btn-danger" onclick="return confirm('Chắc không?')">Từ chối</a>
        </div>

        <div class="card-body">
            <h2 class="text-center my-4">{{ $post->name }}</h2>
            <div class="d-flex justify-content-between align-items-center py-3">
                <div class="author d-flex align-items-center">
                    <img src="https://ui-avatars.com/api/?name={{$post->user->name}}&background=random" class="avatar avatar-md rounded-circle me-2" alt="{{ $post->user->name }}" width="50">
                    <span class="fw-bold">{{ $post->user->name }}</span>
                </div>
                <div class="create_at text-muted">
                    Ngày đăng: {{ $post->created_at }}
                </div>
            </div>
        
            <div class="content">
                {!! $post->content !!}
            </div>
        </div>
        
        <div class="card-footer"></div>
    </div>
@endsection