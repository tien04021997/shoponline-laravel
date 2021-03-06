@extends('admin::layouts.master')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Trang chủ</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('admin.get.list.category') }}">Danh mục</a>
        </li>
        <li class="breadcrumb-item active">Thêm mới danh mục</li>
    </ol>

    <div class="content-top">
        <h2>Thêm mới danh mục</h2>
    </div>

    <div class="form-add">
        @include("admin::category.form")
    </div>


@stop