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
                    <th>Hình ảnh</th>
                    <th>Giá sản phẩm</th>
                    <th>Giảm giá (%)</th>
                    <th>Trạng thái</th>
                    <th>Nổi bật</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($product))
                    @foreach($product as $products)
                        <tr>
                            <td>{{ $products->id }}</td>
                            <td>{{ $products->name }}</td>
                            <td>{{ isset($products->category->c_name) ? $products->category->c_name : '[N/A]' }}</td>
                            <td>
                                <img src="{{ asset($products->avatar) }}" alt="" class="img img-responsive" style="width: 50px;height: 50px; object-fit: cover;">
                            </td>
                            <td>{{ $products->price }}</td>
                            <td>{{ $products->sale }}</td>
                            <td>
                                <a href="{{ route('admin.get.action.product',['active', $products->id]) }}" class="badge {{$products->getStatus($products->active)['class'] }}">
                                    {{ $products->getStatus($products->active)['name'] }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.get.action.product',['hot', $products->id]) }}" class="badge {{$products->getHot($products->hot)['class'] }}">
                                    {{ $products->getHot($products->hot)['name'] }}
                                </a>
                            </td>
                            <td>
                                <div class="status-admin">
                                    <a class="status-view" href="#" title="Xem chi tiết">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                    <a class="status-edit" href="{{ route('admin.get.edit.product', $products->id) }}" title="Sửa">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a class="status-delete" href="{{ route('admin.get.action.product', ['delete', $products->id]) }}" title="Xóa">
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
            {{ $product -> links() }}
        </div>
    </div>

@stop