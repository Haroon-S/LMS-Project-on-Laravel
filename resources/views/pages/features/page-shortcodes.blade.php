@extends('layout/main')

@section('title',"Shortcodes")

@section('contents')

<section class="grey page-title">
<div class="container">
<div class="row">
<div class="col-md-6 text-left">
<h1>Shortcodes</h1>
</div>
<div class="col-md-6 text-right">
<div class="bread">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li><a href="#">Pages</a></li>
<li class="active">Shortcodes</li>
</ol>
</div>
</div>
</div>
</div>
</section>
<section class="white section">
<div class="container">
<div class="row">
<div class="col-md-6">
<div class="content-widget">
<div class="widget-title">
<h4>Carousel Slider</h4>
<hr>
</div>
<div class="media-element">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<div class="carousel-inner" role="listbox">
<div class="item active">
<img src="upload/xabout_01.jpg.pagespeed.ic.kjNqMAPXcG.jpg" alt="" class="img-responsive">
</div>
<div class="item">
<img src="upload/xabout_02.jpg.pagespeed.ic.D36tpcmMNB.jpg" alt="" class="img-responsive">
</div>
</div>
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
<span class="fa fa-angle-left" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
<span class="fa fa-angle-right" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="content-widget">
<div class="widget-title">
<h4>Tabbed Widget</h4>
<hr>
</div>
<div class="tabbed-widget">
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#home">Menu 1</a></li>
<li><a data-toggle="tab" href="#menu1">Menu 2</a></li>
<li><a data-toggle="tab" href="#menu2">Menu 3</a></li>
<li><a data-toggle="tab" href="#menu3">Menu 4</a></li>
</ul>
<div class="tab-content">
<div id="home" class="tab-pane fade in active">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
</div>
<div id="menu1" class="tab-pane fade">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
</div>
<div id="menu2" class="tab-pane fade">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
</div>
<div id="menu3" class="tab-pane fade">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
</div>
</div>
</div>
</div>
</div>
</div>
<hr class="invis1">
<div class="row">
<div class="col-md-6">
<div class="content-widget">
<div class="widget-title">
<h4>Accordion Widget</h4>
<hr>
</div>
<div class="accordion-widget">
<div class="accordion-toggle-2">
<div class="panel-group" id="accordion">
<div class="panel panel-default">
<div class="panel-heading">
<div class="panel-title">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour">
<h3>Why LearnPLUS ? <i class="indicator fa fa-plus"></i></h3>
</a>
</div>
</div>
<div id="collapseFour" class="panel-collapse collapse">
<div class="panel-body">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.</p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<div class="panel-title">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFive">
<h3>What IS LearnPLUS ? <i class="indicator fa fa-minus"></i></h3>
</a>
</div>
</div>
<div id="collapseFive" class="panel-collapse collapse in">
<div class="panel-body">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu.</p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<div class="panel-title">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseSix">
<h3>What is LearnPLUS Features ? <i class="indicator fa fa-plus"></i></h3>
</a>
</div>
</div>
<div id="collapseSix" class="panel-collapse collapse">
<div class="panel-body">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="content-widget">
<div class="widget-title">
<h4>Progress Bar</h4>
<hr>
</div>
<div class="teacher-skills">
<p>WordPress - 90%</p>
<div class="progress">
<div class="progress-bar" role="progressbar" style="width: 90%;">
<span class="sr-only">WordPress 90%</span>
</div>
</div>
<p>HTML CSS - 95%</p>
<div class="progress">
<div class="progress-bar" role="progressbar" style="width: 95%;">
<span class="sr-only">HTML CSS 95%</span>
</div>
</div>
<p>Photoshop - 70%</p>
<div class="progress">
<div class="progress-bar" role="progressbar" style="width: 70%;">
<span class="sr-only">Photoshop 70%</span>
</div>
</div>
<p>UI Design - 100%</p>
<div class="progress">
<div class="progress-bar" role="progressbar" style="width: 100%;">
<span class="sr-only">UI Design 100%</span>
</div>
</div>
</div>
</div>
</div>
</div>
<hr class="invis1">
<div class="row">
<div class="col-md-6">
<div class="content-widget">
<div class="widget-title">
<h4>Buttons</h4>
<hr>
</div>
<a href="#" class="btn btn-primary btn-block">Button</a>
<a href="#" class="btn btn-default btn-block">Button</a> <br>
<a href="#" class="btn btn-primary btn-lg">Button</a> <a href="#" class="btn btn-default btn-lg">Button</a> <br> <br>
<a href="#" class="btn btn-primary">Button</a> <a href="#" class="btn btn-default">Button</a> <br> <br>
<a href="#" class="btn btn-primary btn-sm">Button</a> <a href="#" class="btn btn-default btn-sm">Button</a><br><br>
<a href="#" class="btn btn-primary btn-xs">Button</a> <a href="#" class="btn btn-default btn-xs">Button</a>
</div>
</div>
<div class="col-md-6">
<div class="content-widget">
<div class="widget-title">
<h4>Alerts</h4>
<hr>
</div>
<div class="alert alert-success" role="alert">
<strong>Well done!</strong> You successfully read this important alert message.
</div>
<div class="alert alert-info" role="alert">
<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
</div>
<div class="alert alert-warning" role="alert">
<strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>
<div class="alert alert-danger" role="alert">
<strong>Oh snap!</strong> Change a few things up and try submitting again.
</div>
</div>
</div>
</div>
</div>
</section>

@endsection