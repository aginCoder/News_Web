@extends('admin.layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1> {{ $title ?? 'Chưa có title' }} </h1>
            @if ($errors->any())            
            {{-- nếu phát hiện lỗi --}}
                <div class="alert alert-danger">
                    <ul>
                        {{-- lấy all lỗi và duyệt ra từng lỗi --}}
                        @foreach ($errors->all() as $error) 
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <form action="{{ route('admin.user.update', ['id' => $user->id]) }}" method="POST" class="card-body row">
            @csrf
            <div class="col-12">
                <label for="name">Tên</label>
                <input type="text" value="{{ $user->name }}" name="name" id="name" 
                class="form-control" style="background-color: #ffffff;">
            </div>

            <div class="col-6 mt-3">
                <label for="name">Trạng thái</label>
                <select class="form-select" name="status" id="status">
                    <option value=""> [ CHỌN TRẠNG THÁI ] </option>
                    <option value="1" {{ $user->status == 1 ? 'selectd' : '' }}> Duyệt </option>
                    <option value="2" {{ $user->status == 2 ? 'selectd' : '' }}> Chặn </option>
                </select>
            </div>
            <div class="col-6 mt-3">
                <label for="name">Quyền hạn</label>
                <select class="form-select" name="role" id="status">
                    <option value=""> [ CHỌN QUYỀN HẠN ] </option>
                    @foreach ($roles as $role)
                        <option {{ $user->getRoleNames()->first() == $role->name ? 'selected' : ''  }} value="{{ $role->name }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-5">
                {{-- <button type="submit" class="btn btn-success">Lưu</button> --}}
                <a href="{{ route('admin.user') }}" class="btn btn-success">Quay về</a>
                <button type="submit" class="btn btn-success">Lưu</button>
            </div>
        </form>
    </div>
@endsection