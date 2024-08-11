@extends('admin.layouts.layout')

@section('content')
<div class="card mt-4">
    <div class="p-3 d-flex justify-content-between">
        <h2>{{ $title ?? 'Chưa có title' }}</h2>
        <a href="{{ route('admin.post.create')}}" class="btn btn-primary" style="width:200px;">
            <i class="bi bi-plus"></i>Thêm bài viết mới</a>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">    
                {{-- id="dataTable" --}}
            <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Tiêu đề</th>
                        <th>Mô tả ngắn</th>
                        <th>Tác giả</th>
                        <th>Danh mục</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($post as $key => $post)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td><img src="{{ $post->thumbnail ? asset($post->thumbnail) : 
                        "https://st4.depositphotos.com/14953852/24787/v/380/depositphotos_247872612-stock-illustration-no-image-available-icon-vector.jpg"}}" 
                            class="rounded" width="100px" alt=""></td>

                        <td> {{ $post->name }} </td>
                        <td> {{ substr($post->short_content, 0, 20) }} </td>
                        <td> {{ $post->user->name }} </td>
                        <td>
                            @foreach($post->categories as $item)
                                - {{ $item->name }} <br>
                            @endforeach
                        </td>
                        <td>
                            @switch($post->status)
                                @case('public')
                                    Công khai
                                    @break
                                @case('pending')
                                    Chờ duyệt
                                    @break
                                @case('reject')
                                    Từ chối
                                    @break
                                @default
                            @endswitch
                        </td>
                        
                        @if (Auth()->user()->id == $post->user->id)
                        <td>
                            <a href="{{ route('admin.post.delete', $post->id) }}" onclick="return confirm('Bạn có chắc muốn xóa không?')" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i>
                            </a>
                            <a href="{{ route('admin.post.edit', $post->id) }}" class="btn btn-sm btn-primary">
                                <i class="bi bi-pen"></i>
                            </a>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>
@endsection