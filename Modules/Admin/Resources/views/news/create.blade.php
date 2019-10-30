@extends('admin::layouts.master')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Trang chủ</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('admin.get.list.CategoryNews') }}">Tin tức</a>
        </li>
        <li class="breadcrumb-item active">Thêm mới tin tức</li>
    </ol>

    <div class="content-top">
        <h2>Thêm mới tin tức</h2>
        <a class="btn btn-success" href="#">Trở về</a>
    </div>

    <div class="form-add">
        @include("admin::news.form")
    </div>


@stop