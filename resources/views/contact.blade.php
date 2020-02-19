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
                                <a href="index.html">Trang chủ</a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li class="category3"><span>Liên hệ</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <!-- contact-details start -->
    <div class="main-contact-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="contact-us-area">
                        <!-- google-map-area start -->
                        <div class="google-map-area">
                            <!--  Map Section -->
                            <div id="contacts" class="map-area">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.424119359912!2d105.82190831424509!3d21.015709393601114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab7eb3267173%3A0x255ee700d57e48f9!2zMzIgVsO1IFbEg24gRMWpbmcsIENo4bujIEThu6thLCDEkOG7kW5nIMSQYSwgSMOgIE7hu5lpLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1581515598633!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>

                        </div>
                        <!-- google-map-area end -->
                        <!-- contact us form start -->
                        <div class="contact-us-form">
                            <div class="sec-heading-area">
                                <h2>Liên hệ</h2>
                            </div>
                            <div class="contact-form">
                                <span class="legend">Mời bạn nhập thông tin liên hệ</span>
                                <form action="" method="post">
                                    @csrf
                                    <div class="form-top">
                                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                            <label>Họ và tên <sup>*</sup></label>
                                            <input type="text" name="name" class="form-control" required>
                                        </div>
                                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                            <label>Số điện thoại <sup>*</sup></label>
                                            <input type="text" name="phone" class="form-control" required>
                                        </div>
                                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                            <label>Email <sup>*</sup></label>
                                            <input type="email" name="email" class="form-control" required>
                                        </div>
                                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                            <label>Địa chỉ <sup>*</sup></label>
                                            <input type="text" name="address" class="form-control" required>
                                        </div>
                                        <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                            <label>Tiêu đề <sup>*</sup></label>
                                            <input type="text" name="title" class="form-control" required>
                                        </div>

                                        <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                            <label>Nội dung <sup>*</sup></label>
                                            <textarea class="yourmessage" name="content" required></textarea>
                                        </div>
                                    </div>
                                    <div class="submit-form form-group col-sm-12 submit-review">
                                        <p><sup>*</sup> Required Fields</p>
                                        <button type="submit" class="btn btn-success">Gửi thông tin</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- contact us form end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-details end -->
@stop