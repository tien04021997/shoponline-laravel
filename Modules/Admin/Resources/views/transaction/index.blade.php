@extends('admin::layouts.master')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="admin.home">Trang chủ</a>
        </li>
        <li class="breadcrumb-item active">Quản lý đơn hàng</li>
    </ol>

    <div class="content-top">
        <h2>Quản lý đơn hàng</h2>
        <a class="btn btn-success" href="#">Thêm mới</a>
    </div>


    <div class="table-custom">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ isset($transaction->user->name) ? $transaction->user->name : '[N/A]' }}</td>
                        <td>{{ $transaction->phone }}</td>
                        <td>{{ $transaction->address }}</td>
                        <td>{{ number_format($transaction->total,0,',','.') }} VNĐ</td>
                        <td>
                            @if($transaction->status == 1)
                                <a href="#" class="btn btn-success">Đã xử lý</a>
                            @else
                                <a href="#" class="btn btn-danger">Chờ xử lý</a>
                            @endif
                        </td>
                        <td>
                            <div class="status-admin">
                                <a class="status-view js-order-item" data-id="{{ $transaction->id }}" href="{{ route('admin.get.view.product',$transaction->id) }}" title="Xem chi tiết">
                                    <i class="fa fa-eye"></i>
                                </a>
                                {{--<a class="status-delete" href="{{ route('admin.get.action.transaction', ['delete', $transaction->id]) }}" title="Xóa">--}}
                                    {{--<i class="fa fa-trash"></i>--}}
                                {{--</a>--}}
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <div class="pagination-page">

        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModalOrder" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
                    <h4 class="modal-title">Chi tiết mã đơn hàng #<b class="transction-id"></b></h4>
                </div>
                <div class="modal-body" id="md_content">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script>
        $(function () {
            $(".js-order-item").click(function (event) {
                event.preventDefault();
                let $this = $(this);
                let url = $this.attr('href');
                $("#md_content").html('');
                $(".transction-id").text('').text($this.attr('data-id'));

                $("#myModalOrder").modal('show');

                $.ajax({
                    url: url,
                }).done(function (result) {
                    if (result)
                    {
                        $("#md_content").append(result);
                    }
                });
            });
        })
    </script>

@stop