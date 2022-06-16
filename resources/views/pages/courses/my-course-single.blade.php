<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{$course->course_title}}
    </title>
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="/images/apple-touch-icon.png"/>
    <link rel="apple-touch-icon" sizes="57x57" href="/images/apple-touch-icon-57x57.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="/images/xapple-touch-icon-72x72.png.pagespeed.ic.lf5d8kCpOf.png"/>
    <link rel="apple-touch-icon" sizes="76x76" href="/images/xapple-touch-icon-76x76.png.pagespeed.ic.ATZZpSeito.png"/>
    <link rel="apple-touch-icon" sizes="114x114" href="/images/xapple-touch-icon-114x114.png.pagespeed.ic.Fi5O5s2tzL.png"/>
    <link rel="apple-touch-icon" sizes="120x120" href="/images/xapple-touch-icon-120x120.png.pagespeed.ic.uPQH0sygdV.png"/>
    <link rel="apple-touch-icon" sizes="144x144" href="/images/xapple-touch-icon-144x144.png.pagespeed.ic.yZ9-_sm5OF.png"/>
    <link rel="apple-touch-icon" sizes="152x152" href="/images/xapple-touch-icon-152x152.png.pagespeed.ic.gThaVrKtXF.png"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/images/xapple-touch-icon-180x180.png.pagespeed.ic.Q8Pmsj5fQM.png"/>
    <link rel="stylesheet" type="text/css" href="/rs-plugin/css/A.settings.css.pagespeed.cf.xeOyGChsgq.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="/A.fonts%2c%2c_font-awesome-4.3.0%2c%2c_css%2c%2c_font-awesome.min.css%2bcss%2c%2c_bootstrap.css%2bcss%2c%2c_animate.css%2cMcc.kSNwpaaMDX.css.pagespeed.cf.w2G3xGgFf0.css"/>
    <link rel="stylesheet" type="text/css" href="/css/A.menu.css.pagespeed.cf.0_hLwXzYkZ.css">
    <link rel="stylesheet" type="text/css" href="/css/A.carousel.css%2bbxslider.css%2cMcc.jgeTii-u52.css.pagespeed.cf.STKSIMl7GF.css"/>
    <link rel="stylesheet" type="text/css" href="/css/style2.css"/>
    <link rel="stylesheet" type="text/css" href="/A.style.css%2bcss%2c%2c_custom.css%2cMcc.HvWh1qoob-.css.pagespeed.cf.pWH5huNcWh.css"/>



    </head>
<body>
<div id="loader">
<div class="loader-container">
<img src="images/site.gif" alt="" class="loader-site">
</div>
</div>
<div id="wrapper">
<div class="topbar">
<div class="container">
<div class="row">
<div class="col-md-6 text-left">
<p><i class="fa fa-graduation-cap"></i> Best learning management template for ever.</p>
</div>
<div class="col-md-6 text-right">
<ul class="list-inline">
<li>
<a class="social" href="#"><i class="fa fa-facebook"></i></a>
<a class="social" href="#"><i class="fa fa-twitter"></i></a>
<a class="social" href="#"><i class="fa fa-google-plus"></i></a>
<a class="social" href="#"><i class="fa fa-linkedin"></i></a>
</li>
<li >
<!-- <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-lock"></i> Login </a> -->

@if (Route::has('login'))
                <!-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> -->
                    @auth
                    <span style="font-weight:700; color: white;" >{{ Auth::user()->name }}</span> 
                    @else
                    <i class="fa fa-lock "></i>
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        <!-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif -->
                    @endauth
                <!-- </div> -->
            @endif
</li>
</ul>
</div>
</div>
</div>
</div>


<header class="header">
<div class="container">
<div class="hovermenu ttmenu">
<div class="navbar navbar-default" role="navigation">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="fa fa-bars"></span>
</button>
<div class="logo">
<a class="navbar-brand" href="home"><img src="images/xlogo.png.pagespeed.ic.vap6Ukaf0i.png" alt=""></a>
</div>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav">
<li><a  href="/home">Home</a>
<ul class="dropdown-menu menu-bg wbg">
<li>
<div class="ttmenu-content">
<div class="row">
<div class="col-md-6">
<div class="box">
<!-- <ul>
<li><a href="index1.html">Home Version 1</a></li>
<li><a href="index2.html">Home Version 2</a></li>
<li><a href="index3.html">Home Version 3</a></li>
<li><a href="index4.html">Home Version 4</a></li>
<li><a href="index5.html">Home Version 5</a></li>
<li><a href="index6.html">Home Version 6</a></li>
<li><a href="index7.html">Home Version 7</a></li>
</ul> -->
</div>
</div>
<div class="col-md-6">
<div class="box">
<!-- <ul>
<li><a href="index8.html">Home Version 8</a></li>
<li><a href="index9.html">Home Version 9</a></li>
<li><a href="index10.html">Home Version 10</a></li>
</ul> -->
</div>
</div>
</div>
</div>
</li>
</ul>
</li>
<li><a href="/about">About</a></li>
<li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Courses <b class="fa fa-angle-down"></b></a>
<ul class="dropdown-menu">
<li>
<div class="ttmenu-content">
<div class="row">
<div class="col-md-6">
<div class="box">
<ul>
<li><a href="/course-list">Courses List</a></li>
<li><a href="/course-grid">Courses Grid</a></li>
<li><a href="/course-filterable">Courses Filterable</a></li>
<li><a href="/course-single">Single Course</a></li>
<li><a href="/course-quiz">Take a Quiz</a></li>
<li><a href="/course-achievements">Achievements</a></li>
</ul>
</div>
</div>
<div class="col-md-6">
<div class="box">
<ul>
<li><a href="/course-instructors">Course Instructors</a></li>
<li><a href="/forums">Community Forums</a></li>
<li><a href="/course-login">Login & Register</a></li>
<li><a href="/course-account">Edit Your Account</a></li>
<li><a href="/course-testimonials">Happy Students</a></li>
<li><a href="/course-faqs">Friendly Asked Questions</a></li>
</ul>
</div>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-3 col-sm-6 nopadding">
<img class="img-thumbnail" src="upload/xservice_01.png.pagespeed.ic.2iuJZT3CaV.png" alt="">
</div>
<div class="col-md-3 col-sm-6 nopadding">
<img class="img-thumbnail" src="upload/xservice_02.png.pagespeed.ic.c6RThoxSWC.png" alt="">
</div>
<div class="col-md-3 col-sm-6 nopadding">
<img class="img-thumbnail" src="upload/xservice_03.png.pagespeed.ic.E_Ew4wn4ZP.png" alt="">
</div>
<div class="col-md-3 col-sm-6 nopadding">
<img class="img-thumbnail" src="upload/xservice_04.png.pagespeed.ic.NGi9jRXTXk.png" alt="">
</div>
</div>
</div>
</li>
</ul>
</li>
<li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Features <b class="fa fa-angle-down"></b></a>
<ul class="dropdown-menu">
<li>
<div class="ttmenu-content">
<div class="row">
<div class="col-md-6">
<div class="box">
<ul>
<li><a href="page-services">Our Services</a></li>
<li><a href="page-contact">Contact Us</a></li>
<li><a href="page-pricing">Pricing Tables</a></li>
<li><a href="page-shortcodes">Shortcodes</a></li>
<li><a href="page-typography">Typography</a></li>
<li><a href="page-fullwidth">Page Fullwidth</a></li>
<li><a href="page-sidebar">Page Sidebar</a></li>
</ul>
</div>
</div>
<div class="col-md-6">
<div class="box">
<ul>
<li><a href="page-shop">Shop Layout</a></li>
<li><a href="page-shop-single">Shop Single</a></li>
<li><a href="page-shop-single-alt">Shop Single Alt</a></li>
<li><a href="page-shop-cart">Shopping Cart</a></li>
<li><a href="blog">Blog & News</a></li>
<li><a href="single">Single Blog</a></li>
<li><a href="page-not-found">404 - Not Found</a></li>
</ul>
</div>
</div>
</div>
</div>
</li>
</ul>
</li>
<li><a href="forums">Community</a></li>
<li><a href="blog">Blog</a></li>
<li><a href="contact">Contact</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<!-- <li><a class="btn btn-primary" href="course-login"><i class="fa fa-sign-in"></i> Register Now</a></li> -->
<li> <button class="btn btn-primary">  
@if (Route::has('login'))
                    @auth
                   
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                <span style="color: white;">{{ __('Log Out') }}</span>
                            </x-dropdown-link>
                        </form>
                    @else
                        <!-- <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a> -->

                        @if (Route::has('register'))
                        <i class="fa fa-sign-in"></i> 
                            <a style="color: white;" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register Now</a>
                        @endif
                    @endauth
            @endif
            </button>
</li>
</ul>
</div>
</div>
</div>
</div>
</header>







<section class="grey page-title">
<div class="container">
<div class="row">
<div class="col-md-6 text-left">
<h1>Single Course Page</h1>
</div>
<div class="col-md-6 text-right">
<div class="bread">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li><a href="#">Courses</a></li>
<li class="active">Single Course Page</li>
</ol>
</div>
</div>
</div>
</div>
</section>
<section class="white section">
<div class="container">
<div class="row">
<div id="course-left-sidebar" class="col-md-4">
<div class="course-image-widget">
<img src="/Thumbnails/{{$course->thumbnail}}" alt="" class="img-responsive">
</div>
<div class="course-meta">
<p class="course-category">Category : <a href="course-list">{{$course->course_category}}</a></p>
<hr>
<div class="rating">
<p>Reviews : &nbsp;
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
<a title="" href="#reviews">&nbsp; (3)</a></p>
</div>
<hr>
<p class="course-student">Students : {{$course->number_of_students}} Members </p>
<hr>
<p class="course-time">Perriod : 12 Month </p>
<hr>
<p class="course-prize">Prize : <i class="fa fa-trophy"></i> <i class="fa fa-certificate"></i> <i class="fa fa-shield"></i></p>
<hr>
<p class="course-instructors">Instructor : <a href="#" title=""> {{$course->teacher_name}}</a></p>
<hr>
<p class="course-forum">Course Forum : <a href="#" title="">Web Designers</a></p>
</div>



<div id="reviews" class="feedbacks">
<p>
<a class="btn btn-primary btn-block" role="button" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
Give Reviews
</a>
</p>
<div class="collapse" id="collapseExample1">
<!-- <div class="well bg-dark"> -->
<!-- <div class="media"> -->
<div class="">
                                        <form style="border: 1px solid rgba(16, 46, 46, 1);
                                         background-color: rgba(16, 46, 46, 0.973);
                                         border-radius: 5px;
                                         padding: 20px;" id="algin-form" action="/course-review/{{$course->id}}" method="post" enctype="multipart/form-data">
                                        @csrf   
                                        <div class="form-group">
                                                <h4 style="color: rgb(212, 208, 208);">Leave a Review</h4>
                                                <label for="message">Message</label>
                                                <textarea name="review_on_course" id="" msg cols="30" rows="5" class="form-control" style="background-color: black;"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" id="post" class="btn">Post Review</button>
                                            </div>
                                        </form>
                                    </div>
<!-- </div> -->



<!-- </div> -->
</div>


</div>
</div>


<div id="course-content" class="col-md-8">
<div class="course-description">
<small>Course Status: <span>In Progress</span> </small>
<small>Course Price: <span>$21.00</span> </small>
<h3 class="course-title">Learning Quality Graphic Design & Mockup and Business Card</h3>
<p>{{$course->course_description}}</p>
</div>
<div class="course-table">
<h4>Course Lessons</h4>
<table class="table">
<thead>
<tr>
<th>Type</th>
<th>Lesson Title</th>
<th>Time</th>
<th>Status</th>
</tr>
</thead>
<tbody>

@forelse ($videos as $key=>$video)
<tr>
<td><i class="fa fa-play-circle"></i></td>
<td><a href="/course-video/{{$video->id}}">{{$video->video_title}}</a></td>
<td>12 Min</td>
<td><i class="fa fa-check"></i></td>
</tr>
@empty
<p>No Videos Found</p>
@endforelse



<!-- 
<tr>
<td><i class="fa fa-play-circle"></i></td>
<td>Lesson One - What is Photoshop</td>
<td>20 Min</td>
<td><i class="fa fa-close"></i></td>
</tr>
<tr>
<td><i class="fa fa-play-circle"></i></td>
<td>Lesson Two - How to Use Tools</td>
<td>41 Min</td>
<td><i class="fa fa-close"></i></td>
</tr>
<tr>
<td><i class="fa fa-play-circle"></i></td>
<td>Lesson Three - Creating First Homepage</td>
<td>15 Min</td>
<td><i class="fa fa-close"></i></td>
</tr>
<tr>
<td><i class="fa fa-play-circle"></i></td>
<td>Lesson Four - Understanding Colors</td>
<td>29 Min</td>
<td><i class="fa fa-close"></i></td>
</tr>
<tr>
<td><i class="fa fa-play-circle"></i></td>
<td>Lesson Five - International Sizes</td>
<td>31 Min</td>
<td><i class="fa fa-close"></i></td>
</tr>
<tr>
<td><i class="fa fa-question-circle"></i></td>
<td><a href="course-quiz">Quiz Time - Your First Quiz</a></td>
<td>31 Min</td>
<td><i class="fa fa-close"></i></td>
</tr> -->




</tbody>
</table>
</div>
<hr class="invis">
<div id="reviews" class="feedbacks">
<p>
<a class="btn btn-default btn-block" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
What our customers said? ({{$reviews_count}} Reviews)
</a>
</p>
<div class="collapse" id="collapseExample">
<div class="well">

@forelse ($reviews as $key=>$review)
<div class="media">
<div class="media-left">
<a href="#">
<img class="media-object" src="/Pictures/{{$review->student_pic}}" alt="Generic placeholder image">
</a>
</div>
<div class="media-body">
<h4 class="media-heading">{{$review->student_name}}</h4>
<p>{{$review->review_on_course}}</p>
</div>
</div>
@empty
<p>No Reviews Found</p>
@endforelse
<!-- <div class="media">
<div class="media-left">
<a href="#">
<img class="media-object" src="upload/xstudent_02.png.pagespeed.ic.y-PM-y4pVj.png" alt="Generic placeholder image">
</a>
</div>
<div class="media-body">
<h4 class="media-heading">Amanda FOXOE</h4>
<div class="rating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
</div>
<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
</div>
</div>
<div class="media">
<div class="media-left">
<a href="#">
<img class="media-object" src="upload/xstudent_03.png.pagespeed.ic.uCQY3WNMCJ.png" alt="Generic placeholder image">
</a>
</div>
<div class="media-body">
<h4 class="media-heading">Mark BOBS</h4>
<div class="rating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
</div>
</div> -->
</div>
</div>
</div>
<div class="other-courses">
<img src="/images/xothers.png.pagespeed.ic.BLyi2PaMRC.png" alt="" class="">
</div>
</div>
</div>
<hr class="invis">




<div id="owl-featured" class="owl-custom">


@forelse ($courses as $key=>$course)
<div class="owl-featured">
<div class="shop-item-list entry">
<div class="">
<img src="/Thumbnails/{{$course->thumbnail}}" alt="">
<div class="magnifier">
</div>
</div>
<div class="shop-item-title clearfix">
<h4><a href="/course-single/{{$course->id}}">{{$course->course_title}}</a></h4>
<div class="shopmeta">
<span class="pull-left">{{$course->number_of_students}} Student</span>
<div class="rating pull-right">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
</div>
</div>
<div class="visible-buttons">
<a title="Add to Cart" href="page-shop-cart/{{$course->id}}"><span class="fa fa-cart-arrow-down"></span></a>
<a title="Read More" href="course-single/{{$course->id}}"><span class="fa fa-search"></span></a>
</div>
</div>
</div>
@empty

@endforelse







</div>
</div>
</section>


<footer class="dark footer section">
<div class="container">
<div class="row">
<div class="col-md-3 col-md-6 col-xs-12">
<div class="widget">
<div class="widget-title">
<h4>About LearnPLUS</h4>
<hr>
</div>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took...</p>
<a href="#" class="btn btn-default">Read More</a>
</div>
</div>
<div class="col-md-3 col-md-6 col-xs-12">
<div class="widget">
<div class="widget-title">
<h4>Recent Tweets</h4>
<hr>
</div>
<div class="twitter-widget">
<ul class="latest-tweets">
<li>
<p><a href="#" title="">@Mark</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.</p>
<span>2 hours ago</span>
</li>
<li>
<p><a href="#" title=""></a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.</p>
<span>2 hours ago</span>
</li>
</ul>
</div>
</div>
</div>
<div class="col-md-3 col-md-6 col-xs-12">
<div class="widget">
<div class="widget-title">
<h4>Popular Courses</h4>
<hr>
</div>


