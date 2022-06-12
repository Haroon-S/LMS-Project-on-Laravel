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
<li><a  href="home">Home</a>
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
<li><a href="about">About</a></li>
<li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Courses <b class="fa fa-angle-down"></b></a>
<ul class="dropdown-menu">
<li>
<div class="ttmenu-content">
<div class="row">
<div class="col-md-6">
<div class="box">
<ul>
<li><a href="course-list">Courses List</a></li>
<li><a href="course-grid">Courses Grid</a></li>
<li><a href="course-filterable">Courses Filterable</a></li>
<li><a href="course-single">Single Course</a></li>
<li><a href="course-quiz">Take a Quiz</a></li>
<li><a href="course-achievements">Achievements</a></li>
</ul>
</div>
</div>
<div class="col-md-6">
<div class="box">
<ul>
<li><a href="course-instructors">Course Instructors</a></li>
<li><a href="forums">Community Forums</a></li>
<li><a href="course-login">Login & Register</a></li>
<li><a href="course-account">Edit Your Account</a></li>
<li><a href="course-testimonials">Happy Students</a></li>
<li><a href="course-faqs">Friendly Asked Questions</a></li>
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