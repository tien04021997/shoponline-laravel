@extends('admin::layouts.master')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="admin.home">Trang chủ</a>
        </li>
        <li class="breadcrumb-item active">Quản lý thành viên</li>
    </ol>

    <div class="content-top">
        <h2>Quản lý thành viên</h2>
        <a class="btn btn-success" href="#">Thêm mới</a>
    </div>

    <div class="table-custom">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Tên thành viên</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Địa chỉ</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
                @if(isset($users))
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->address }}</td>
                            <td>
                                <div class="status-admin">
                                    <a class="status-view" href="#" title="Xem chi tiết">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                    {{--<a class="status-edit" href="{{ route('admin.get.edit.product', $products->id) }}" title="Sửa">--}}
                                        {{--<i class="fa fa-edit"></i>--}}
                                    {{--</a>--}}

                                    <a class="status-delete" href="{{ route('admin.get.action.user', ['delete', $user->id]) }}" title="Xóa">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

        <div class="pagination-page">

        </div>
    </div>
@stop