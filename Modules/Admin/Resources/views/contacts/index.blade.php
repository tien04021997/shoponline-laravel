@extends('admin::layouts.master')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="admin.home">Trang chủ</a>
        </li>
        <li class="breadcrumb-item active">Quản lý liên hệ</li>
    </ol>

    <div class="content-top">
        <h2>Quản lý liên hệ</h2>
    </div>

    <div class="table-custom">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Tên khách hàng</th>
                <th>Email / Phone</th>
                <th>Nội dung</th>
                <th>Ngày tạo</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($contacts))
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->title }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>
                            Email: {{ $contact->email }}
                            <br>
                            Phone: {{ $contact->phone }}
                        </td>
                        <td>{{ $contact->content }}</td>
                        <td>{{ date("H:i - d/m/Y", strtotime($contact->created_at)) }}</td>
                        <td>
                            <a href="{{ route('admin.get.action.contact',['status', $contact->status]) }}" class="badge {{$contact->getStatus($contact->status)['class'] }}">
                                {{ $contact->getStatus($contact->status)['name'] }}
                            </a>
                        </td>
                        <td>
                            <div class="status-admin">
                                <a class="status-view" href="#" title="Xem chi tiết">
                                    <i class="fa fa-eye"></i>
                                </a>

                                {{--<a class="status-edit" href="{{ route('admin.get.edit.product', $products->id) }}" title="Sửa">--}}
                                {{--<i class="fa fa-edit"></i>--}}
                                {{--</a>--}}

                                <a class="status-delete" href="{{ route('admin.get.action.contact', ['delete', $contact->id]) }}" title="Xóa">
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