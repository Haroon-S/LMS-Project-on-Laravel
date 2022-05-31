@extends('layouts/main')

@section('title',"Course Quiz")

@section('contents')

<section class="grey page-title">
<div class="container">
<div class="row">
<div class="col-md-6 text-left">
<h1>Course Quiz Page</h1>
</div>
<div class="col-md-6 text-right">
<div class="bread">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li><a href="#">Courses</a></li>
<li class="active">Course Quiz Page</li>
</ol>
</div>
</div>
</div>
</div>
</section>
<section class="white section">
<div class="container">
<div class="row">
<div id="course-content" class="col-md-8">
<div class="course-description">
<small>Quiz for : <span><a href="course-single">Learning Quality Graphic Design & Mockup and Business Card</a></span> </small>
<small>Quiz Status: <span>Not Finished</span> </small>
<h3 class="course-title">Quiz - Question 1</h3>
<div class="quiz-wrapper">
<h4>How to start Photoshop with short keyboard with Mac</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
<div class="row">
<div class="col-md-12">
<div class="panel panel-primary">
<div class="panel-body">
<div class="radio">
<label>
<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio"> Questa è la risposta uno. Fossi in te, la lascerei perdere
</label>
</div>
<div class="radio">
<label>
<input name="optionsRadios" id="optionsRadios2" value="option2" type="radio"> Forse la due si avvicina... ma non ci giurerei
</label>
</div>
<div class="radio">
<label>
<input name="optionsRadios" id="optionsRadios3" value="option3" type="radio"> Opzione tre — da' retta, è questa
</label>
</div>
<div class="radio">
<label>
<input name="optionsRadios" id="optionsRadios4" value="option4" type="radio"> Sulla risposta quattro non ci metterei la mano sul fuoco...
</label>
</div>
</div>
<div class="panel-footer">
<a href="#" class="btn btn-primary " role="button">Confirm</a>
<a href="#" class="btn btn-default" role="button">Clear</a>
</div>
</div>
<hr class="invis">
<p class="lead">40% Completed</p>
<div class="progress">
<div class="progress-bar" role="progressbar" style="width: 40%;">
<span class="sr-only">Complete 40%</span>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<a href="#" class="btn btn-default btn-block">Prev Quiz Question</a>
</div>
<div class="col-md-6">
<a href="#" class="btn btn-default btn-block">Next Quiz Question</a>
</div>
</div>
</div>
</div>
<hr class="invis">
<div class="other-courses">
<img src="images/xothers.png.pagespeed.ic.BLyi2PaMRC.png" alt="" class="">
</div>
</div>
<div id="course-left-sidebar" class="col-md-4">
<div class="course-image-widget">
<img src="upload/xcourse_07.png.pagespeed.ic.KNvblD_Vd1.png" alt="" class="img-responsive">
</div>
<div class="course-meta">
<p class="course-category">Category : <a href="course-list">Graphic Design</a></p>
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
<p class="course-student">Students : 21 Members </p>
<hr>
<p class="course-time">Perriod : 12 Month </p>
<hr>
<p class="course-prize">Prize : <i class="fa fa-trophy"></i> <i class="fa fa-certificate"></i> <i class="fa fa-shield"></i></p>
<hr>
<p class="course-instructors">Instructor : <a href="#" title=""><img src="upload/xstudent_01.png.pagespeed.ic.756JwMcqdq.png" class="img-circle" alt=""> John DOE</a></p>
<hr>
<p class="course-forum">Course Forum : <a href="#" title="">Web Designers</a></p>
</div>
<div class="course-button">
<a href="#" class="btn btn-primary btn-block">TAKE THIS COURSE</a>
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
<h4><a href="course-single">WordPress Blogging, Tumblr and Blogger</a></h4>
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

@endsection