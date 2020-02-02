@extends('layouts.app')
@section('content')
    <!-- start home slider -->
    <div class="slider-area an-1 hm-1">
        <!-- slider -->
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
                <img src="{{ asset('theme_frontend/img/slider/home-1/slider1-1.jpg') }}" alt="" title="#slider-direction-1"  />
                <img src="{{ asset('theme_frontend/img/slider/home-1/slider1-2.jpg') }}" alt="" title="#slider-direction-2"  />
            </div>
            <!-- direction 1 -->
            <div id="slider-direction-1" class="t-cn slider-direction">
                <div class="slider-progress"></div>
                <div class="slider-content t-cn s-tb slider-1">
                    <div class="title-container s-tb-c title-compress">
                        <h2 class="title1">minimal bags</h2>
                        <h3 class="title2" >collection</h3>
                        <h4 class="title2" >Simple is the best.</h4>
                        <a class="btn-title" href="">View collection</a>
                    </div>
                </div>
            </div>
            <!-- direction 2 -->
            <div id="slider-direction-2" class="slider-direction">
                <div class="slider-progress"></div>
                <div class="slider-content t-lfl s-tb slider-2 lft-pr">
                    <div class="title-container s-tb-c">
                        <h2 class="title1">minimal bags</h2>
                        <h3 class="title2" >collection</h3>
                        <h4 class="title2" >Simple is the best.</h4>
                        <a class="btn-title" href="">View collection</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider end-->
    </div>
    <!-- end home slider -->
    <!-- product section start -->
    @if(isset($productHot))
        <!-- product section start -->
        <div class="our-product-area new-product">
            <div class="container">
                <div class="area-title">
                    <h2>Sản phẩm nổi bật</h2>
                </div>
                <!-- our-product area start -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="features-curosel">
                                @foreach($productHot as $hot)
                                    <div class="col-lg-12 col-md-12">
                                        <div class="single-product first-sale">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="{{ asset($hot->avatar) }}" alt="" />
                                                    <img class="secondary-image" src="{{ asset($hot->avatar) }}" alt="" />
                                                </a>
                                                <div class="action-zoom">
                                                    <div class="add-to-cart">
                                                        <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
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
                                                    <span class="new-price">{{ number_format($hot->price,0,',','.') }} VNĐ</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="">{{ $hot->name }}</a></h2>
                                                <p>{{ strip_tags($hot->description) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- our-product area end -->
            </div>
        </div>
        <!-- product section end -->
    @endif

    @if(isset($articleNews))
    <!-- latestpost area start -->
    <div class="latest-post-area">
        <div class="container">
            <div class="area-title">
                <h2>Bài viết mới nhất</h2>
            </div>
            <div class="row">
                <div class="all-singlepost">
                    @foreach($articleNews as $articleNews)
                    <!-- single latestpost start -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-post article-item">
                            <div class="post-thumb article-img">
                                <a href="#">
                                    <img src="{{ asset($articleNews->avatar) }}" alt="" />
                                </a>
                            </div>
                            <div class="post-thumb-info article-info">
                                <div class="post-time">
                                    <a href="#">{{ $articleNews->name }}</a>
                                </div>
                                <div class="postexcerpt">
                                    <p>{{ strip_tags($articleNews->description) }}</p>
                                    <a href="#" class="read-more">XEM THÊM</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single latestpost end -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- latestpost area end -->
    @endif
@stop