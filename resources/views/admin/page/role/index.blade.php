@extends('admin.layouts.layout')

@section('content')
<div class="card mt-4 shadow-sm">
    <div class="p-3 d-flex justify-content-between align-items-center border-bottom">
        <h2 class="m-0">{{ $title ?? 'Chưa có title' }}</h2>
        <a href="{{ route('admin.page.role.create') }}" class="btn btn-primary" style="width:200px;">
            <i class="bi bi-plus"></i> Thêm vai trò mới
        </a>
    </div>
    <div class="table-responsive">
        <table id="dataTable" class="table table-centered table-hover table-borderless mb-0 text-nowrap">
            <thead class="bg-light">
                <tr>
                    <th>#</th>
                    <th>Tên vai trò</th>
                    <th>Quyền</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $key => $role)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ Str::upper($role->name) }}</td>
                    <td>
                        <div class="d-flex flex-wrap">
                            @foreach ($role->permissions as $item)
                            <span class="badge bg-primary text-white m-1">{{ Str::upper($item->name) }}</span>
                            @endforeach
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('admin.role.delete', $role->id) }}"
                                onclick="return confirm('Bạn có chắc muốn xóa quyền này không?')"
                                class="btn btn-sm btn-danger me-2"><i class="bi bi-trash"></i></a>
                            <a href="{{ route('admin.page.role.edit', $role->id) }}" class="btn btn-sm btn-primary"><i
                                    class="bi bi-pen"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection