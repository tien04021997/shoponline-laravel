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
                    {{--<th>Hình ảnh</th>--}}
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1 ?>
            @foreach($products as $value => $key)
                {{--{{ dd($key) }}--}}
            <tr>
                <td>
                    <a href="#">{{ ($i) }}</a>
                </td>
                <td>
                    <a href="#">{{ $key->name }}</a>
                </td>
                {{--<td>--}}
                    {{--<img src="{{ asset($key->options->avatar) }}" style="width: 60px; height: 60px; object-fit: cover;"/>--}}
                {{--</td>--}}
                <td>
                    {{ number_format($key->price,0,',','.') }} VNĐ
                </td>
                <td>
                    {{ $key->qty }}
                </td>
                <td>
                    {{ number_format($key->qty * $key->price,0,',','.') }} VNĐ
                </td>
                <td>
                    <a href=""><i class="fa fa-pencil"></i> Edit</a>
                    <a href=""><i class="fa fa-trash-o"></i> Xóa</a>
                </td>
            </tr>
            <?php $i++ ?>
            @endforeach
            </tbody>
        </table>

        <div class="order-total">
            <h4 class="pull-right">Tổng tiền cần thanh toán: {{ \Cart::subtotal() }} VNĐ <a href="" class="btn btn-success">Thanh toán</a> </h4>
        </div>
    </div>
</div>
@stop