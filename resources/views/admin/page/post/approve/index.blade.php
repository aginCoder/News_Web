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
            <table id="dataTable" class="table table-hover">
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
                    @foreach ($posts as $key => $post)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td><img src="{{ $post->thumbnail ? asset($post->thumbnail) : 
                        "https://st4.depositphotos.com/14953852/24787/v/380/depositphotos_247872612-stock-illustration-no-image-available-icon-vector.jpg"}}" 
                            class="rounded" width="100px" alt=""></td>

                        <td> {{ $post->name }} </td>
                        <td> {{ $post->short_content }} </td>
                        <td> {{ $post->user->name }} </td>
                        <td>
                            @foreach($post->categories as $item)
                                - {{ $item->name }} <br>
                            @endforeach
                        </td>
                        <td> 
                            <button class="btn btn-sm bg-light-warning text-dark-warning btn-custom">
                                {{ $post->status == 'pending' ? 'Đang chờ duyệt' : '' }}
                            </button>                            
                        </td>

                        <td>
                            <a href="{{ route('admin.approve-post.view', $post->slug) }}"  
                                class="btn btn-sm btn-primary bg-light-primary text-dark-primary"> <i class="bi bi-eye"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>


<style>
    .btn-custom {
    border-radius: 20px;
    padding: 10px 20px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    }

    .btn-custom:hover {
        background-color: #ffc107; 
        color: #000;
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
    }

    .btn-custom:focus {
        outline: none;
        box-shadow: 0 0 0 4px rgba(255, 193, 7, 0.25);
    }

</style>
@endsection