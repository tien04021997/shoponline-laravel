@if($orders)
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
            @foreach($orders as $key => $value)
                {{--{{ dd($value) }}--}}
                <tr>
                    <td>
                        <a href="#">{{ ($i) }}</a>
                    </td>
                    <td>
                        <a href="{{ route('get.detail.product',[$value->product_id])}}" target="_blank">{{ isset($value->product->name) ? $value->product->name : '' }}</a>
                    </td>
                    <td>
                        <img src="{{ isset($value->product->avatar) ? asset($value->product->avatar) : '' }}" style="width: 60px; height: 60px; object-fit: cover;"/>
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
                        <a href=""><i class="fa fa-trash-o"></i> Xóa</a>
                    </td>
                </tr>
                <?php $i++ ?>
            @endforeach
        </tbody>
    </table>
@endif