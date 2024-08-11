@extends('admin.layouts.layout')

@section('content')
<div class="card mt-4">
    <div class="p-3 d-flex justify-content-between">
        <h2>{{ $title ?? 'Chưa có title' }}</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.role.update', $role->id) }}" method="POST">
            {{-- tạo URL cho route có tên admin.role.update và truyền ID của vai trò ($role->id) làm tham số. --}}
            @csrf
            <div class="mb-3">
                <label for="role_name" class="form-label">Tên vai trò:</label>
                <input type="text" value="{{ old('role_name', $role->name) }}" class="form-control" 
                id="role_name" name="role_name">

                @error('role_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="permissions" class="form-label">Quyền:</label><br>
                <div class="form-check">
                    @foreach ($permissions as $key => $permission)
                    {{-- Mỗi phần tử trong $permissions được truy cập thông qua biến $permission. --}}
                        <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->name }}" id="{{ $key }}" 
                        {{-- Đặt tên cho input, sử dụng dấu [] để tạo mảng các giá trị khi dữ liệu được gửi đi. --}}
                        {{-- value="{{ $permission->name }}": Đặt giá trị của checkbox là tên của quyền hạn.                 sử dụng biến $key để đảm bảo ID là duy nhất. --}}
                        @if(in_array($permission->name, $role->permissions->pluck('name')->toArray())) checked @endif>
                        {{-- Phương thức pluck lấy tất cả các giá trị của cột name từ tập hợp quyền hạn, trả về một tập hợp chỉ chứa tên của các quyền hạn. --}}
                        <label class="form-check-label" for="{{ $key }}">{{ $permission->name }}</label><br>
                    @endforeach
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.page.role') }}" class="btn btn-success">Quay lại</a>
                <button type="submit" class="btn btn-primary">Cập nhật vai trò</button>
            </div>
        </form>
    </div>
</div>
@endsection
