@extends('admin::layouts.master')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="admin.home">Trang chủ</a>
        </li>
        <li class="breadcrumb-item active">Quản lý sản phẩm</li>
    </ol>

    <div class="content-top">
        <h2>Quản lý sản phẩm</h2>
        <a class="btn btn-success" href="{{ route('admin.get.create.product') }}">Thêm mới</a>
    </div>

    <div class="form-search clearfix">
        <form class="form-inline" action="">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Tên sản phẩm" name="name" value="{{ \Request::get('name') }}">
            </div>
            <div class="form-group">
                <select name="cate" id="" class="form-control">
                    <option value="">Danh mục</option>
                    @if(isset($categories))
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ \Request::get('cate') ==  $category->id ? "selected='selected'" : ""}}>{{ $category->c_name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <div class="table-custom">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Loại sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Giảm giá (%)</th>
                    <th>Trạng thái</th>
                    <th>Nổi bật</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($product))
                    @foreach($product as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ isset($product->category->c_name) ? $product->category->c_name : '[N/A]' }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->sale }}</td>
                            <td>
                                <a href="{{ route('admin.get.action.product',['active', $product->id]) }}" class="badge {{$product->getStatus($product->active)['class'] }}">
                                    {{ $product->getStatus($product->active)['name'] }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.get.action.product',['hot', $product->id]) }}" class="badge {{$product->getHot($product->hot)['class'] }}">
                                    {{ $product->getHot($product->hot)['name'] }}
                                </a>
                            </td>
                            <td>
                                <div class="status-admin">
                                    <a class="status-view" href="#" title="Xem chi tiết">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                    <a class="status-edit" href="{{ route('admin.get.edit.product', $product->id) }}" title="Sửa">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a class="status-delete" href="{{ route('admin.get.action.product', ['delete', $product->id]) }}" title="Xóa">
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