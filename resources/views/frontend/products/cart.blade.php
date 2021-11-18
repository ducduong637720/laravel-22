@extends('frontend.layouts.master')
@section('header')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(/frontend/images/banner/about-banner.jpg);">
        <div class="overlay-main bg-black opacity-05"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Giỏ hàng</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-1">
                <li><a href="javascript:void(0);">Trang chủ</a></li>
                <li>Giỏ hàng</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB  ROW END -->
@endsection
@section('main')
    <!-- OUR BEST SERVICES SECTION  START-->
    <div class="section-full text-center p-tb50">
        <div class="container">

            <div class="section-content">
                <div class="p-b30">
                    <h3 class="text-uppercase">Giỏ hàng</h3>
                    <div class="wt-separator-outer">
                        <div class="wt-separator style-icon">
                            <i class="fa fa-leaf text-black"></i>
                            <span class="separator-left bg-primary"></span>
                            <span class="separator-right bg-primary"></span>
                        </div>
                    </div>
                </div>
                <div id="no-more-tables" class="row">
                    <div class="col-8">
                        <table class="table-bordered  table-condensed cf wt-responsive-table shopping-table">
                            <thead class="cf text-center bg-primary">
                                <tr>
                                    <th>Ảnh sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th class="numeric">Đơn giá</th>
                                    <th class="numeric">Số lượng</th>
                                    <th class="numeric">Thành tiền</th>
                                    <th class="numeric">Hủy bỏ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td data-title="Code"><img src="/frontend/images/cart/thumb/pic-2.jpg" alt=""></td>
                                        <td data-title="Company" style="width:40%">{{ $product->name }}</td>
                                        <td data-title="Price" class="numeric">{{ $product->price }}</td>
                                        <td  class="numeric" style="width:8%">
                                            <div class="input-group">
                                                {{ $product->qty }}
                                                <input  type="text" value="{{ $product->qty }}" name="demo_vertical2" class="form-control" style="display: block;">
                                                    <span class="input-group-btn-vertical">
                                                    <a class="btn btn-default" href="{{route('frontend.cart.increase', $product->rowId)}}" type="button"><i
                                                            class="glyphicon glyphicon-plus"></i></a>
                                                    <a class="btn btn-default " href="{{route('frontend.cart.decrease', $product->rowId)}}"
                                                        type="button"><i class="glyphicon glyphicon-minus"></i></a>
                                                </span>
                                            </div>
                                        </td>
                                        <td data-title="Price" class="numeric">
                                            {{ $product->price * $product->qty }}
                                        </td>
                                        <td data-title="Open" class="numeric" style="width:7%"><a href="#"><i
                                                    class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="cart-buttons text-right">
                        <a href="#" class="m-b15 site-button m-r15 text-uppercase">Cập nhật giỏ hàng</a>
                        <a href="#" class="m-b15 site-button text-uppercase">Mua tiếp</a>
                        <table class="table-bordered  table-condensed cf wt-responsive-table">
                            <thead class="cf text-center bg-primary">
                                <tr>
                                    <th>Đơn hàng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-title="Total">{{ \Gloudemans\Shoppingcart\Facades\Cart::total() }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <button>Thanh toán</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- OUR BEST SERVICES SECTION END -->

    <!-- SECTION CONTENT START -->
    <div class="section-full p-b50">

        <!-- PRODUCT DETAILS -->
        <div class="container woo-entry">
            <!-- TITLE START -->
            <div class="p-b10">
                <h3 class="text-uppercase">Realated products</h3>
                <div class="wt-separator-outer  m-b30">
                    <div class="wt-separator style-icon">
                        <i class="fa fa-leaf text-black"></i>
                        <span class="separator-left bg-primary"></span>
                        <span class="separator-right bg-primary"></span>
                    </div>
                </div>
            </div>
            <!-- TITLE END -->
            <div class="row m-b30">

                <!-- COLUMNS 1 -->
                <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                    <div class="wt-box wt-product-box">
                        <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                            <img src="/frontend/images/products/pic-5.jpg" alt="">
                            <div class="overlay-bx">
                                <div class="overlay-icon">
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                    </a>
                                    <a class="mfp-link" href="javascript:void(0);">
                                        <i class="fa fa-heart wt-icon-box-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="wt-info  text-center">
                            <div class="p-a10 bg-white">
                                <h4 class="wt-title">
                                    <a href="javascript:;">Five Martines</a>
                                </h4>
                                <span class="price">
                                    <del>
                                        <span><span class="Price-currencySymbol">£</span>3.00</span>
                                    </del>
                                    <ins>
                                        <span><span class="Price-currencySymbol">£</span>2.00</span>
                                    </ins>
                                </span>
                                <div class="rating-bx">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COLUMNS 2 -->
                <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                    <div class="wt-box wt-product-box">
                        <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                            <img src="/frontend/images/products/pic-6.jpg" alt="">
                            <div class="overlay-bx">
                                <div class="overlay-icon">
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                    </a>
                                    <a class="mfp-link" href="javascript:void(0);">
                                        <i class="fa fa-heart wt-icon-box-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="wt-info  text-center">
                            <div class="p-a10 bg-white">
                                <h4 class="wt-title">
                                    <a href="javascript:;">Six Martines</a>
                                </h4>
                                <span class="price">
                                    <del>
                                        <span><span class="Price-currencySymbol">£</span>3.00</span>
                                    </del>
                                    <ins>
                                        <span><span class="Price-currencySymbol">£</span>2.00</span>
                                    </ins>
                                </span>
                                <div class="rating-bx">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COLUMNS 3 -->
                <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                    <div class="wt-box wt-product-box">
                        <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                            <img src="/frontend/images/products/pic-7.jpg" alt="">
                            <div class="overlay-bx">
                                <div class="overlay-icon">
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                    </a>
                                    <a class="mfp-link" href="javascript:void(0);">
                                        <i class="fa fa-heart wt-icon-box-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="wt-info  text-center">
                            <div class="p-a10 bg-white">
                                <h4 class="wt-title">
                                    <a href="javascript:;">Seven Martines</a>
                                </h4>
                                <span class="price">
                                    <del>
                                        <span><span class="Price-currencySymbol">£</span>3.00</span>
                                    </del>
                                    <ins>
                                        <span><span class="Price-currencySymbol">£</span>2.00</span>
                                    </ins>
                                </span>
                                <div class="rating-bx">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COLUMNS 3 -->
                <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                    <div class="wt-box wt-product-box">
                        <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                            <img src="/frontend/images/products/pic-7.jpg" alt="">
                            <div class="overlay-bx">
                                <div class="overlay-icon">
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                    </a>
                                    <a class="mfp-link" href="javascript:void(0);">
                                        <i class="fa fa-heart wt-icon-box-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="wt-info  text-center">
                            <div class="p-a10 bg-white">
                                <h4 class="wt-title">
                                    <a href="javascript:;">Seven Martines</a>
                                </h4>
                                <span class="price">
                                    <del>
                                        <span><span class="Price-currencySymbol">£</span>3.00</span>
                                    </del>
                                    <ins>
                                        <span><span class="Price-currencySymbol">£</span>2.00</span>
                                    </ins>
                                </span>
                                <div class="rating-bx">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- PRODUCT DETAILS -->

    </div>
    <!-- CONTENT CONTENT END -->
@endsection
