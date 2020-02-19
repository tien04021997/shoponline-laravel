@extends('layouts.app')
@section('content')
<div class="container">
    <div class="list-order">
        <div class="area-title">
            <h2>Giỏ hàng</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1 ?>
            @foreach($product as $key => $value)
                {{--{{ dd($value) }}--}}
            <tr>
                <td>
                    <a href="#">{{ ($i) }}</a>
                </td>
                <td>
                    <a href="#">{{ $value->name }}</a>
                </td>
                <td>
                    <img src="{{ asset($value->options->avatar) }}" style="width: 60px; height: 60px; object-fit: cover;"/>
                </td>
                <td>
                    {{ number_format($value->price,0,',','.') }} VNĐ
                </td>
                <td>
                    {{ $value->qty }}
                </td>
                <td>
                    {{ number_format($value->qty * $value->price,0,',','.') }} VNĐ
                </td>
                <td>
                    <a href=""><i class="fa fa-pencil"></i> Edit</a>
                    <a href="{{ route('delete.shopping.cart',$key) }}"><i class="fa fa-trash-o"></i> Xóa</a>
                </td>
            </tr>
            <?php $i++ ?>
            @endforeach
            </tbody>
        </table>

        <div class="order-total">
            <h4 class="pull-right">Tổng tiền cần thanh toán: {{ \Cart::subtotal() }} VNĐ <a href="{{ route('get.form.pay') }}" class="btn btn-success">Thanh toán</a> </h4>
        </div>
    </div>
</div>
@stop