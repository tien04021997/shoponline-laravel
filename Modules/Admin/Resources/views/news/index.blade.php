@extends('admin::layouts.master')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="admin.home">Trang chủ</a>
        </li>
        <li class="breadcrumb-item active">Quản lý tin tức</li>
    </ol>

    <div class="content-top">
        <h2>Quản lý sản phẩm</h2>
        <a class="btn btn-success" href="{{ route('admin.get.create.news') }}">Thêm mới</a>
    </div>


    <div class="table-custom">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Tên bài viết</th>
                <th>Danh mục</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($news))
                @foreach($news as $news)
                    <tr>
                        <td>{{ $news->id }}</td>
                        <td>{{ $news->name }}</td>
                        <td>{{ $news->category_id }}</td>
                        <td>
                            <a href="" class="badge {{$news->getStatus($news->active)['class'] }}">
                                {{ $news->getStatus($news->active)['name'] }}
                            </a>
                        </td>
                        <td>
                            <div class="status-admin">
                                <a class="status-view" href="#" title="Xem chi tiết">
                                    <i class="fa fa-eye"></i>
                                </a>

                                <a class="status-edit" href="{{ route('admin.get.edit.news', $news->id) }}" title="Sửa">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <a class="status-delete" href="{{ route('admin.get.action.news', ['delete', $news->id]) }}" title="Xóa">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

@stop