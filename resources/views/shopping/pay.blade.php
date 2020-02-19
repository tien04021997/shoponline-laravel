@extends('layouts.app')
@section('content')
    <!-- breadcrumbs area start -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-inner">
                        <ul>
                            <li class="home">
                                <a href="#">Trang chủ</a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li class="home">
                                <a href="#">Giỏ hàng</a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li class="category3"><span>Thanh toán</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <div class="pay-form">
        <div class="container wrapper">
            <div class="row cart-body">
                <form class="form-horizontal" method="post" action="">
                    @csrf
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                        <!--REVIEW ORDER-->
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Danh sách sản phẩm <div class="pull-right"><small><a class="afix-1" href="{{ route('get.list.shopping.cart') }}">Cập nhật</a></small></div>
                            </div>
                            <div class="panel-body">
                                @foreach($product as $value)
                                    <div class="form-group row">
                                        <div class="col-sm-2 col-xs-12">
                                            <img class="img-responsive" src="{{ asset($value->options->avatar) }}"  style="width: 100%; height: auto;" />
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    {{ $value->name }}
                                                </div>
                                                <div class="col-xs-12">
                                                    <small>Số lượng:<span>{{ $value->qty }}</span></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-xs-12 text-right">
                                            <h6>{{ number_format($value->price,0,',','.') }} VNĐ</h6>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <strong>Tổng tiền</strong>
                                        <div class="pull-right"><span>{{ \Cart::subtotal() }} VNĐ</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--REVIEW ORDER END-->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                        <!--SHIPPING METHOD-->
                        <div class="panel panel-info">
                            <div class="panel-heading">Thông tin thanh toán</div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Họ và tên:</strong></div>
                                    <div class="col-md-12">
                                        <input type="text" name="name" class="form-control" value="{{ get_data_user('web','name') }}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Địa chỉ:</strong></div>
                                    <div class="col-md-12">
                                        <input type="text" name="address" class="form-control" value="{{ get_data_user('web','address') }}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>email:</strong></div>
                                    <div class="col-md-12">
                                        <input type="email" name="email" class="form-control" value="{{ get_data_user('web','email') }}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Số điện thoại:</strong></div>
                                    <div class="col-md-12">
                                        <input type="text" name="phone" class="form-control" value="{{ get_data_user('web','phone') }}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Ghi chú:</strong></div>
                                    <div class="col-md-12">
                                        <textarea name="note" id="" cols="30" rows="4" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success">Xác nhận thông tin</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--SHIPPING METHOD END-->
                    </div>

                </form>
            </div>
            <div class="row cart-footer">

            </div>
        </div>
    </div>
@stop