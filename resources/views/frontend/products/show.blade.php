@extends('frontend.layouts.master')
@section('header')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(/frontend/images/banner/banner3.jpg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Chi tiết sản phẩm</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="javascript:void(0);"><i class="fa fa-home"></i>Trang chủ</a></li>
                <li>Chi tiết sản phẩm</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->
@endsection
@section('main')
    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">

        <!-- PRODUCT DETAILS -->
        <div class="container woo-entry">

            <div class="row m-b30">

                <div class="col-md-4 col-sm-4 m-b30">
                    <div class="wt-box wt-product-gallery on-show-slider">

                        <div id="sync1" class="owl-carousel owl-theme owl-btn-vertical-center m-b5">
                            <div class="item">
                                <div class="mfp-gallery">
                                    <div class="wt-box">
                                        <div class="wt-thum-bx wt-img-overlay1 ">
                                            <img src="{{ $product->info_url_full }}" alt="">
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <a class="mfp-link" href="{{ $product->info_url_full }}">
                                                        <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="mfp-gallery">
                                    <div class="wt-box">
                                        <div class="wt-thum-bx wt-img-overlay1 ">
                                            <img src="/frontend/images/products/pic-2.jpg" alt="">
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <a class="mfp-link" href="/frontend/images/products/pic-2.jpg">
                                                        <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="mfp-gallery">
                                    <div class="wt-box">
                                        <div class="wt-thum-bx wt-img-overlay1 ">
                                            <img src="/frontend/images/products/pic-3.jpg" alt="">
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <a class="mfp-link" href="/frontend/images/products/pic-3.jpg">
                                                        <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="mfp-gallery">
                                    <div class="wt-box">
                                        <div class="wt-thum-bx wt-img-overlay1 ">
                                            <img src="/frontend/images/products/pic-4.jpg" alt="">
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <a class="mfp-link" href="/frontend/images/products/pic-4.jpg">
                                                        <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="mfp-gallery">
                                    <div class="wt-box">
                                        <div class="wt-thum-bx wt-img-overlay1 ">
                                            <img src="/frontend/images/products/pic-5.jpg" alt="">
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <a class="mfp-link" href="/frontend/images/products/pic-5.jpg">
                                                        <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="sync2" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="wt-media">
                                    <img src="/frontend/images/products/thumb/pic1.jpg" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="wt-media">
                                    <img src="/frontend/images/products/thumb/pic2.jpg" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="wt-media">
                                    <img src="/frontend/images/products/thumb/pic3.jpg" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="wt-media">
                                    <img src="/frontend/images/products/thumb/pic4.jpg" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="wt-media">
                                    <img src="/frontend/images/products/thumb/pic5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-sm-8">
                    <div class="wt-post-title ">
                        <h3 class="post-title"><a href="javascript:void(0);">{{ $product->name }}</a></h3>
                    </div>
                    <h2 class="m-tb10">{{ $product->sale_price_format }}</h2>
                    <div class="wt-post-text">
                        <p class="m-b10">{{ $product->content }}</p>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <td>Đơn giá</td>
                            <td>{{ $product->orgin_price_format }}</td>
                        </tr>
                        <tr>
                            <td>Stock Availability</td>
                            <td>AVAILABLE</td>
                        </tr>
                        <tr>
                            <td>Đánh giá</td>
                            <td>
                                <span class="rating-bx">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                            </td>
                        </tr>
                    </table>
                    <form method="post" class="cart">
                        <div class="quantity btn-quantity pull-left m-r10">
                            <input id="demo_vertical2" type="text" value="1" name="demo_vertical2" />
                        </div>
                        <button class="btn btn-primary site-button-secondry pull-left m-r10"><i
                                class="fa fa-shopping-bag"></i>Mua ngay</button>
                        <a class="btn btn-primary site-button pull-left"
                            href="{{ route('frontend.cart.create', $product->id) }}"><i class="fa fa-cart-plus"></i> Thêm
                            vào giỏ hàng</a>
                    </form>
                </div>
            </div>

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
                <div class="col-md-3 col-sm-4 col-xs-6 col-xs-100pc m-b30">
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
                <!-- COLUMNS 1 -->
                <div class="col-md-3 col-sm-4 col-xs-6 col-xs-100pc m-b30">
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
                <!-- COLUMNS 1 -->
                <div class="col-md-3 col-sm-4 col-xs-6 col-xs-100pc m-b30">
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
                <!-- COLUMNS 1 -->
                <div class="col-md-3 col-sm-4 col-xs-6 col-xs-100pc m-b30">
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
            </div>

            <!-- TABS CONTENT START -->
            <div class="row">
                <div class="col-md-12 p-b30">
                    <div class="wt-tabs border border-top bg-tabs">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#web-design-19">Description</a></li>
                            <li><a data-toggle="tab" href="#graphic-design-19">Specification</a></li>
                            <li><a data-toggle="tab" href="#developement-19">Review</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="web-design-19" class="tab-pane active">
                                <div class=" p-a10">
                                    <p class="m-b10"><strong><em>Web design lorem ipsum dolor sit amet,
                                                consectetuer adipiscing elit.</em></strong><br> Suspendisse et justo.
                                        Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In
                                        pulvinar lectus a est Curabitur eget orci Cras laoreet.
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo.
                                        Praesent mattis
                                        commyolk augue aliquam ornare augue.</p>
                                    <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was born and I will give you a complete account of the system, and
                                        expound the actual teachings of the great explorer of the truth, the master-builder
                                        of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it
                                        is pleasure, but because those who do not know how to pursue pleasure rationally
                                        encounter consequences that are extremely painful. Nor again is there anyone who
                                        loves or pursues or desires to obtain pain of itself, because it is pain, but
                                        because occasionally circumstances occur in which toil and pain can procure him some
                                        great pleasure. To take a trivial example, which of us ever undertakes laborious
                                        physical exercise, except to obtain some advantage from it? But who has any right to
                                        find fault with a man who chooses to enjoy a pleasure that has no annoying
                                        consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
                                    <ul class="list-check-circle primary">
                                        <li>"But I must explain to you how all this mistaken idea of denouncing pleasure and
                                            praising pain was born and I will give you a complete account of the system, and
                                        </li>
                                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen
                                            book. </li>
                                        <li>t is a long established fact that a reader will be distracted by the readable
                                            content of a page when looking at its layout. The point of using Lorem Ipsum is
                                            that it has a more-or-less normal distribution of letters, as opposed to using
                                            'Content here, content here'</li>
                                        <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book.</li>
                                        <li>Dorem ipsum dolor sit amet</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="graphic-design-19" class="tab-pane">
                                <table class="table table-bordered table-striped m-b0">
                                    <tr>
                                        <td><strong>Size</strong></td>
                                        <td>Small, Medium, Large & Extra Large</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Color</strong></td>
                                        <td>Read, Blue, Green & Black</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Length</strong></td>
                                        <td>35 cm</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Fabric</strong></td>
                                        <td>Cotton, Silk & Synthetic</td>
                                    </tr>
                                    <tr>
                                        <td>table-bordered</td>
                                        <td>6 Months</td>
                                    </tr>
                                </table>
                            </div>
                            <div id="developement-19" class="tab-pane">
                                <div class=" p-a10">
                                    <div id="comments">
                                        <ol class="commentlist">
                                            <li class="comment">
                                                <div class="comment_container">
                                                    <img class="avatar avatar-60 photo"
                                                        src="/frontend/images/testimonials/pic1.jpg" alt="">
                                                    <div class="comment-text">
                                                        <div class="star-rating">
                                                            <div data-rating='3'>
                                                                <i class="fa fa-star" data-alt="1" title="regular"></i>
                                                                <i class="fa fa-star" data-alt="2" title="regular"></i>
                                                                <i class="fa fa-star-o" data-alt="3" title="regular"></i>
                                                                <i class="fa fa-star-o" data-alt="4" title="regular"></i>
                                                                <i class="fa fa-star-o" data-alt="5" title="regular"></i>
                                                            </div>
                                                        </div>
                                                        <p class="meta">
                                                            <strong class="author">Cobus Bester</strong>
                                                            <span><i class="fa fa-clock-o"></i> March 7, 2013</span>
                                                        </p>
                                                        <div class="description">
                                                            <p>Really happy with this print. The colors are great, and the
                                                                paper quality is very good.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="comment_container">
                                                    <img class="avatar avatar-60 photo"
                                                        src="/frontend/images/testimonials/pic2.jpg" alt="">
                                                    <div class="comment-text">
                                                        <div class="star-rating">
                                                            <div data-rating='3'>
                                                                <i class="fa fa-star" data-alt="1" title="regular"></i>
                                                                <i class="fa fa-star" data-alt="2" title="regular"></i>
                                                                <i class="fa fa-star" data-alt="3" title="regular"></i>
                                                                <i class="fa fa-star-o" data-alt="4" title="regular"></i>
                                                                <i class="fa fa-star-o" data-alt="5" title="regular"></i>
                                                            </div>
                                                        </div>
                                                        <p class="meta">
                                                            <strong class="author">Cobus Bester</strong>
                                                            <span><i class="fa fa-clock-o"></i> March 7, 2013</span>
                                                        </p>
                                                        <div class="description">
                                                            <p>Really happy with this print. The colors are great, and the
                                                                paper quality is very good.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="comment_container">
                                                    <img class="avatar avatar-60 photo"
                                                        src="/frontend/images/testimonials/pic3.jpg" alt="">
                                                    <div class="comment-text">
                                                        <div class="star-rating">
                                                            <div data-rating='3'>
                                                                <i class="fa fa-star" data-alt="1" title="regular"></i>
                                                                <i class="fa fa-star" data-alt="2" title="regular"></i>
                                                                <i class="fa fa-star" data-alt="3" title="regular"></i>
                                                                <i class="fa fa-star" data-alt="4" title="regular"></i>
                                                                <i class="fa fa-star-o" data-alt="5" title="regular"></i>
                                                            </div>
                                                        </div>
                                                        <p class="meta">
                                                            <strong class="author">Cobus Bester</strong>
                                                            <span><i class="fa fa-clock-o"></i> March 7, 2013</span>
                                                        </p>
                                                        <div class="description">
                                                            <p>Really happy with this print. The colors are great, and the
                                                                paper quality is very good.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                    <div id="review_form_wrapper">
                                        <div id="review_form">
                                            <div id="respond" class="comment-respond">
                                                <h3 class="comment-reply-title" id="reply-title">Add a review</h3>
                                                <form class="comment-form" method="post">
                                                    <div class="comment-form-author">
                                                        <label>Name <span class="required">*</span></label>
                                                        <input type="text" aria-required="true" size="30" value=""
                                                            name="author" id="author">
                                                    </div>
                                                    <div class="comment-form-email">
                                                        <label>Email <span class="required">*</span></label>
                                                        <input type="text" aria-required="true" size="30" value=""
                                                            name="email" id="email">
                                                    </div>
                                                    <div class="comment-form-rating">
                                                        <label>Your Rating</label>
                                                        <div class='star-Rating-input'>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="comment-form-comment">
                                                        <label>Your Review</label>
                                                        <textarea aria-required="true" rows="8" cols="45" name="comment"
                                                            id="comment"></textarea>
                                                    </div>
                                                    <div class="form-submit">
                                                        <button class="site-button  m-r15" type="submit">Submit <i
                                                                class="fa fa-angle-double-right"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TABS CONTENT START -->



        </div>
        <!-- PRODUCT DETAILS -->

    </div>
    <!-- CONTENT CONTENT END -->
@endsection
