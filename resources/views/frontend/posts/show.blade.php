@extends('frontend.layouts.master')
@section('header')
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(/frontend/images/banner/blog-banner.jpg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Blog grid 3 with sidebar</h1>
            </div>
        </div>
    </div>
@endsection
@section('main')
    <div class="section-full p-t80 p-b50">
        <div class="container">
            <div class="row">
                <!-- LEFT PART START -->
                <div class="col-md-9">

                    <!-- BLOG START -->
                    <div class="blog-post date-style-1 blog-detail">
                        <div class="wt-post-media wt-img-effect">
                            <a href="javascript:void(0);"><img src="/frontend/images/blog/default/thum01.jpg" alt=""></a>
                        </div>
                        <div class="wt-post-title ">
                            <h3 class="post-title"><a href="javascript:void(0);">{{ $post->title }}</a></h3>
                        </div>
                        <div class="wt-post-meta ">
                            <ul>
                                <li class="post-date"> <i
                                        class="fa fa-calendar"></i>{{ $post->created_at->format('d/m/Y') }}</li>
                                <li class="post-author"><i class="fa fa-user"></i><a href="javascript:void(0);">By
                                        <span>{{ $post->user->name }}</span></a> </li>
                                <li class="post-comment"><i class="fa fa-comments"></i> <a
                                        href="javascript:void(0);">0</a> </li>
                            </ul>
                        </div>
                        <div class="wt-post-text">
                            <p>{{ $post->content }}</p>
                            <blockquote>
                                The trouble with programmers is that you can never tell what a programmer is doing until
                                it's too late. The future belongs to a different kind of person with a different kind of
                                mind: artists, inventors, storytellers-creative and holistic ‘right-brain’ thinkers whose
                                abilities mark the fault line between who gets ahead and who doesn’t.
                                <div class="p-t15">
                                    <p> – Daniel Pink</p>
                                </div>
                            </blockquote>
                        </div>
                        <div class="widget bg-white  widget_tag_cloud">
                            <h4 class="tagcloud">Tags</h4>
                            <div class="tagcloud">
                                @foreach ($post->tags as $tag)
                                    @if (isset($tag->name))
                                        <a href="javascript:void(0);">{{ $tag->name }}</a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="wt-box">
                            <div class="wt-divider bg-gray-dark"><i class="icon-dot c-square"></i></div>
                            <div class="row  p-lr15">
                                <h4 class="tagcloud pull-left m-t5 m-b0">Share this Post:</h4>
                                <div class="widget_social_inks pull-right">
                                    <ul class="social-icons social-md social-square social-dark m-b0">
                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="wt-divider bg-gray-dark"><i class="icon-dot c-square"></i></div>
                        </div>
                    </div>

                    <div class="section-content p-t50">
                        <!-- TITLE START -->
                        <div class="section-head">
                            <h3 class="text-uppercase">Related Blog Post</h3>
                            <div class="wt-separator-outer">
                                <div class="wt-separator style-icon">
                                    <i class="fa fa-leaf text-black"></i>
                                    <span class="separator-left bg-primary"></span>
                                    <span class="separator-right bg-primary"></span>
                                </div>
                            </div>
                        </div>
                        <!-- TITLE END -->

                        <!-- CAROUSEL -->
                        <div class="section-content">
                            <div class="owl-carousel blog-related-slider  owl-btn-vertical-center">
                                <!-- COLUMNS 1 -->
                                <div class="item">
                                    <div class="blog-post blog-grid date-style-1">
                                        <div class="wt-post-media wt-img-effect zoom-slow">
                                            <a href="javascript:void(0);"><img src="/frontend/images/blog/grid/pic1.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="wt-post-info p-tb30 p-m30">
                                            <div class="wt-post-title ">
                                                <h3 class="post-title"><a href="javascript:void(0);">Blogpost With
                                                        Image</a></h3>
                                            </div>
                                            <div class="wt-post-meta ">
                                                <ul>
                                                    <li class="post-date"> <i class="fa fa-calendar"></i><strong>20
                                                            Dec</strong> <span> 2017</span> </li>
                                                    <li class="post-author"><i class="fa fa-user"></i><a
                                                            href="javascript:void(0);">By <span>John</span></a> </li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> <a
                                                            href="javascript:void(0);">0 Comments</a> </li>
                                                </ul>
                                            </div>
                                            <div class="wt-post-text">
                                                <p>Hic perferendis velit deserunt soluta iste repellendus officia in neque
                                                    veniam debitis</p>
                                            </div>
                                            <div class="clearfix">
                                                <div class="wt-post-readmore pull-left">
                                                    <a href="javascript:void(0);" title="READ MORE" rel="bookmark"
                                                        class="site-button-link">Read More</a>
                                                </div>
                                                <div class="widget_social_inks pull-right">
                                                    <ul class="social-icons social-radius social-dark m-b0">
                                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 2 -->
                                <div class="item">
                                    <div class="blog-post blog-grid date-style-1">
                                        <div class="wt-post-media wt-img-effect zoom-slow">
                                            <a href="javascript:void(0);"><img src="/frontend/images/blog/grid/pic2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="wt-post-info p-tb30 p-m30">
                                            <div class="wt-post-title ">
                                                <h3 class="post-title"><a href="javascript:void(0);">Blogpost With
                                                        Image</a></h3>
                                            </div>
                                            <div class="wt-post-meta ">
                                                <ul>
                                                    <li class="post-date"> <i class="fa fa-calendar"></i><strong>20
                                                            Dec</strong> <span> 2017</span> </li>
                                                    <li class="post-author"><i class="fa fa-user"></i><a
                                                            href="javascript:void(0);">By <span>John</span></a> </li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> <a
                                                            href="javascript:void(0);">0 Comments</a> </li>
                                                </ul>
                                            </div>
                                            <div class="wt-post-text">
                                                <p>Hic perferendis velit deserunt soluta iste repellendus officia in neque
                                                    veniam debitis</p>
                                            </div>
                                            <div class="clearfix">
                                                <div class="wt-post-readmore pull-left">
                                                    <a href="javascript:void(0);" title="READ MORE" rel="bookmark"
                                                        class="site-button-link">Read More</a>
                                                </div>
                                                <div class="widget_social_inks pull-right">
                                                    <ul class="social-icons social-radius social-dark m-b0">
                                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 3 -->
                                <div class="item">
                                    <div class="blog-post blog-grid date-style-1">
                                        <div class="wt-post-media wt-img-effect zoom-slow">
                                            <a href="javascript:void(0);"><img src="/frontend/images/blog/grid/pic3.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="wt-post-info p-tb30 p-m30">
                                            <div class="wt-post-title ">
                                                <h3 class="post-title"><a href="javascript:void(0);">Blogpost With
                                                        Image</a></h3>
                                            </div>
                                            <div class="wt-post-meta ">
                                                <ul>
                                                    <li class="post-date"> <i class="fa fa-calendar"></i><strong>20
                                                            Dec</strong> <span> 2017</span> </li>
                                                    <li class="post-author"><i class="fa fa-user"></i><a
                                                            href="javascript:void(0);">By <span>John</span></a> </li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> <a
                                                            href="javascript:void(0);">0 Comments</a> </li>
                                                </ul>
                                            </div>
                                            <div class="wt-post-text">
                                                <p>Hic perferendis velit deserunt soluta iste repellendus officia in neque
                                                    veniam debitis</p>
                                            </div>
                                            <div class="clearfix">
                                                <div class="wt-post-readmore pull-left">
                                                    <a href="javascript:void(0);" title="READ MORE" rel="bookmark"
                                                        class="site-button-link">Read More</a>
                                                </div>
                                                <div class="widget_social_inks pull-right">
                                                    <ul class="social-icons social-radius social-dark m-b0">
                                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 4 -->
                                <div class="item">
                                    <div class="blog-post blog-grid date-style-1">
                                        <div class="wt-post-media wt-img-effect zoom-slow">
                                            <a href="javascript:void(0);"><img src="/frontend/images/blog/grid/pic4.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="wt-post-info p-tb30 p-m30">
                                            <div class="wt-post-title ">
                                                <h3 class="post-title"><a href="javascript:void(0);">Blogpost With
                                                        Image</a></h3>
                                            </div>
                                            <div class="wt-post-meta ">
                                                <ul>
                                                    <li class="post-date"> <i class="fa fa-calendar"></i><strong>20
                                                            Dec</strong> <span> 2017</span> </li>
                                                    <li class="post-author"><i class="fa fa-user"></i><a
                                                            href="javascript:void(0);">By <span>John</span></a> </li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> <a
                                                            href="javascript:void(0);">0 Comments</a> </li>
                                                </ul>
                                            </div>
                                            <div class="wt-post-text">
                                                <p>Hic perferendis velit deserunt soluta iste repellendus officia in neque
                                                    veniam debitis</p>
                                            </div>
                                            <div class="clearfix">
                                                <div class="wt-post-readmore pull-left">
                                                    <a href="javascript:void(0);" title="READ MORE" rel="bookmark"
                                                        class="site-button-link">Read More</a>
                                                </div>
                                                <div class="widget_social_inks pull-right">
                                                    <ul class="social-icons social-radius social-dark m-b0">
                                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 5 -->
                                <div class="item">
                                    <div class="blog-post blog-grid date-style-1">
                                        <div class="wt-post-media wt-img-effect zoom-slow">
                                            <a href="javascript:void(0);"><img src="/frontend/images/blog/grid/pic5.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="wt-post-info p-tb30 p-m30">
                                            <div class="wt-post-title ">
                                                <h3 class="post-title"><a href="javascript:void(0);">Blogpost With
                                                        Image</a></h3>
                                            </div>
                                            <div class="wt-post-meta ">
                                                <ul>
                                                    <li class="post-date"> <i class="fa fa-calendar"></i><strong>20
                                                            Dec</strong> <span> 2017</span> </li>
                                                    <li class="post-author"><i class="fa fa-user"></i><a
                                                            href="javascript:void(0);">By <span>John</span></a> </li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> <a
                                                            href="javascript:void(0);">0 Comments</a> </li>
                                                </ul>
                                            </div>
                                            <div class="wt-post-text">
                                                <p>Hic perferendis velit deserunt soluta iste repellendus officia in neque
                                                    veniam debitis</p>
                                            </div>
                                            <div class="clearfix">
                                                <div class="wt-post-readmore pull-left">
                                                    <a href="javascript:void(0);" title="READ MORE" rel="bookmark"
                                                        class="site-button-link">Read More</a>
                                                </div>
                                                <div class="widget_social_inks pull-right">
                                                    <ul class="social-icons social-radius social-dark m-b0">
                                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 6 -->


                            </div>
                        </div>
                    </div>

                    <div class="clear" id="comment-list">
                        <div class="comments-area" id="comments">
                            <h2 class="comments-title">8 Comments</h2>
                            <div class="p-tb30">

                                <!-- COMMENT LIST START -->
                                <ol class="comment-list">
                                    <li class="comment">

                                        <!-- COMMENT BLOCK -->
                                        <div class="comment-body">

                                            <div class="comment-author vcard">
                                                <img class="avatar photo" src="/frontend/images/testimonials/pic2.jpg"
                                                    alt="">
                                                <cite class="fn">Steffan</cite>
                                                <span class="says">says:</span>
                                            </div>
                                            <div class="comment-meta">
                                                <a href="javascript:void(0);">October 6, 2015 at 7:15 am</a>
                                            </div>
                                            <p>Vulputate cursus a sit amet mauris http://themeforest.net Morbi accumsan
                                                ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non
                                                mauris vitae erat </p>
                                            <div class="reply">
                                                <a href="javascript:void(0);" class="comment-reply-link"></a>
                                            </div>

                                        </div>

                                    </li>
                                    <li class="comment">

                                        <!-- COMMENT BLOCK -->
                                        <div class="comment-body">

                                            <div class="comment-author vcard">
                                                <img class="avatar photo" src="/frontend/images/testimonials/pic3.jpg"
                                                    alt="">
                                                <cite class="fn">Devin</cite>
                                                <span class="says">says:</span>
                                            </div>
                                            <div class="comment-meta">
                                                <a href="javascript:void(0);">October 6, 2015 at 7:15 am</a>
                                            </div>
                                            <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur
                                                quibusdam veritatis quisquam laboriosam esse beatae hic perferendis velit
                                                deserunt soluta iste repellendus officia in neque veniam debitis</p>
                                            <div class="reply">
                                                <a href="javascript:void(0);" class="comment-reply-link"></a>
                                            </div>

                                        </div>

                                    </li>
                                    <li class="comment">

                                        <!-- COMMENT BLOCK -->
                                        <div class="comment-body">

                                            <div class="comment-author vcard">
                                                <img class="avatar photo" src="/frontend/images/testimonials/pic1.jpg"
                                                    alt="">
                                                <cite class="fn">Hugo</cite>
                                                <span class="says">says:</span>
                                            </div>
                                            <div class="comment-meta">
                                                <a href="javascript:void(0);">October 6, 2015 at 7:15 am</a>
                                            </div>
                                            <p>Sit amet nibh vulputate cursus a sit amet mauris lorem ipsum dolor sit amet
                                                of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                                                sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                                sagittis sem nibh id elit. Duis sed odio http://themeforest.net Morbi
                                                accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.
                                                Sed non mauris vitae erat </p>
                                            <div class="reply">
                                                <a href="javascript:void(0);" class="comment-reply-link"></a>
                                            </div>

                                        </div>

                                        <!-- SUB COMMENT BLOCK -->
                                        <ol class="children">
                                            <li class="comment odd parent">

                                                <div class="comment-body">

                                                    <div class="comment-author vcard">
                                                        <img class="avatar photo"
                                                            src="/frontend/images/testimonials/pic2.jpg" alt="">
                                                        <cite class="fn">Brayden</cite>
                                                        <span class="says">says:</span>
                                                    </div>
                                                    <div class="comment-meta">
                                                        <a href="javascript:void(0);">October 6, 2015 at 7:15 am</a>
                                                    </div>
                                                    <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem
                                                        pariatur quibusdam veritatis quisquam laboriosam esse beatae hic
                                                        perferendis velit deserunt soluta iste repellendus officia in neque
                                                        veniam debitis</p>
                                                    <div class="reply">
                                                        <a href="javascript:void(0);" class="comment-reply-link"></a>
                                                    </div>

                                                </div>

                                                <ol class="children">
                                                    <li class="comment odd parent">
                                                        <div class="comment-body">

                                                            <div class="comment-author vcard">
                                                                <img class="avatar photo"
                                                                    src="/frontend/images/testimonials/pic3.jpg" alt="">
                                                                <cite class="fn">Diego</cite>
                                                                <span class="says">says:</span>
                                                            </div>
                                                            <div class="comment-meta">
                                                                <a href="javascript:void(0);">October 6, 2015 at 7:15 am</a>
                                                            </div>
                                                            <p>Vel velit auctor aliquet. Aenean sollicitudin, lorem quis
                                                                bibendum auctor Lorem ipsum dolor sit amet of Lorem Ipsum.
                                                                Proin gravida nibh..</p>
                                                            <div class="reply">
                                                                <a href="javascript:void(0);"
                                                                    class="comment-reply-link"></a>
                                                            </div>

                                                        </div>
                                                    </li>
                                                </ol>

                                            </li>
                                        </ol>

                                    </li>
                                    <li class="comment">

                                        <!-- COMMENT BLOCK -->
                                        <div class="comment-body">

                                            <div class="comment-author vcard">
                                                <img class="avatar photo" src="/frontend/images/testimonials/pic1.jpg"
                                                    alt="">
                                                <cite class="fn">Stacy poe</cite>
                                                <span class="says">says:</span>
                                            </div>
                                            <div class="comment-meta">
                                                <a href="javascript:void(0);">October 6, 2015 at 7:15 am</a>
                                            </div>
                                            <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur
                                                quibusdam veritatis quisquam laboriosam esse beatae hic perferendis velit
                                                deserunt soluta iste repellendus officia in neque veniam debitis</p>
                                            <div class="reply">
                                                <a href="javascript:void(0);" class="comment-reply-link"></a>
                                            </div>

                                        </div>

                                    </li>

                                </ol>
                                <!-- COMMENT LIST END -->

                                <!-- LEAVE A REPLY START -->
                                <div class="comment-respond" id="respond">

                                    <h3 class="comment-reply-title" id="reply-title">Leave a Comments
                                        <small>
                                            <a style="display:none;" href="#" id="cancel-comment-reply-link"
                                                rel="nofollow">Cancel reply</a>
                                        </small>
                                    </h3>

                                    <form class="comment-form" id="commentform" method="post">

                                        <p class="comment-form-author">
                                            <label for="author">Name <span class="required">*</span></label>
                                            <input type="text" value="" name="user-comment" placeholder="Author"
                                                id="author">
                                        </p>

                                        <p class="comment-form-email">
                                            <label for="email">Email <span class="required">*</span></label>
                                            <input type="text" value="" placeholder="Email" name="email" id="email">
                                        </p>

                                        <p class="comment-form-url">
                                            <label for="url">Website</label>
                                            <input type="text" value="" placeholder="Website" name="url" id="url">
                                        </p>

                                        <p class="comment-form-comment">
                                            <label for="comment">Comment</label>
                                            <textarea rows="8" name="comment" placeholder="Comment" id="comment"></textarea>
                                        </p>

                                        <p class="form-submit">
                                            <button class="site-button text-uppercase" type="button">Submit
                                                Comment</button>
                                        </p>

                                    </form>

                                </div>
                                <!-- LEAVE A REPLY END -->

                            </div>
                        </div>
                    </div>
                    <!-- BLOG END -->

                </div>
                <!-- LEFT PART END -->

                <!-- RIGHT PART START -->

                <!-- SIDE BAR START -->
                <div class="col-md-3">

                    <aside class="side-bar">

                        <!-- 13. SEARCH -->
                        <div class="widget bg-white ">
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
                        </div>
                        <!-- 2. RECENT POSTS -->
                        <div class="widget bg-white  recent-posts-entry">
                            <h4 class="widget-title">Posts</h4>
                            <div class="section-content">
                                <div class="wt-tabs tabs-default border">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#web-design-1">Recent</a>
                                        </li>
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
                                                                <li class="post-comment"><i class="fa fa-comments"></i>
                                                                    15 comment</li>
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
                                                                <li class="post-comment"><i class="fa fa-comments"></i>
                                                                    07 comment</li>
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
                                                                <li class="post-comment"><i class="fa fa-comments"></i>
                                                                    10 comment</li>
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
                                                                    29 comment</li>
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
                                                                    05 comment</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 4. OUR GALLERY  -->
                        <div class="widget widget_gallery mfp-gallery">
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

                        </div>
                        <!-- 7. OUR CLIENT -->
                        <div class="widget">
                            <h4 class="widget-title">Our Client</h4>
                            <div class="owl-carousel widget-client p-t10 owl-loaded owl-drag">

                                <!-- COLUMNS 1 -->

                                <!-- COLUMNS 2 -->

                                <!-- COLUMNS 3 -->


                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(-526px, 0px, 0px); transition: all 0.25s ease 0s; width: 1841px;">
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
                        </div>
                        <!-- 6. NEWSLETTER -->
                        <div class="widget widget_newsletter-2 bg-white  ">
                            <h4 class="widget-title">Newsletter</h4>
                            <div class="newsletter-bx p-a30">
                                <div class="newsletter-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>

                                <div class="newsletter-content">
                                    <i>Enter your e-mail and subscribe to our newsletter. Sit amet of Lorem Ipsum. Proin
                                        gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis</i>
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
                        </div>
                        <!-- 12. TAGS -->
                        <div class="widget bg-white  widget_tag_cloud">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tagcloud">
                                @foreach ($tags as $tag)
                                    <a href="">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                        </div>

                    </aside>

                </div>
                <!-- SIDE BAR END -->

                <!-- RIGHT PART END -->
            </div>
        </div>
    </div>
@endsection
