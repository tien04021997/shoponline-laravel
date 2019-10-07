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
        {{--<a class="btn btn-success" href="{{ route('admin.get.create.category') }}">Thêm mới</a>--}}
    </div>

    <div class="form-add">
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Tên danh mục:</label>
                <input type="text" class="form-control" placeholder="Tên danh mục" value="{{ old('name') }}" name="name">
                @if($errors->has('name'))
                    <span class="error-text">
                        {{$errors->first('name')}}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="icon">Icon:</label>
                <input type="text" class="form-control" placeholder="fa fa-cart" value="{{ old('icon') }}" name="icon">
                @if($errors->has('icon'))
                    <div class="error-text">
                        {{$errors->first('icon')}}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="icon">Meta title:</label>
                <input type="text" class="form-control" placeholder="Meta title" value="{{ old('c_title_seo') }}" name="c_title_seo">
            </div>

            <div class="form-group">
                <label for="icon">Description seo:</label>
                <input type="text" class="form-control" placeholder="Description seo" value="{{ old('c_description_seo') }}" name="c_description_seo">
            </div>

            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox" name="hot"> Nổi bật</label>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Thêm mới</button>
        </form>
    </div>


@stop