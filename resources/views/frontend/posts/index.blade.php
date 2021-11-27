@extends('frontend.layouts.master')
@section('header')
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(/frontend/images/banner/blog-banner1.jpg);">
        <div class="overlay-main bg-black opacity-07"></div>
    </div>
@endsection
@section('main')
    <div class="section-full p-t80 p-b50">
        <div class="container">
            <div class="row">
                <!-- LEFT PART START -->

                <div class="col-md-9">
                    @foreach ($posts as $post)
                        <div class="blog-post blog-md date-style-1 clearfix">

                            <div class="wt-post-media wt-img-effect zoom-slow">
                                <a href="javascript:void(0);">
                                    <img src="{{ $post->image_url_full }}" alt="">
                                </a>
                            </div>
                            <div class="wt-post-info">

                                <div class="wt-post-title ">
                                    <h3 class="post-title"><a href="javascript:void(0);">{{ $post->title }}</a></h3>
                                </div>
                                <div class="wt-post-meta ">
                                    <ul>
                                        <li class="post-date"> <i
                                                class="fa fa-calendar"></i>{{ $post->created_at->format('d/m/Y') }}
                                        </li>
                                        <li class="post-author"><i class="fa fa-user"></i><a
                                                href="javascript:void(0);">By <span>{{ $post->user->name }}</span></a>
                                        </li>
                                        <li class="post-comment"><i class="fa fa-comments"></i> <a
                                                href="javascript:void(0);">0</a> </li>
                                    </ul>
                                </div>
                                <div class="wt-post-text">
                                    <p>{!! $post->content !!}</p>
                                </div>
                                <div class="clearfix">
                                    <div class="wt-post-readmore pull-left">
                                        <a href="{{ route('frontend.posts.show', $post->id) }}" title="READ MORE"
                                            rel="bookmark" class="">Xem chi tiết</a>
                                    </div>
                                    {{-- <div class="widget_social_inks pull-right">
                                        <ul class="social-icons social-radius social-dark m-b0">
                                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{ $posts->links() }}
                </div>
                <div class="col-md-3">
                    <aside class="side-bar">
                        <!-- 13. SEARCH -->
                        {{-- <div class="widget bg-white ">
                            <h4 class="widget-title">Search</h4>
                            <div class="search-bx">
                                <form role="search" method="post">
                                    <div class="input-group">
                                        <input name="news-letter" type="text" class="form-control"
                                            placeholder="Write your text">
                                        <span class="input-group-btn">
                                            <button type="submit" class="site-button"><i
                                                    class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                        <!-- 2. RECENT POSTS -->
                        <div class="widget bg-white  widget_tag_cloud">
                            <h4 class="widget-title">Danh mục bài viết</h4>
                            <div class="tagcloud">
                                @foreach ($categories as $category)
                                    <a
                                        href="{{ route('frontend.posts.category_posts', $category->id) }}">{{ $category->name }}</a>
                                @endforeach
                            </div>
                        </div>
                        {{-- <div class="widget bg-white  recent-posts-entry">
                            <h4 class="widget-title">Posts</h4>
                            <div class="section-content">
                                <div class="wt-tabs tabs-default border">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#web-design-1">Recent</a></li>
                                        <li><a data-toggle="tab" href="#graphic-design-1">Popular</a></li>
                                    </ul>
                                    <div class="tab-content">

                                        <div id="web-design-1" class="tab-pane active ">
                                            <div class="widget-post-bx">
                                                <div class="widget-post clearfix bg-gray">
                                                    <div class="wt-post-media">
                                                        <img src="/frontend/images/blog/recent-blog/pic1.jpg" alt=""
                                                            class="radius-bx">
                                                    </div>
                                                    <div class="wt-post-info">
                                                        <div class="wt-post-header">
                                                            <h6 class="post-title">Lorem ipsum dolor sit amet</h6>
                                                        </div>
                                                        <div class="wt-post-meta">
                                                            <ul>
                                                                <li class="post-author">25 Dec</li>
                                                                <li class="post-comment"><i class="fa fa-comments"></i>
                                                                    20comment</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-post clearfix bg-gray">
                                                    <div class="wt-post-media">
                                                        <img src="/frontend/images/blog/recent-blog/pic2.jpg" alt=""
                                                            class="radius-bx">
                                                    </div>
                                                    <div class="wt-post-info">
                                                        <div class="wt-post-header">
                                                            <h6 class="post-title">Debitis nihil placeat, illum est
                                                            </h6>
                                                        </div>
                                                        <div class="wt-post-meta">
                                                            <ul>
                                                                <li class="post-author">25 Dec</li>
                                                                <li class="post-comment"><i class="fa fa-comments"></i> 15
                                                                    comment</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-post clearfix bg-gray">
                                                    <div class="wt-post-media">
                                                        <img src="/frontend/images/blog/recent-blog/pic3.jpg" alt=""
                                                            class="radius-bx">
                                                    </div>
                                                    <div class="wt-post-info">
                                                        <div class="wt-post-header">
                                                            <h6 class="post-title">Elit Assumenda vel amet </h6>
                                                        </div>
                                                        <div class="wt-post-meta">
                                                            <ul>
                                                                <li class="post-author">25 Dec</li>
                                                                <li class="post-comment"><i class="fa fa-comments"></i> 07
                                                                    comment</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="graphic-design-1" class="tab-pane">
                                            <div class="widget-post-bx">
                                                <div class="widget-post clearfix bg-gray">
                                                    <div class="wt-post-media">
                                                        <img src="/frontend/images/blog/recent-blog/pic3.jpg" alt=""
                                                            class="radius-bx">
                                                    </div>
                                                    <div class="wt-post-info">
                                                        <div class="wt-post-header">
                                                            <h6 class="post-title">Blog post title doler sit amet</h6>
                                                        </div>
                                                        <div class="wt-post-meta">
                                                            <ul>
                                                                <li class="post-author">25 Dec</li>
                                                                <li class="post-comment"><i class="fa fa-comments"></i> 10
                                                                    comment</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-post clearfix bg-gray">
                                                    <div class="wt-post-media">
                                                        <img src="/frontend/images/blog/recent-blog/pic1.jpg" alt=""
                                                            class="radius-bx">
                                                    </div>
                                                    <div class="wt-post-info">
                                                        <div class="wt-post-header">
                                                            <h6 class="post-title">Blog post title lorem ipsum</h6>
                                                        </div>
                                                        <div class="wt-post-meta">
                                                            <ul>
                                                                <li class="post-author">25 Dec</li>
                                                                <li class="post-comment"><i class="fa fa-comments"></i>
                                                                    29
                                                                    comment</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-post clearfix bg-gray">
                                                    <div class="wt-post-media">
                                                        <img src="/frontend/images/blog/recent-blog/pic2.jpg" alt=""
                                                            class="radius-bx">
                                                    </div>
                                                    <div class="wt-post-info">
                                                        <div class="wt-post-header">
                                                            <h6 class="post-title">Blog post title a dummy text</h6>
                                                        </div>
                                                        <div class="wt-post-meta">
                                                            <ul>
                                                                <li class="post-author">25 Dec</li>
                                                                <li class="post-comment"><i class="fa fa-comments"></i>
                                                                    05
                                                                    comment</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- 4. OUR GALLERY  -->
                        {{-- <div class="widget widget_gallery mfp-gallery">
                            <h4 class="widget-title">Our Gallery</h4>
                            <ul>
                                <li>
                                    <div class="wt-post-thum">
                                        <a href="/frontend/images/gallery/pic1.jpg" class="mfp-link"><img
                                                src="/frontend/images/gallery/thumb/pic1.jpg" alt=""></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="wt-post-thum ">
                                        <a href="/frontend/images/gallery/pic2.jpg" class="mfp-link"><img
                                                src="/frontend/images/gallery/thumb/pic2.jpg" alt=""></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="wt-post-thum  ">
                                        <a href="/frontend/images/gallery/pic3.jpg" class="mfp-link"><img
                                                src="/frontend/images/gallery/thumb/pic3.jpg" alt=""></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="wt-post-thum ">
                                        <a href="/frontend/images/gallery/pic4.jpg" class="mfp-link"><img
                                                src="/frontend/images/gallery/thumb/pic4.jpg" alt=""></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="wt-post-thum ">
                                        <a href="/frontend/images/gallery/pic5.jpg" class="mfp-link"><img
                                                src="/frontend/images/gallery/thumb/pic5.jpg" alt=""></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="wt-post-thum ">
                                        <a href="/frontend/images/gallery/pic6.jpg" class="mfp-link"><img
                                                src="/frontend/images/gallery/thumb/pic6.jpg" alt=""></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="wt-post-thum">
                                        <a href="/frontend/images/gallery/pic7.jpg" class="mfp-link"><img
                                                src="/frontend/images/gallery/thumb/pic7.jpg" alt=""></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="wt-post-thum ">
                                        <a href="/frontend/images/gallery/pic8.jpg" class="mfp-link"><img
                                                src="/frontend/images/gallery/thumb/pic8.jpg" alt=""></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="wt-post-thum  ">
                                        <a href="/frontend/images/gallery/pic7.jpg" class="mfp-link"><img
                                                src="/frontend/images/gallery/thumb/pic7.jpg" alt=""></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="wt-post-thum ">
                                        <a href="/frontend/images/gallery/pic6.jpg" class="mfp-link"><img
                                                src="/frontend/images/gallery/thumb/pic6.jpg" alt=""></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="wt-post-thum ">
                                        <a href="/frontend/images/gallery/pic5.jpg" class="mfp-link"><img
                                                src="/frontend/images/gallery/thumb/pic5.jpg" alt=""></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="wt-post-thum ">
                                        <a href="/frontend/images/gallery/pic4.jpg" class="mfp-link"><img
                                                src="/frontend/images/gallery/thumb/pic4.jpg" alt=""></a>
                                    </div>
                                </li>
                            </ul>

                        </div> --}}
                        <!-- 7. OUR CLIENT -->
                        {{-- <div class="widget">
                            <h4 class="widget-title">Our Client</h4>
                            <div class="owl-carousel widget-client p-t10 owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(-526px, 0px, 0px); transition: all 0s ease 0s; width: 1841px;">
                                        <div class="owl-item cloned" style="width: 263px;">
                                            <div class="item">
                                                <div class="ow-client-logo">
                                                    <div class="client-logo wt-img-effect on-color">
                                                        <a href="#"><img src="/frontend/images/client-logo/logo2.png"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 263px;">
                                            <div class="item">
                                                <div class="ow-client-logo">
                                                    <div class="client-logo wt-img-effect on-color">
                                                        <a href="#"><img src="/frontend/images/client-logo/logo3.png"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 263px;">
                                            <div class="item">
                                                <div class="ow-client-logo">
                                                    <div class="client-logo wt-img-effect on-color">
                                                        <a href="#"><img src="/frontend/images/client-logo/logo1.png"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 263px;">
                                            <div class="item">
                                                <div class="ow-client-logo">
                                                    <div class="client-logo wt-img-effect on-color">
                                                        <a href="#"><img src="/frontend/images/client-logo/logo2.png"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 263px;">
                                            <div class="item">
                                                <div class="ow-client-logo">
                                                    <div class="client-logo wt-img-effect on-color">
                                                        <a href="#"><img src="/frontend/images/client-logo/logo3.png"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 263px;">
                                            <div class="item">
                                                <div class="ow-client-logo">
                                                    <div class="client-logo wt-img-effect on-color">
                                                        <a href="#"><img src="/frontend/images/client-logo/logo1.png"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 263px;">
                                            <div class="item">
                                                <div class="ow-client-logo">
                                                    <div class="client-logo wt-img-effect on-color">
                                                        <a href="#"><img src="/frontend/images/client-logo/logo2.png"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav disabled">
                                    <div class="owl-prev"><i class="fa fa-chevron-left"></i></div>
                                    <div class="owl-next"><i class="fa fa-chevron-right"></i></div>
                                </div>
                                <div class="owl-dots">
                                    <div class="owl-dot active"><span></span></div>
                                    <div class="owl-dot"><span></span></div>
                                    <div class="owl-dot"><span></span></div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- 6. NEWSLETTER -->
                        {{-- <div class="widget widget_newsletter-2 bg-white  ">
                            <h4 class="widget-title">Newsletter</h4>
                            <div class="newsletter-bx p-a30">
                                <div class="newsletter-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>

                                <div class="newsletter-content">
                                    <i>Enter your e-mail and subscribe to our newsletter. Sit amet of Lorem Ipsum. Proin
                                        gravida
                                        nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis</i>
                                </div>
                                <div class="m-t20">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <input name="news-letter" class="form-control" placeholder="ENTER YOUR EMAIL"
                                                type="text">
                                            <span class="input-group-btn">
                                                <button type="submit" class="site-button"><i
                                                        class="fa fa-paper-plane-o"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                        <!-- 12. TAGS -->
                        <div class="widget bg-white  widget_tag_cloud">
                            <h4 class="widget-title">Thẻ</h4>
                            <div class="tagcloud">
                                @foreach ($tags as $tag)
                                    <a href="">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            <!-- SIDE BAR END -->

        </div>
    </div>
@endsection
