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
                                <a href="#">{{ $categoryProduct->c_name }}</a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li class="category3"><span>{{ $productDetail->name }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <!-- product-details Area Start -->
    <div class="product-details-area">
        <div class="container">
            {{--{{ dd($productDetail) }}--}}
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="zoomWrapper">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="{{ asset($productDetail->avatar) }}" data-zoom-image="img/product-details/ex-big-1-1.jpg" alt="big-1">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="product-list-wrapper">
                        <div class="single-product">
                            <div class="product-content">
                                <h2 class="product-name"><a href="#">{{ $productDetail->name }}</a></h2>
                                <div class="rating-price">
                                    <div class="pro-rating">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <div class="price-boxes">
                                        <span class="new-price">{{ number_format($productDetail->price,0,',',',') }}</span>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <p>{{ strip_tags($productDetail->description) }}</p>
                                </div>
                                <p class="availability in-stock">Availability: <span>In stock</span></p>
                                <div class="actions-e">
                                    <div class="action-buttons-single">
                                        <div class="inputx-content">
                                            <label for="qty">Quantity:</label>
                                            <input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty">
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="#">Add to cart</a>
                                        </div>
                                        <div class="add-to-links">
                                            <div class="add-to-wishlist">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                            </div>
                                            <div class="compare-button">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="singl-share">
                                    <a href="#"><img src="{{ asset('theme_frontend/img/single-share.png') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="single-product-tab">
                    <!-- Nav tabs -->
                    <ul class="details-tab">
                        <li class="active"><a href="#home" data-toggle="tab">Description</a></li>
                        {{--<li class=""><a href="#messages" data-toggle="tab"> Review (1)</a></li>--}}
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="product-tab-content">
                                {{ strip_tags($productDetail->content) }}
                            </div>
                        </div>
                        {{--<div role="tabpanel" class="tab-pane" id="messages">--}}
                            {{--<div class="single-post-comments col-md-6 col-md-offset-3">--}}
                                {{--<div class="comments-area">--}}
                                    {{--<h3 class="comment-reply-title">1 REVIEW FOR TURPIS VELIT ALIQUET</h3>--}}
                                    {{--<div class="comments-list">--}}
                                        {{--<ul>--}}
                                            {{--<li>--}}
                                                {{--<div class="comments-details">--}}
                                                    {{--<div class="comments-list-img">--}}
                                                        {{--<img src="img/user-1.jpg" alt="">--}}
                                                    {{--</div>--}}
                                                    {{--<div class="comments-content-wrap">--}}
															{{--<span>--}}
																{{--<b><a href="#">Admin - </a></b>--}}
																{{--<span class="post-time">October 6, 2014 at 1:38 am</span>--}}
															{{--</span>--}}
                                                        {{--<p>Lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi.</p>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="comment-respond">--}}
                                    {{--<h3 class="comment-reply-title">Add a review</h3>--}}
                                    {{--<span class="email-notes">Your email address will not be published. Required fields are marked *</span>--}}
                                    {{--<form action="#">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-md-12">--}}
                                                {{--<p>Name *</p>--}}
                                                {{--<input type="text">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-md-12">--}}
                                                {{--<p>Email *</p>--}}
                                                {{--<input type="email">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-md-12">--}}
                                                {{--<p>Your Rating</p>--}}
                                                {{--<div class="pro-rating">--}}
                                                    {{--<a href="#"><i class="fa fa-star"></i></a>--}}
                                                    {{--<a href="#"><i class="fa fa-star"></i></a>--}}
                                                    {{--<a href="#"><i class="fa fa-star"></i></a>--}}
                                                    {{--<a href="#"><i class="fa fa-star-o"></i></a>--}}
                                                    {{--<a href="#"><i class="fa fa-star-o"></i></a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-md-12 comment-form-comment">--}}
                                                {{--<p>Your Review</p>--}}
                                                {{--<textarea id="message" cols="30" rows="10"></textarea>--}}
                                                {{--<input type="submit" value="Submit">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product-details Area end -->
    <!-- product section start -->
    <div class="our-product-area new-product">
        <div class="container">
            <div class="area-title">
                <h2>Sản phẩm mới</h2>
            </div>
            <!-- our-product area start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="features-curosel">
                            <!-- single-product start -->
                            @foreach($productNew as $key)
                                <div class="col-lg-12 col-md-12">
                                    <div class="single-product first-sale">
                                        <div class="product-img">
                                            <a href="{{ route('get.detail.product',[$key->id]) }}">
                                                <img class="primary-image" src="{{ asset($key->avatar) }}" alt="" />
                                                <img class="secondary-image" src="{{ asset($key->avatar) }}" alt="" />
                                            </a>
                                            <div class="action-zoom">
                                                <div class="add-to-cart">
                                                    <a href="{{ route('get.detail.product',[$key->id]) }}" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <div class="action-buttons">
                                                    <div class="add-to-links">
                                                        <div class="add-to-wishlist">
                                                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="quickviewbtn">
                                                        <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">{{ number_format($key->price,0,',','.') }} VNĐ</span>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-name">
                                                <a href="{{ route('get.detail.product',[$key->id]) }}">{{ $key->name }}</a>
                                            </h2>
                                            <p>{{ strip_tags($key->description) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- single-product end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- our-product area end -->
        </div>
    </div>
    <!-- product section end -->
@stop