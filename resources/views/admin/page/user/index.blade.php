@extends('admin.layouts.layout')

@section('content')
    <div class="card mt-4">
        <div class="card-header d-flex justify-content-between">
            <h2> {{ $title ?? 'Chưa có title' }} </h2>
            {{-- Nếu có $title thì sẽ hiện ra title 
            Còn nếu không có thì hiện ra chưa có title --}}
            <a href="{{ route('admin.user.create') }}" class="btn btn-success">
                <i class="pi pi-plus"></i> Thêm mới thành viên
            </a>
        </div>
        <div class="card-body">
            <table id="dataTable" class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Quyền hạn</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>        
                        {{-- $key là 1 biến đếm, đại diện cho stt, mỗi lần sẽ + 1 đơn vị --}}
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->getRoleNames()->first() }}</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" {!! $item->role == '1' ? 'checked' : '' !!}>
                            </div>
                        </td>
                        <td>
                            <a href="{{ route('admin.user.delete', $item->id) }}" onclick="return confirm('Bạn có chắc muốn xóa không?')" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i>
                            </a>
                            <a href="{{ route('admin.user.edit', $item->id) }}" class="btn btn-sm btn-primary">
                                <i class="bi bi-pen"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <style>
        th, td {
            color: #ffffff; 
        }
    
        .badge {
            color: #ffffff; 
        }
    </style>
@endsection
