@extends('layout/main')

@section('title',"Course Filterable")

@section('contents')

<section class="grey page-title">
<div class="container">
<div class="row">
<div class="col-md-6 text-left">
<h1>Course List Page</h1>
</div>
<div class="col-md-6 text-right">
<div class="bread">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li><a href="#">Courses</a></li>
<li class="active">Course List Page</li>
</ol>
</div>
</div>
</div>
</div>
</section>
<section class="white section">
<div class="container">
<div id="filters" class="filters-dropdown">
<ul class="option-set" data-option-key="filter">
<li><a href="#filter" class="selected" data-option-value="*"><i class="fa fa-filter"></i> All Courses</a></li>
<li><a href="#filter" data-option-value=".cat1">Design</a></li>
<li><a href="#filter" data-option-value=".cat2">Branding</a></li>
<li><a href="#filter" data-option-value=".cat3">Web </a></li>
</ul>
</div>
<div class="portfolio course-list">
<div class="item cat1">
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
<div class="item cat2">
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
<div class="item cat3">
<div class="shop-item-list entry">
<div class="">
<img src="upload/xcourse_03.png.pagespeed.ic.8e1MyY5M7i.png" alt="">
<div class="magnifier">
</div>
</div>
<div class="shop-item-title clearfix">
<h4><a href="course-single.html">Social Media Network & Marketing</a></h4>
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
<div class="item cat1 cat2">
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
<div class="item cat3">
<div class="shop-item-list entry">
<div class="">
<img src="upload/xcourse_05.png.pagespeed.ic.mrKpzOf8LX.png" alt="">
<div class="magnifier">
</div>
</div>
<div class="shop-item-title clearfix">
<h4><a href="course-single">Learning Viral Marketing Strategy</a></h4>
<div class="shopmeta">
<span class="pull-left">221 Student</span>
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
<div class="item cat1">
<div class="shop-item-list entry">
<div class="">
<img src="upload/xcourse_06.png.pagespeed.ic.2iR1Lq1HrU.png" alt="">
<div class="magnifier">
</div>
</div>
<div class="shop-item-title clearfix">
<h4><a href="course-single.html">Learning Custom Product Design</a></h4>
<div class="shopmeta">
<span class="pull-left">12 Student</span>
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
<div class="item cat3">
<div class="shop-item-list entry">
<div class="">
<img src="upload/xcourse_07.png.pagespeed.ic.KNvblD_Vd1.png" alt="">
<div class="magnifier">
</div>
</div>
<div class="shop-item-title clearfix">
<h4><a href="course-single.html">Skeching Custom Item Prize Design</a></h4>
<div class="shopmeta">
<span class="pull-left">44 Student</span>
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
<div class="item cat2">
<div class="shop-item-list entry">
<div class="">
<img src="upload/xcourse_08.png.pagespeed.ic.uuUPd8pkHT.png" alt="">
<div class="magnifier">
</div>
</div>
<div class="shop-item-title clearfix">
<h4><a href="course-single.html">Learning Website Optimization with Bootstrap</a></h4>
<div class="shopmeta">
<span class="pull-left">33 Student</span>
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
<div class="item cat1">
<div class="shop-item-list entry">
<div class="">
<img src="upload/xcourse_09.png.pagespeed.ic.onaUPvr7s-.png" alt="">
<div class="magnifier">
</div>
</div>
<div class="shop-item-title clearfix">
<h4><a href="course-single.html">Search Engine Optimization (SEO)</a></h4>
<div class="shopmeta">
<span class="pull-left">74 Student</span>
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
<div class="item cat1">
<div class="shop-item-list entry">
<div class="">
<img src="upload/xcourse_10.png.pagespeed.ic.Vk_tFeUOXa.png" alt="">
<div class="magnifier">
</div>
</div>
<div class="shop-item-title clearfix">
<h4><a href="course-single.html">Digital Marketing Strategy Video Tuts</a></h4>
<div class="shopmeta">
<span class="pull-left">90 Student</span>
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
<div class="item cat3">
<div class="shop-item-list entry">
<div class="">
<img src="upload/xcourse_11.png.pagespeed.ic._TBnV-TA7x.png" alt="">
<div class="magnifier">
</div>
</div>
<div class="shop-item-title clearfix">
<h4><a href="course-single.html">Funding System Strategy Video Tuts</a></h4>
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
<div class="item cat2">
<div class="shop-item-list entry">
<div class="">
<img src="upload/xcourse_12.png.pagespeed.ic.25NTcM097E.png" alt="">
<div class="magnifier">
</div>
</div>
<div class="shop-item-title clearfix">
<h4><a href="course-single.html">Email Marketing Strategy with MailChimp</a></h4>
<div class="shopmeta">
<span class="pull-left">41 Student</span>
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
</div>
</div>
</section>
<section class="grey section">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="section-title text-center">
<h4>Happy Students</h4>
<p>What Our Students Say About LearnPLUS</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-12">
<div class="testimonial">
<img class="alignleft img-circle" src="upload/xstudent_01.png.pagespeed.ic.756JwMcqdq.png" alt="">
<p>Lorem Ipsum is simply dummy text of the printing and industry. </p>
<div class="testimonial-meta">
<h4>John DOE <small><a href="#">.com</a></small></h4>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-12">
<div class="testimonial">
<img class="alignleft img-circle" src="upload/xstudent_02.png.pagespeed.ic.y-PM-y4pVj.png" alt="">
<p>Lorem Ipsum is simply dummy text of the most popular items.</p>
<div class="testimonial-meta">
<h4>Jenny Anderson <small><a href="#">photodune.com</a></small></h4>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-12">
<div class="testimonial">
<img class="alignleft img-circle" src="upload/xstudent_03.png.pagespeed.ic.uCQY3WNMCJ.png" alt="">
<p>Lorem Ipsum is simply dummy text of the printing.</p>
<div class="testimonial-meta">
<h4>Mark BOBS <small><a href="#">tutsplus.com</a></small></h4>
</div>
</div>
</div>
</div>
<div class="button-wrapper text-center">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since<br> the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
<a href="#" class="btn btn-default border-radius"><i class="fa fa-sign-in"></i> Join Us Today</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="#" class="btn btn-primary"><i class="fa fa-download"></i> Download PDF</a>
</div>
</div>
</section>

@endsection