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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spa Template | Home Page 1 @yield('title')</title>
    @include('frontend.includes.style-base')
   @yield('css')

</head>

<body>
 
	<div class="page-wraper"> 
       	
        <!-- HEADER START -->
      @include('frontend.includes.header')
        <!-- HEADER END -->
      @yield('header')
        <!-- CONTENT START -->
        <div class="page-content">
        @yield('page-content')
             
        </div>
        @yield('main')
        <!-- FOOTER START -->
     @include('frontend.includes.footer')

        <!-- FOOTER END -->

        
        <!-- BUTTON TOP START -->
       @include('frontend.components.scroltop')
        
    </div>

@include('frontend.components.loading')

@include('frontend.includes.script-base')
@yield('script')
@stack('stack-scripts')
</body>
</html>
