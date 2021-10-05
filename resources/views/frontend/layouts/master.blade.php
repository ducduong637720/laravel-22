<!DOCTYPE html>
<html lang="en">
<head>
	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
     <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spa Template | Home Page 1  @yield('title')</title>
    @include('frontend.includes.style-base')
    @yield('css')
</head>

<body>
 
	<div class="page-wraper"> 
       	
        <!-- HEADER START -->
        @include('frontend.includes.header')
        <!-- HEADER END -->
        
        <!-- CONTENT START -->
        <div class="page-content">
        
            <!-- SLIDER START -->
            <div id="rev_slider_1050_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="webproduct-light" data-source="gallery" style="background-color:transparent;padding:0px;">
            	@yield('rev_slider_wrapper fullscreen-container')
                
            </div>
            <!-- SLIDER END -->
            
            <!-- WELCOME SECTION START -->
            <div class="section-full p-tb100 bg-bottom-center bg-full-width bg-no-repeat" style="background-image:url(images/background/bg-1.png);">
                @yield('section-full p-tb100 bg-bottom-center bg-full-width bg-no-repeat')
        
            </div>   
            <!-- WELCOME COMPANY SECTION END -->
                       
            <!-- OUR SERVICES SECTION START  -->
            <div class="section-full bg-gray p-t80 p-b120 bg-repeat" style="background-image:url(images/background/bg-6.jpg);">
                @yield('section-full bg-gray p-t80 p-b120 bg-repeat')
           
            </div>
             <!-- PRICING SECTION START  -->
            <div class="section-full bg-white p-t80 p-b120">
                @yield('section-full bg-white p-t80 p-b120')
             
            </div>
            <!-- PRICING SECTION END  -->   
                                
            <!-- COMPANY STATUS SECTION START -->
            <div class="section-full overlay-wraper bg-center bg-cover p-tb80 bg-primary"  style="background-image:url(images/background/bg-9.jpg);">
                @yield('section-full overlay-wraper bg-center bg-cover p-tb80 bg-primary')
            	<div class="overlay-main bg-primary opacity-09"></div>
            	<div class="container summary-counter">
                    <div class="row">
                    	<!-- COLUMNS 1 -->
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
                            <div class="wt-icon-box-wraper left p-a10 text-white">
                                <span class="icon-md">
                                    <span class="flaticon-happy"></span>
                                </span>
                                <div class="icon-content">
                                    <div><span class="counter"> 458 </span><b>+</b></div>
                                    <span class="text-uppercase">Happy Clients</span>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
                            <div class="wt-icon-box-wraper left p-a10 text-white">
                                <span class="icon-md">
                                    <span class="flaticon-trophy"></span>
                                </span>
                                <div class="icon-content">
                                    <div><span class="counter"> 698 </span><b>+</b></div>
                                    <span class="text-uppercase">Win Awards</span>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
                            <div class="wt-icon-box-wraper left p-a10 text-white">
                                <span class="icon-md">
                                    <span class="flaticon-female-hairs"></span>
                                </span>
                                <div class="icon-content">
                                    <div><span class="counter"> 894 </span><b>+</b></div>
                                    <span class="text-uppercase">Our Trainer</span>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 4 -->
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
                            <div class="wt-icon-box-wraper left p-a10 text-white">
                                <span class="icon-md">
                                    <span class="flaticon-spray-bottle"></span>
                                </span>
                                <div class="icon-content">
                                    <div><span class="counter"> 758 </span><b>+</b></div>
                                    <span class="text-uppercase">Treatments</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- COMPANY STATUS SECTION END --> 
                        
            <!-- OUR EXPERTS SECTION START  -->
            <div class="section-full bg-white p-tb80">
            	<div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
                        <h1><span class="text-primary">Our</span> Experts</h1>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>                            
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    </div>
                    <!-- TITLE END-->
                    <div class="section-content">
                        <div class="row">
                        
                            <!-- COLUMNS 1 -->
                            <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 radius-bx circle-effect-1">
                                        <img src="images/our-experts/ex1.jpg" class="radius-bx"  alt="">
                                    </div>
                                    <div class="wt-info p-t30 text-center">
                                    	<h2>Camila</h2>
                                        <p>Founder,  Beauty Spa</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 radius-bx circle-effect-1">
                                        <img src="images/our-experts/ex2.jpg" class="radius-bx"  alt="">
                                    </div>
                                    <div class="wt-info p-t30 text-center">
                                    	<h2>Milagros</h2>
                                        <p>Founder,  Beauty Spa</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 radius-bx circle-effect-1">
                                        <img src="images/our-experts/ex3.jpg" class="radius-bx"  alt="">
                                    </div>
                                    <div class="wt-info p-t30 text-center">
                                    	<h2>Agustina.</h2>
                                        <p>Founder,  Beauty Spa</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- OUR EXPERTS SECTION END  -->    
            
            <!-- OUR SPECIAL OFFER SECTION END  -->         
			<div class="section-full bg-primary">
                <div class="container-fluid bg-top-right bg-no-repeat bg-full-height special-offer-block no-col-gap" style="background-image:url(images/special-offer.jpg);">
                        <div class="row">
                        	<div class="col-lg-6 col-md-6 col-sm-12">
                            	<div class="section-content special-offer-outer bg-primary radius  p-tb60">
                                	<div class="special-offer radius p-tb60">
                                        <div class="wt-left-part special-offer-in">
                                            <div class="wt-box p-r100 text-white">
                                                <h1>Our Special Offer</h1>
                                                <h2 class="text-uppercase">You Owe Yourself This Moment</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin squ ad litora torquent per conubia.</p>
                                                <a class="site-button text-uppercase radius-sm font-weight-700 button-lg" >view packages</a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>                               
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-0">
                            	<div class="section-content">
                                </div>
                            </div>
                        </div>
                </div>
                
            </div> 
            <!-- OUR SPECIAL OFFER SECTION END  -->
            
            <!-- OUR GALLERY SECTION END  --> 
            <div class="section-full p-t80">
            	 <div class="container">
                
                    <!-- TITLE START-->
                     <div class="section-head text-center">
                        <h1><span class="text-primary">Our</span> Gallery</h1>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>                            
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    </div>
                     <!-- TITLE END-->
                                              
                     <!-- PAGINATION START -->
                    <div class="filter-wrap p-a15 our-gallery  m-tb30">
                        <ul class="masonry-filter link-style  text-uppercase center-block m-t0">
                            <li class="active"><a data-filter="*" href="#">All</a></li>
                            <li><a data-filter=".cat-filter-1" href="#">Hair cut</a></li>
                            <li><a data-filter=".cat-filter-2" href="#">Foot</a></li>
                            <li><a data-filter=".cat-filter-3" href="#">Body</a></li>
                            <li><a data-filter=".cat-filter-4" href="#">Massage</a></li>
                            <li><a data-filter=".cat-filter-5" href="#">Face massage</a></li>
                        </ul>
                    </div>
                    <!-- PAGINATION END -->
                    
                 </div>
                <!-- GALLERY CONTENT START -->
                 <div class="portfolio-wrap mfp-gallery no-col-gap clearfix">
                     <div class="container-fluid">
                 	      <div class="row">
                                <!-- COLUMNS 1 -->
                                <div class="masonry-item cat-filter-1 col-lg-3 col-md-4 col-sm-6">
                                    <div class="flip-container">
                                        <div class="wt-box">
                                            <div class="wt-thum-bx">
                                                <img src="images/gallery/pic1.jpg" alt="">	
                                            </div>
                                            <div class="wt-info bg-white text-center bdr-5 bdr-primary">
                                                <div class="wt-info-media-zoom">
                                                    <a href="images/latest-projects/large/pic1.jpg"  class="mfp-link">
                                                        <i class="fa fa-arrows-alt font-24 p-a10"></i>
                                                    </a>
                                                </div>
                                                <div class="wt-info-text p-a30">
                                                    <h3>Back Massage</h3>
                                                    <p>Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants.</p>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 2 -->
                                <div class="masonry-item cat-filter-2 col-lg-3 col-md-4 col-sm-6">
                                    <div class="flip-container">
                                        <div class="wt-box">
                                            <div class="wt-thum-bx">
                                                <img src="images/gallery/pic2.jpg" alt="">	
                                            </div>
                                            <div class="wt-info bg-white text-center bdr-5 bdr-primary">
                                                <div class="wt-info-media-zoom">
                                                    <a href="images/latest-projects/large/pic2.jpg"  class="mfp-link">
                                                        <i class="fa fa-arrows-alt font-24 p-a10"></i>
                                                    </a>
                                                </div>
                                                <div class="wt-info-text p-a30">
                                                    <h3>Head Massage </h3>
                                                    <p>Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants.</p>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 3 -->
                                <div class="masonry-item cat-filter-3  col-lg-3 col-md-4 col-sm-6">
                                    <div class="flip-container">
                                        <div class="wt-box">
                                            <div class="wt-thum-bx">
                                                <img src="images/gallery/pic3.jpg" alt="">	
                                            </div>
                                            <div class="wt-info bg-white text-center bdr-5 bdr-primary">
                                                <div class="wt-info-media-zoom">
                                                    <a href="images/latest-projects/large/pic3.jpg"  class="mfp-link">
                                                        <i class="fa fa-arrows-alt font-24 p-a10"></i>
                                                    </a>
                                                </div>
                                                <div class="wt-info-text p-a30">
                                                    <h3>Body Scrub</h3>
                                                    <p>Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants.</p>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 4 -->
                                <div class="masonry-item cat-filter-4 col-lg-3 col-md-4 col-sm-6">
                                    <div class="flip-container">
                                        <div class="wt-box">
                                            <div class="wt-thum-bx">
                                                <img src="images/gallery/pic4.jpg" alt="">	
                                            </div>
                                            <div class="wt-info bg-white text-center bdr-5 bdr-primary">
                                                <div class="wt-info-media-zoom">
                                                    <a href="images/latest-projects/large/pic4.jpg"  class="mfp-link">
                                                        <i class="fa fa-arrows-alt font-24 p-a10"></i>
                                                    </a>
                                                </div>
                                                <div class="wt-info-text p-a30">
                                                    <h3>Aromatherapy Massage</h3>
                                                    <p>Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants.</p>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 5 -->
                                <div class="masonry-item cat-filter-5 col-lg-3 col-md-4 col-sm-6">
                                    <div class="flip-container">
                                        <div class="wt-box">
                                            <div class="wt-thum-bx">
                                                <img src="images/gallery/pic5.jpg" alt="">	
                                            </div>
                                            <div class="wt-info bg-white text-center bdr-5 bdr-primary">
                                                <div class="wt-info-media-zoom">
                                                    <a href="images/latest-projects/large/pic5.jpg"  class="mfp-link">
                                                        <i class="fa fa-arrows-alt font-24 p-a10"></i>
                                                    </a>
                                                </div>
                                                <div class="wt-info-text p-a30">
                                                    <h3>Aromatherapy Massage</h3>
                                                    <p>Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants.</p>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 6 -->
                                <div class="masonry-item cat-filter-3 col-lg-3 col-md-4 col-sm-6">
                                    <div class="flip-container">
                                        <div class="wt-box">
                                            <div class="wt-thum-bx">
                                                <img src="images/gallery/pic6.jpg" alt="">	
                                            </div>
                                            <div class="wt-info bg-white text-center bdr-5 bdr-primary">
                                                <div class="wt-info-media-zoom">
                                                    <a href="images/latest-projects/large/pic6.jpg"  class="mfp-link">
                                                        <i class="fa fa-arrows-alt font-24 p-a10"></i>
                                                    </a>
                                                </div>
                                                <div class="wt-info-text p-a30">
                                                    <h3>Massages & Body</h3>
                                                    <p>Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants.</p>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 7 -->
                                <div class="masonry-item cat-filter-2 col-lg-3 col-md-4 col-sm-6">
                                    <div class="flip-container">
                                        <div class="wt-box">
                                            <div class="wt-thum-bx">
                                                <img src="images/gallery/pic7.jpg" alt="">	
                                            </div>
                                            <div class="wt-info bg-white text-center bdr-5 bdr-primary">
                                                <div class="wt-info-media-zoom">
                                                    <a href="images/latest-projects/large/pic7.jpg"  class="mfp-link">
                                                        <i class="fa fa-arrows-alt font-24 p-a10"></i>
                                                    </a>
                                                </div>
                                                <div class="wt-info-text p-a30">
                                                    <h3>Beauty Spa</h3>
                                                    <p>Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants.</p>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 8 -->
                                <div class="masonry-item cat-filter-1 col-lg-3 col-md-4 col-sm-6">
                                    <div class="flip-container">
                                        <div class="wt-box">
                                            <div class="wt-thum-bx">
                                                <img src="images/gallery/pic8.jpg" alt="">	
                                            </div>
                                            <div class="wt-info bg-white text-center bdr-5 bdr-primary">
                                                <div class="wt-info-media-zoom">
                                                    <a href="images/latest-projects/large/pic8.jpg"  class="mfp-link">
                                                        <i class="fa fa-arrows-alt font-24 p-a10"></i>
                                                    </a>
                                                </div>
                                                <div class="wt-info-text p-a30">
                                                    <h3>Facial Spa</h3>
                                                    <p>Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants.</p>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            			</div>
                 </div>
                <!-- GALLERY CONTENT END -->
            
            </div>
            <!-- OUR GALLERY CONTENT END  -->
            
            <!-- OUR PRICING TABLE SECTION START  -->
            <div class="section-full bg-gray bg-repeat p-tb80" style="background-image:url(images/background/bg-6.jpg);">
            		<div class="container">
                    
                        <!-- TITLE START-->
                        <div class="section-head text-center">
                            <h1><span class="text-primary">Our</span> Pricing</h1>
                            <div class="wt-separator-outer ">
                                <div class="wt-separator style-icon">
                                    <i class="fa fa-leaf text-black"></i>
                                    <span class="separator-left bg-primary"></span>
                                    <span class="separator-right bg-primary"></span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                        </div>
                        <!-- TITLE END-->
                     
                        <div class="section-content">
                            <div class="pricingtable-row">
                                <div class="row">
                                
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 m-b40">
                                        <div class="pricingtable-wrapper pricing-table-style-4">
                                            <div class="pricingtable-inner bg-white radius">
                                            	
                                                <div class="overlay-wraper pricingtable-inner-overlay bg-no-repeat bg-cover" style="background-image:url(images/our-work/pic1.jpg);"> 
                                                    <div class="pricingtable-title">
                                                        <h3>Basic Plan</h3>
                                                    </div>
                                                    <div class="pricingtable-price">
                                                        <span class="pricingtable-bx">$29</span>
                                                        <span class="pricingtable-type">M</span>
                                                    </div>
                                                    <div class="overlay-main bg-black opacity-07"></div>
                                                </div>
                                                
                                                
                                                <ul class="pricingtable-features">
                                                    <li><i class="fa fa-check"></i>  Phone & Email Support  </li>
                                                    <li><i class="fa fa-times"></i> 3 Social Account </li>
                                                    <li><i class="fa fa-check"></i> Branded Reports  </li>
                                                    <li><i class="fa fa-check"></i> Unlock rewards</li>
                                                    <li><i class="fa fa-times"></i> Support Forum</li>
                                                </ul>
                                                
                                                <div class="pricingtable-footer">
                                                    <a href="javascript:void(0);" class="site-button text-uppercase radius-sm">Purchase</a>
                                                </div>
                                            
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 m-b40">
                                        <div class="pricingtable-wrapper pricing-table-style-4">
                                            <div class="pricingtable-inner bg-white radius">
                                            	
                                                <div class="overlay-wraper pricingtable-inner-overlay bg-no-repeat bg-cover" style="background-image:url(images/our-work/pic2.jpg);"> 
                                                    <div class="pricingtable-title">
                                                        <h3>Pro Plan</h3>
                                                    </div>
                                                    <div class="pricingtable-price">
                                                        <span class="pricingtable-bx">$49</span>
                                                        <span class="pricingtable-type">M</span>
                                                    </div>
                                                    <div class="overlay-main bg-black opacity-07"></div>
                                                </div>
                                                
                                                
                                                <ul class="pricingtable-features">
                                                    <li><i class="fa fa-check"></i>  Phone & Email Support  </li>
                                                    <li><i class="fa fa-check"></i> 3 Social Account </li>
                                                    <li><i class="fa fa-check"></i> Branded Reports  </li>
                                                    <li><i class="fa fa-check"></i> Unlock rewards</li>
                                                    <li><i class="fa fa-check"></i> Support Forum</li>
                                                </ul>
                                                
                                                <div class="pricingtable-footer">
                                                    <a href="javascript:void(0);" class="site-button text-uppercase radius-sm">Purchase</a>
                                                </div>
                                            
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 m-b40">
                                        <div class="pricingtable-wrapper pricing-table-style-4">
                                            <div class="pricingtable-inner bg-white radius">
                                            	
                                                <div class="overlay-wraper pricingtable-inner-overlay bg-no-repeat bg-cover" style="background-image:url(images/our-work/pic3.jpg);"> 
                                                    <div class="pricingtable-title">
                                                        <h3>Premium Plan</h3>
                                                    </div>
                                                    <div class="pricingtable-price">
                                                        <span class="pricingtable-bx">$99</span>
                                                        <span class="pricingtable-type">M</span>
                                                    </div>
                                                    <div class="overlay-main bg-black opacity-07"></div>
                                                </div>
                                                
                                                
                                                <ul class="pricingtable-features">
                                                    <li><i class="fa fa-check"></i>  Phone & Email Support  </li>
                                                    <li><i class="fa fa-check"></i> 3 Social Account </li>
                                                    <li><i class="fa fa-check"></i> Branded Reports  </li>
                                                    <li><i class="fa fa-check"></i> Unlock rewards</li>
                                                    <li><i class="fa fa-check"></i> Support Forum</li>
                                                </ul>
                                                
                                                <div class="pricingtable-footer">
                                                    <a href="javascript:void(0);" class="site-button text-uppercase radius-sm">Purchase</a>
                                                </div>
                                            
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    
                    </div>
            </div>
            <!-- OUR PRICING TABLEL SECTION END  -->  
                       
            <!-- OUR PROJECTS SECTION START  -->
            <div class="section-full bg-white p-tb80">
            	<div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
                        <h1><span class="text-primary">Our</span> Products</h1>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>                            
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    </div>
                    <!-- TITLE END-->
                    <div class="section-content">
                        <div class="row">
                        
                            <!-- COLUMNS 1 -->
                            <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 radius-bx circle-effect-1">
                                        <img src="images/products/pic-8.jpg" class="radius-bx"  alt="">
                                    </div>
                                    <div class="wt-info p-t30 text-center">
                                    	<h2>Massage Soap</h2>
                                        <p class="text-primary">$199.99</p>
                                        <a class="site-button text-uppercase radius-sm font-weight-700 button-lg">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 radius-bx circle-effect-1">
                                        <img src="images/products/pic-2.jpg" class="radius-bx"  alt="">
                                    </div>
                                    <div class="wt-info p-t30 text-center">
                                    	<h2>Flower</h2>
                                        <p class="text-primary">$159.99</p>
                                        <a class="site-button text-uppercase radius-sm font-weight-700 button-lg">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 radius-bx circle-effect-1">
                                        <img src="images/products/pic-9.jpg" class="radius-bx"  alt="">
                                    </div>
                                    <div class="wt-info p-t30 text-center">
                                    	<h2>Massage Oil.</h2>
                                        <p class="text-primary">$109.99</p>
                                        <a class="site-button text-uppercase radius-sm font-weight-700 button-lg">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- OUR PROJECTS SECTION END  -->    
                    
            <!-- OUR TESTIMONIAL SECTION START  -->
            <div class="section-full bg-gray bg-repeat p-t80 p-b120" style="background-image:url(images/background/bg-6.jpg);">
            	<div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
                        <h1><span class="text-primary">What</span> People Say</h1>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>                            
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    </div>
                    <!-- TITLE END-->
                    <div class="section-content">
                        <div class="owl-carousel home-carousel-1">
                            <div class="item">
                                <div class="testimonial-5 bg-white radius-sm">
                                	<div class="testimonial-pic-block radius-bx"> 
                                    	<div class="testimonial-pic radius">
                                        	<img src="images/testimonials/pic1.jpg" width="132" height="132" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-text clearfix">
                                        <div class="testimonial-paragraph">
                                            <span class="fa fa-quote-left text-primary"></span>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                  when an unknown printer took a galley of type and specimen book.
                                            </p>
                                        </div>
                                        <div class="testimonial-detail clearfix">
                                            <strong class="testimonial-name">RINDA SMITH</strong>
                                            <span class="testimonial-position text-primary p-t10">Founder</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class=" testimonial-5 bg-white radius-sm">
                                	<div class="testimonial-pic-block radius-bx"> 
                                    	<div class="testimonial-pic radius">
                                        	<img src="images/testimonials/pic2.jpg" width="132" height="132" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-text clearfix">
                                        <div class="testimonial-paragraph">
                                            <span class="fa fa-quote-left text-primary"></span>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                  when an unknown printer took a galley of type and specimen book.
                                            </p>
                                        </div>
                                        <div class="testimonial-detail clearfix">
                                            <strong class="testimonial-name">Agustina</strong>
                                            <span class="testimonial-position text-primary p-t10">Spa Experts</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-5 bg-white radius-sm">
                                	<div class="testimonial-pic-block radius-bx"> 
                                    	<div class="testimonial-pic radius">
                                        	<img src="images/testimonials/pic1.jpg" width="132" height="132" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-text clearfix">
                                    <div class="testimonial-paragraph">
                                        <span class="fa fa-quote-left text-primary"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                              when an unknown printer took a galley of type and specimen book.
                                        </p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <strong class="testimonial-name">RINDA SMITH</strong>
                                        <span class="testimonial-position text-primary p-t10">Founder</span>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-5 bg-white radius-sm">
                                	<div class="testimonial-pic-block radius-bx"> 
                                    	<div class="testimonial-pic radius">
                                        	<img src="images/testimonials/pic2.jpg" width="132" height="132" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-text clearfix">
                                        <div class="testimonial-paragraph">
                                            <span class="fa fa-quote-left text-primary"></span>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                  when an unknown printer took a galley of type and specimen book.
                                            </p>
                                        </div>
                                        <div class="testimonial-detail clearfix">
                                            <strong class="testimonial-name">RINDA SMITH</strong>
                                            <span class="testimonial-position text-primary p-t10">Founder</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- OUR TESTIMONIAL SECTION END  --> 
            
            <!-- CONTACT US SECTION END  -->         
			<div class="section-full p-tb80">
                <div class="container equal-wraper no-col-gap">
                  	
                        <!-- TITLE START -->
                        <div class="section-head text-center">
                            <h1><span class="text-primary"> Contact</span> Us</h1>
                            <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>                            
                        </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                        <!-- TITLE END -->   
                                     	      
                        <div class="row conntact-home bg-gray">
                        	<div class="col-md-4 col-sm-6 contact-home-left bg-no-repeat bg-primary bg-left-center"  style="background-image:url(images/background/contact-map.png);">
                            	<div class="section-content">
                                	<div class="p-a50">
                                    	
                                        <div class="wt-icon-box-wraper left p-b20 text-white">
                                            <span class="icon-lg">
                                                <span class="flaticon-placeholder"></span>
                                            </span>
                                            <div class="icon-content">
                                                <h4 class="m-b5">Address</h4>
                                                <span class="font-12">295 Madison Ave, 12th Floor New York, NY 10017</span>
                                            </div>
                                        </div>
                                        
                                        <div class="wt-icon-box-wraper left p-b20 text-white">
                                            <span class="icon-lg">
                                                <span class="flaticon-envelope"></span>
                                            </span>
                                            <div class="icon-content">
                                                <h4 class="m-b5">Email</h4>
                                                <span class="font-12">info @example.com </span><br>
                                                <span class="font-12">info2 @example.com </span>
                                            </div>
                                        </div>
                                        
                                        <div class="wt-icon-box-wraper left p-b20 text-white">
                                            <span class="icon-lg">
                                                <span class="flaticon-smartphone"></span>
                                            </span>
                                            <div class="icon-content">
                                                <h4 class="m-b5">Phone</h4>
                                                <span class="font-12">+77 634 545 144 </span><br>
                                                <span class="font-12">+77 634 255 147 </span>
                                            </div>
                                        </div>

                                        <div class="Opening-hours text-white">
                                            <h3 class="wt-title text-uppercase m-t0">Opening Hours</h3>
                                            <ul class="list-unstyled">
                                                <li>Monday - Friday <span class="pull-right">9.00 - 5.00 Pm</span></li>
                                                <li>Saturday <span class="pull-right">9.00 - 2.00 Pm</span></li>
                                                <li>Sunday <span class="pull-right">Closed</span></li>
                                            </ul>
                                        </div>
                                            
                                    </div>
                                </div>                               
                            </div>
                            <div class="col-md-8 col-sm-6">
                            	<div class="section-content bg-gray">
                                      <div class="contact-home-right p-a30">
                                      	<h5 class="text-uppercase font-26 p-b20 font-weight-400">GET IN TOUCH</h5>
                                      	<form  class="cons-contact-form2" method="post" action="form-handler2.php">
                                        	<div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                    <input name="username" type="text" required class="form-control" placeholder="Neme">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                    <input name="email" type="text" class="form-control" required placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                                    <input name="phone" type="text" class="form-control" required placeholder="Phone">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon v-align-t"><i class="fa fa-pencil"></i></span>
                                                    <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="site-button skew-icon-btn radius-sm">
                                              <span class="font-weight-700 inline-block text-uppercase p-lr15">Submit</span> 
                                            </button>
                                        </form>
                                      </div>                             
                                </div>
                            </div>
                        </div>
                    
                </div>
                
            </div> 
            <!-- CONTACT US OFFER SECTION END  --> 
                       
            <!-- OUR CLIENT SLIDER START -->
            <div class="section-full p-t80 p-b50 bg-repeat" style="background-image:url(images/background/bg-6.jpg);">
                <div class="container">
                
                	<!-- TITLE START -->
                    <div class="section-head text-center">
                        <h1><span class="text-primary"> Our</span> Client</h1>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>                            
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <!-- TITLE END -->
                    
                    <!-- IMAGE CAROUSEL START -->
                    <div class="section-content">
                        <div class="owl-carousel client-logo-carousel">
                        
                        	<!-- COLUMNS 1 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="javascript:;"><img src="images/client-logo/logo1.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="javascript:;"><img src="images/client-logo/logo2.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="javascript:;"><img src="images/client-logo/logo3.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="javascript:;"><img src="images/client-logo/logo4.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 5 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="javascript:;"><img src="images/client-logo/logo5.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 6 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="javascript:;"><img src="images/client-logo/logo6.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 7 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="javascript:;"><img src="images/client-logo/logo7.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 8 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="javascript:;"><img src="images/client-logo/logo8.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 9 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="javascript:;"><img src="images/client-logo/logo9.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 10 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="javascript:;"><img src="images/client-logo/logo10.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 11 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="javascript:;"><img src="images/client-logo/logo11.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 12 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="javascript:;"><img src="images/client-logo/logo12.png" alt=""></a>
                                    </div>
                                </div>
                            </div>                        
                        
                        </div>
                    </div>
                    <!-- IMAGE CAROUSEL START -->
                </div>
            </div>
            <!-- OUR CLIENT SLIDER END -->                         
        </div>
        <!-- CONTENT END -->
        
        <!-- FOOTER START -->
        @include('frontend.includes.footer')
        <!-- FOOTER END -->
        <!-- BUTTON TOP START -->
      @include('frontend.components.scroltop')
    </div>
<!-- LOADING AREA START ===== -->
@include('frontend.components.loading')
<!-- LOADING AREA  END ====== -->
<!-- JAVASCRIPT  FILES ========================================= --> 
@include('frontend.includes.script-base')
@yield('script')
@stack('stack-scripts')

</body>

</html>
