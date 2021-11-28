@extends('frontend.layouts.master')
@section('header')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/banner/about-banner.jpg);">
        <div class="overlay-main bg-black opacity-05"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Checkout</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-1">
                <li><a href="javascript:void(0);">Home</a></li>
                <li>Checkout</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB  ROW END -->
@endsection
@section('main')
    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">

        <!-- PRODUCT DETAILS -->
        <div class="container woo-entry">


            <!-- SECTION CONTENT START -->
            <div class="section-content">

                <!-- FROM STYEL 1 -->
                <div class="col-md-6 m-b30">
                    <div class="section-head">
                        <h3 class="text-uppercase">Billing Information</h3>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                    </div>

                    <div class="wt-box">
                        <form method="POST" action="{{url('backend/orders')}}">
                            @csrf
                            <div class="form-group">
                                <label>Tên</label>
                                <input type="text" class="form-control" name="name"
                                    value="{{ Illuminate\Support\Facades\Auth::user()->name }}" placeholder="Company Name">
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" name="phone"
                                            value="{{ Illuminate\Support\Facades\Auth::user()->userInfo->phone }}"
                                            placeholder="Enter Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{ Illuminate\Support\Facades\Auth::user()->email }}"
                                            placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input type="text" class="form-control" name="address"
                                            value="{{ Illuminate\Support\Facades\Auth::user()->userInfo->address }}"
                                            placeholder="Enter email">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" value="submit" class="site-button">Thanh toán</button>
                        </form>
                    </div>
                </div>

                <!-- FROM STYEL 1 WITH ICON -->
                <div class="col-md-6 m-b30">
                    <div class="section-head">
                        <h3 class="text-uppercase">Đơn hàng của bạn</h3>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                    </div>
                    <div class="wt-box your-order-list">
                        <ul>
                            @foreach ($order as $or)
                                <li>{{ $or->name }}<strong class="pull-right text-primary">{{ $or->price }}</strong>
                                </li>
                            @endforeach
                            {{-- <li><b> Cart Subtotal</b><strong class="pull-right text-primary">$230.00</strong></li> --}}
                            {{-- <li><b> Shipping</b><strong class="pull-right text-primary">$50.00</strong></li> --}}
                            <li><b> Cart Total</b><strong
                                    class="pull-right text-primary">{{ \Gloudemans\Shoppingcart\Facades\Cart::total() }}</strong>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- SECTION CONTENT END -->

        </div>
        <!-- PRODUCT DETAILS -->

    </div>
    <!-- CONTENT CONTENT END -->
@endsection
