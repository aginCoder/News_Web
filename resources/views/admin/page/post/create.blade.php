@extends('admin.layouts.layout')

@section('content')
    <div class="card">
        <h3><center>Thêm bài viết mới</center></h3>
        <div class="card-body">
            <form action="{{ route('admin.post.store') }}" method="POST">
                @csrf
                <div class="row">
                    <!-- Left Side: Content of the Post -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name">Tên bài viết</label>
                            <input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="content">Nội dung bài viết</label>
                            @include('admin.page.components.editor')
                        </div>
                    </div>
            
                    <!-- Right Side: Additional Details -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="thumbnail">Ảnh bìa</label>
                            <input type="hidden" name="thumbnail" data-type="Images" class="upload-image form-control value_post_thumbnail">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwZ4mTuUvdD6l60AzmWTIZ341ALx1udRQn3zv5va8czuI5VNApMbGqiIJGSuoe1EhreQY&usqp=CAU" class="img_demo upload-image" 
                                width="100px" 
                                data-type="Images">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Danh mục</label>
                            @foreach ($category as $item)
                                <div>
                                    <input type="checkbox" name="id_category[]" value="{{ $item->id }}" id="{{ $item->id }}">
                                    <label for="{{ $item->id }}"> {{ $item->name }} </label>
                                </div>
                            @endforeach
                        </div>
                        {{-- <div class="mb-3">
                            <label for="status">Chọn trạng thái</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">[ Chọn trạng thái ]</option>
                                <option value="1">Công khai</option>
                                <option value="2">Không công khai</option>
                            </select>
                        </div> --}}
                        <div class="mb-3">
                            <label for="short_content">Mô tả ngắn</label>
                            <textarea name="short_content" id="short_content" class="form-control"> {{ $post->short_content ?? old('short_content') }}</textarea>
                        </div>
                        @include('admin.page.components.seo')
                    </div>
                </div>
            
                <!-- Buttons -->
                <div class="d-flex justify-content-between mt-3">
                    <a href="{{ route('admin.post') }}" class="btn btn-warning">Quay về</a>
                    <button type="submit" class="btn btn-success">Lưu</button>
                </div>
            </form>
            
        </div>
    </div>
@endsection