<ul class="popular-courses">

@forelse ($courses as $key=>$course)
<li>
<a href="course-single/{{$course->id}}" title=""><img class="img-thumbnail" src="/Thumbnails/{{$course->thumbnail}}" alt=""></a>
</li>
@empty

@endforelse



</ul>



</div>
</div>
<div class="col-md-3 col-md-6 col-xs-12">
<div class="widget">
<div class="widget-title">
<h4>Contact Details</h4>
<hr>
</div>
<ul class="contact-details">
<li><i class="fa fa-link"></i> <a href="#">www.yoursite.com</a></li>
<li><i class="fa fa-envelope"></i> <a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
<li><i class="fa fa-phone"></i> +90 123 45 67</li>
<li><i class="fa fa-fax"></i> +90 123 45 68</li>
<li><i class="fa fa-home"></i>  INC 22 Elizabeth Str. Melbourne. Victoria 8777.</li>
</ul>
</div>
</div>
</div>
</div>
</footer>



<script src="/js/jquery.min.js.pagespeed.jm.iDyG3vc4gw.js"></script>
    <script src="/js/bootstrap.min.js%2bretina.js%2bwow.js.pagespeed.jc.pMrMbVAe_E.js"></script><script>eval(mod_pagespeed_gFRwwUbyVc);</script>
    <script>eval(mod_pagespeed_rQwXk4AOUN);</script>
    <script>eval(mod_pagespeed_U0OPgGhapl);</script>
    <script src="/js/carousel.js%2bcustom.js.pagespeed.jc.nVhk-UfDsv.js"></script><script>eval(mod_pagespeed_6Ja02QZq$f);</script>
    <script>eval(mod_pagespeed_KxQMf5X6rF);</script>
    <script src="/rs-plugin/js/jquery.themepunch.tools.min.js.pagespeed.jm.0PLSBOOLZa.js"></script>
    <script src="/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script>jQuery(document).ready(function(){jQuery('.tp-banner').show().revolution({dottedOverlay:"none",delay:16000,startwidth:1170,startheight:620,hideThumbs:200,thumbWidth:100,thumbHeight:50,thumbAmount:5,navigationType:"none",navigationArrows:"solo",navigationStyle:"preview3",touchenabled:"on",onHoverStop:"on",swipe_velocity:0.7,swipe_min_touches:1,swipe_max_touches:1,drag_block_vertical:false,parallax:"mouse",parallaxBgFreeze:"on",parallaxLevels:[10,7,4,3,2,5,4,3,2,1],parallaxDisableOnMobile:"off",keyboardNavigation:"off",navigationHAlign:"center",navigationVAlign:"bottom",navigationHOffset:0,navigationVOffset:20,soloArrowLeftHalign:"left",soloArrowLeftValign:"center",soloArrowLeftHOffset:20,soloArrowLeftVOffset:0,soloArrowRightHalign:"right",soloArrowRightValign:"center",soloArrowRightHOffset:20,soloArrowRightVOffset:0,shadow:0,fullWidth:"on",fullScreen:"off",spinner:"spinner4",stopLoop:"off",stopAfterLoops:-1,stopAtSlide:-1,shuffle:"off",autoHeight:"off",forceFullWidth:"off",hideThumbsOnMobile:"off",hideNavDelayOnMobile:1500,hideBulletsOnMobile:"off",hideArrowsOnMobile:"off",hideThumbsUnderResolution:0,hideSliderAtLimit:0,hideCaptionAtLimit:0,hideAllCaptionAtLilmit:0,startWithSlide:0,fullScreenOffsetContainer:""});});</script>
    <script src="/js/bxslider.js.pagespeed.jm.X-sF7YFq4Y.js"></script>
    <script type="/text/javascript">(function($){"use strict";$('.bxslider').bxSlider({mode:'vertical',minSlides:1,maxSlides:1,slideMargin:0,pager:false,nextText:'<i class="fa fa-arrow-down"></i>',prevText:'<i class="fa fa-arrow-up"></i>',speed:1000,auto:true});})(jQuery);</script>
    
</body>
</html>