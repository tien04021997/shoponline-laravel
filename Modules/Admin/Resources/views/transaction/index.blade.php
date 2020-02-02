@extends('admin::layouts.master')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="admin.home">Trang chủ</a>
        </li>
        <li class="breadcrumb-item active">Quản lý đơn hàng</li>
    </ol>

    <div class="content-top">
        <h2>Quản lý đơn hàng</h2>
        <a class="btn btn-success" href="#">Thêm mới</a>
    </div>


    <div class="table-custom">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Loại sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Giá sản phẩm</th>
                <th>Giảm giá (%)</th>
                <th>Trạng thái</th>
                <th>Nổi bật</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>

        <div class="pagination-page">

        </div>
    </div>
@stop