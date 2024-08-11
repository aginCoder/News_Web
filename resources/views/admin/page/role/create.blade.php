@extends('admin.layouts.layout')

@section('content')
<div class="card mt-4">
    <div class="p-3 d-flex justify-content-between">
        <h2>{{ $title ?? 'Chưa có title' }}</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.role.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="role_name" class="form-label">Tên vai trò:</label>
                <input type="text" value="{{ old('role_name') }}" class="form-control" 
                id="role_name" name="role_name">

                @error('role_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="permissions" class="form-label">Quyền:</label><br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="select-all">
                    <label class="form-check-label" for="select-all">Chọn tất cả</label><br>
                    
                    @foreach ($permissions as $key => $permission)
                        <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->name }}" id="permission-{{ $key }}">
                        <label class="form-check-label" for="permission-{{ $key }}">{{ $permission->name }}</label><br>
                    @endforeach
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.page.role') }}" class="btn btn-success">Quay lại</a>
                <button type="submit" class="btn btn-primary">Thêm vai trò</button>
            </div>
        </form>
    </div>
</div>


<script>
    document.getElementById('select-all').addEventListener('change', function() {
        var checkboxes = document.querySelectorAll('.form-check-input[name="permissions[]"]');
        checkboxes.forEach(checkbox => checkbox.checked = this.checked);
    });
</script>
@endsection


