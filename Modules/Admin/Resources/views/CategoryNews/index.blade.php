@extends('admin::layouts.master')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Trang chủ</a>
        </li>
        <li class="breadcrumb-item active">Quản lý danh mục tin tức</li>
    </ol>

    <div class="content-top">
        <h2>Quản lý danh mục tin tức</h2>
        <a class="btn btn-success" href="{{ route('admin.get.create.CategoryNews') }}">Thêm mới</a>
    </div>


    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Quản lý danh mục</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên danh mục</th>
                            <th>Title seo</th>
                            <th>Trạng thái</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                       @if( isset($category_news) )
                            @foreach($category_news as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->title_seo }}</td>
                                    <td>
                                        <a href="">
                                            {{ $category->getStatus($category->active)['name'] }}
                                        </a>
                                    </td>
                                    <td>
                                        <div class="status-admin">
                                            <a class="status-view" href="#" title="Xem chi tiết">
                                                <i class="fa fa-eye"></i>
                                            </a>

                                            <a class="status-edit" href="{{ route('admin.get.edit.CategoryNews', $category->id) }}" title="Sửa">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a class="status-delete" href="{{ route('admin.get.action.CategoryNews', ['delete', $category->id]) }}" title="Xóa">
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
        </div>
        <div class="card-footer small text-muted">Bảng quản lý danh mục</div>
    </div>

@stop