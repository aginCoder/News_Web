@extends('client.layouts.index')

@section('content')

    <div class="card mt-4">
        <div class="p-3 d-flex justify-content-between">
            <h2>Nội dung tìm kiếm: </h2>
        </div>
        @if ($posts)
            @foreach ($posts as $tin)
            <div class="d-md-flex post-entry-2 half">
                <a href="{{ route('client.layouts.page.chiTietTin.components.ctt', $tin->slug) }}" class="me-4 thumbnail">
                <img src="{{ $tin->thumbnail }}" alt="" class="img-fluid">
                </a>
            <div>
                <div class="post-meta">
                    <span class="date">Culture</span> 
                    <span class="mx-1">&bullet;</span> 
                    <span>{{ $tin->created_at }}</span>
                </div>
                <h3><a href="{{ route('client.layouts.page.chiTietTin.components.ctt', $tin->slug) }}">{{ $tin->name }}</a></h3>
                <p>{{ $tin->short_content }}</p>
                <div class="d-flex align-items-center author">
                    <div class="photo"><img src="{{ $tin->thumbnail }}" alt="" class="img-fluid"></div>
                <div class="name">
                    <h3 class="m-0 p-0">{{ $tin->user->name }}</h3>
                </div>
                </div>
            </div>
            </div>
            @endforeach
        @else
            Không có bài viết nào được tìm thấy
        @endif
    </div>

@endsection