@extends('admin::layouts.master')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="admin.home">Trang chủ</a>
        </li>
        <li class="breadcrumb-item active">Quản lý tin tức</li>
    </ol>

    <div class="content-top">
        <h2>Quản lý tin tức</h2>
        <a class="btn btn-success" href="{{ route('admin.get.create.news') }}">Thêm mới</a>
    </div>

    <div class="form-search clearfix">
        <form class="form-inline" action="">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Tên bài viết" name="name" value="{{ \Request::get('name') }}">
            </div>

            <div class="form-group">
                <select name="cate" id="" class="form-control">
                    <option value="">Danh mục</option>
                    @if(isset($categorieNews))
                        @foreach($categorieNews as $category)
                            <option value="{{ $category->id }}" {{ \Request::get('cate') ==  $category->id ? "selected='selected'" : ""}}>{{ $category->name }}</option>
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
                <th>Tên bài viết</th>
                <th>Danh mục</th>
                <th>Trạng thái</th>
                <th>Nổi bật</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($news))
                @foreach($news as $news)
                    <tr>
                        <td>{{ $news->id }}</td>
                        <td>{{ $news->name }}</td>
                        <td>{{ isset($news->category->name) ? $news->category->name : '[N/A]' }}</td>
                        <td>
                            <a href="{{ route('admin.get.action.news',['active', $news->id]) }}" class="badge {{$news->getStatus($news->active)['class'] }}">
                                {{ $news->getStatus($news->active)['name'] }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('admin.get.action.news',['hot', $news->id]) }}" class="badge {{$news->getHot($news->hot)['class'] }}">
                                {{ $news->getHot($news->hot)['name'] }}
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