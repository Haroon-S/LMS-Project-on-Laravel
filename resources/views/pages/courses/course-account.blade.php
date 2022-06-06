@extends('layout/main')

@section('title',"Edit your account")

@section('contents')

<section class="grey page-title">
<div class="container">
<div class="row">
<div class="col-md-6 text-left">
<h1>Achievements</h1>
</div>
<div class="col-md-6 text-right">
<div class="bread">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li><a href="#">Courses</a></li>
<li class="active">Achievements</li>
</ol>
</div>
</div>
</div>
</div>
</section>
<section class="white section">
<div class="container">
<div class="row">
<div id="course-left-sidebar" class="col-md-3">
<div class="course-image-widget">
<img src="upload/xstudent_06.png.pagespeed.ic.M4STWuf1XS.png" alt="" class="img-responsive">
</div>
<div class="course-meta">
<p>AMANDA FOX</p>
<hr>
<p>My Profile <small><a href="course-account">Edit</a></small></p>
<hr>
<p>My Courses <small class="label label-primary">12</small></p>
<hr>
<p>Completed Quiz <small class="label label-primary">40</small></p>
<hr>
<p>Achievements <small class="label label-primary"><a href="course-achievements">5</a></small></p>
<hr>
<p>Messages <small class="label label-primary"><a href="#">0</a></small></p>
<hr>
<p>My Friends <small class="label label-primary"><a href="#">31</a></small></p>
</div>
</div>
<div id="course-content" class="col-md-9">
<div class="course-description">
<h3 class="course-title">Edit Profile</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer <a href="#">took</a>..</p>
<div class="edit-profile">
<form role="form">
<div class="form-group">
<label>First / Last Name</label>
<input type="text" class="form-control" placeholder="Amanda FOX">
</div>
<div class="form-group">
<label>Email Address</label>
<input type="email" class="form-control" placeholder="name@learnplus.com">
</div>
<div class="form-group">
<label>Password</label>
<input type="password" class="form-control" placeholder="************">
</div>
<div class="form-group">
<label>Re-Enter Password</label>
<input type="password" class="form-control" placeholder="************">
</div>
<div class="form-group">
<label>About Your Self</label>
<textarea type="text" class="form-control" placeholder="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.."></textarea>
</div>
<div class="form-group">
<label>Upload Avatar</label>
<input type="file" class="btn btn-primary">
<p class="help-block">Or you can use <a href="#">Gravatar Service</a>.</p>
</div>
<button type="submit" class="btn btn-primary">Submit Changes</button>
</form>
</div>
</div>
<hr class="invis">
<div class="other-courses">
<img src="images/xothers.png.pagespeed.ic.BLyi2PaMRC.png" alt="" class="">
</div>
</div>
</div>
<hr class="invis">
<div id="owl-featured" class="owl-custom">
<div class="owl-featured">
<div class="shop-item-list entry">
<div class="">
<img src="upload/xcourse_01.png.pagespeed.ic.XTOvCuUmZu.png" alt="">
<div class="magnifier">
</div>
</div>
<div class="shop-item-title clearfix">
<h4><a href="course-single">Learn Web Design & Development</a></h4>
<div class="shopmeta">
<span class="pull-left">12 Student</span>
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
<a title="Add to Cart" href="page-shop-cart"><span class="fa fa-cart-arrow-down"></span></a>
<a title="Read More" href="course-single"><span class="fa fa-search"></span></a>
</div>
</div>
</div>
<div class="owl-featured">
<div class="shop-item-list entry">
<div class="">
<img src="upload/xcourse_02.png.pagespeed.ic.PL7Wu2UcSB.png" alt="">
<div class="magnifier">
</div>
</div>
<div class="shop-item-title clearfix">
<h4><a href="course-single">Graphic Design & Logo Mockups Course</a></h4>
<div class="shopmeta">
<span class="pull-left">21 Student</span>
<div class="rating pull-right">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
</div>
</div>
</div>
<div class="visible-buttons">
<a title="Add to Cart" href="page-shop-cart"><span class="fa fa-cart-arrow-down"></span></a>
<a title="Read More" href="course-single"><span class="fa fa-search"></span></a>
</div>
</div>
</div>
<div class="owl-featured">
<div class="shop-item-list entry">
<div class="">
<img src="upload/xcourse_03.png.pagespeed.ic.8e1MyY5M7i.png" alt="">
<div class="magnifier">
</div>
</div>
<div class="shop-item-title clearfix">
<h4><a href="course-single">Social Media Network & Marketing</a></h4>
<div class="shopmeta">
<span class="pull-left">98 Student</span>
<div class="rating pull-right">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
</div>
</div>
</div>
<div class="visible-buttons">
<a title="Add to Cart" href="page-shop-cart"><span class="fa fa-cart-arrow-down"></span></a>
<a title="Read More" href="course-single"><span class="fa fa-search"></span></a>
</div>
</div>
</div>
<div class="owl-featured">
<div class="shop-item-list entry">
<div class="">
<img src="upload/xcourse_04.png.pagespeed.ic.2rIKmUwjA7.png" alt="">
<div class="magnifier">
</div>
</div>
<div class="shop-item-title clearfix">
<h4><a href="course-single.html">WordPress Blogging, Tumblr and Blogger</a></h4>
<div class="shopmeta">
<span class="pull-left">98 Student</span>
<div class="rating pull-right">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
</div>
</div>
</div>
<div class="visible-buttons">
<a title="Add to Cart" href="page-shop-cart"><span class="fa fa-cart-arrow-down"></span></a>
<a title="Read More" href="course-single"><span class="fa fa-search"></span></a>
</div>
</div>
</div>
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
<li>
<a href="single-course" title=""><img class="img-thumbnail" src="upload/xservice_01.png.pagespeed.ic.2iuJZT3CaV.png" alt=""></a>
</li>
<li>
<a href="single-course" title=""><img class="img-thumbnail" src="upload/xservice_02.png.pagespeed.ic.c6RThoxSWC.png" alt=""></a>
</li>
<li>
<a href="single-course" title=""><img class="img-thumbnail" src="upload/xservice_03.png.pagespeed.ic.E_Ew4wn4ZP.png" alt=""></a>
</li>
<li>
<a href="single-course" title=""><img class="img-thumbnail" src="upload/xservice_04.png.pagespeed.ic.NGi9jRXTXk.png" alt=""></a>
</li>
<li>
<a href="single-course" title=""><img class="img-thumbnail" src="upload/xservice_05.png.pagespeed.ic.2iuJZT3CaV.png" alt=""></a>
</li>
<li>
<a href="single-course" title=""><img class="img-thumbnail" src="upload/xservice_06.png.pagespeed.ic.o2Uniwq-y5.png" alt=""></a>
</li>
<li>
<a href="single-course" title=""><img class="img-thumbnail" src="upload/xservice_07.png.pagespeed.ic.H-fRTeeP8u.png" alt=""></a>
</li>
<li>
<a href="single-course" title=""><img class="img-thumbnail" src="upload/xservice_08.png.pagespeed.ic.76ek5JLaEY.png" alt=""></a>
</li>
<li>
<a href="single-course" title=""><img class="img-thumbnail" src="upload/xservice_09.png.pagespeed.ic.FJcG938KC-.png" alt=""></a>
</li>
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

@endsection