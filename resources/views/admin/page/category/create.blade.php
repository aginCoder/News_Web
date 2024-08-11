@extends('admin.layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1> {{ $title ?? 'Chưa có title' }} </h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <form action="{{ route('admin.category.store') }}" method="POST" class="card-body">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col">
                        <strong>Thông tin danh mục</strong>
                        
                        <div class="col-10">
                            <label for="name">Tên danh mục</label>
                            <span class="text-danger">*</span>
                            <input type="text" value="{{ old('name') }}" 
                            name="name" id="name" class="form-control mb-3" 
                            style="background-color: #ffffff;" placeholder="tên danh mục">
                        </div>
                        @include('admin.page.components.seo')
                        <div class="mt-5">
                            <button type="submit" class="btn btn-success">Tạo danh mục</button>
                            <a href="{{ route('admin.category') }}" class="btn btn-success">Quay về</a>
                        </div>
                    </div>
                    <div class="col">
                        <img src="https://media.giphy.com/media/IjwgN1A0vtJq5uj8wI/giphy.gif?cid=ecf05e4738ax9j82q3gh0xccua6h4cm0e2agq4abmp2qm0i2&ep=v1_gifs_search&rid=giphy.gif&ct=g" alt="">
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection