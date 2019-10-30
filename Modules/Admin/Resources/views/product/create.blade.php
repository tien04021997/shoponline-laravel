@extends('admin::layouts.master')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Trang chủ</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('admin.get.list.CategoryNews') }}">Sản phẩm</a>
        </li>
        <li class="breadcrumb-item active">Thêm mới sản phẩm</li>
    </ol>

    <div class="content-top">
        <h2>Thêm mới sản phẩm</h2>
        <a class="btn btn-success" href="#">Trở về</a>
    </div>

    <div class="form-add">
        @include("admin::product.form")
    </div>


@stop