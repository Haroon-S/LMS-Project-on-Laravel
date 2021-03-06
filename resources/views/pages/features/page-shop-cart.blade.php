@extends('layout/main')

@section('title',"Cart & Checkout")

@section('contents')

<section class="grey section">
<div class="container">
<div class="row">
<div id="content" class="col-md-12 col-sm-12 col-xs-12">
<div class="blog-wrapper">
<div class="row second-bread">
<div class="col-md-6 text-left">
<h1>Cart & Checkout</h1>
</div>
<div class="col-md-6 text-right">
<div class="bread">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li class="active">Checkout</li>
</ol>
</div>
</div>
</div>
</div>
<div class="blog-wrapper">
<div class="blog-desc">
<div class="shop-cart">
<table class="table table-bordered">
<thead>
<tr>
<th>
Item Name
</th>
<th>
Item Price
</th>
<th>
Actions
</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<a href="#"><img src="upload/xcourse_01.png.pagespeed.ic.XTOvCuUmZu.png" alt="" class="alignleft img-thumbnail"> 1 Year Membership Plan</a>
</td>
<td>
$40.00
</td>
<td class="remove">
<a href="#">Remove</a>
</td>
</tr>
<tr>
<td>
<a href="#"><img src="upload/xcourse_02.png.pagespeed.ic.PL7Wu2UcSB.png" alt="" class="alignleft img-thumbnail">Web Design Course</a>
</td>
<td>
$40.00
</td>
<td class="remove">
<a href="#">Remove</a>
</td>
</tr>
</tbody>
<tfoot>
<tr>
<th colspan="5" class="text-right">
Total: $80.00
</th>
</tr>
</tfoot>
</table>
<div class="coupon-code-wrapper">
<p>
<a class="btn btn-default btn-block" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
Have a coupon code? Click to enter here
</a>
</p>
<div class="collapse" id="collapseExample">
<div class="well">
<div class="media">
<p>Enter a coupon code if you have one.</p>
<div class="couponform">
<form>
<input type="text" class="form-control" placeholder="Enter coupon code here.">
<button class="btn btn-primary">Apply Code</button>
</form>
</div>
</div>
</div>
</div>
</div>
<hr class="invis">
<div class="payment-methods">
<img src="images/xcredit.jpg.pagespeed.ic.lGluDMrwzI.jpg" alt="">
</div>
<hr class="invis">
<div class="payment-check">
<p><strong>Select Payment Method</strong></p>
<div class="checkbox">
<label>
<input type="checkbox"> Paypal
</label>
&nbsp;&nbsp;
<label>
<input type="checkbox"> Credit Cart
</label>
&nbsp;&nbsp;
<label>
<input type="checkbox"> Test Payment
</label>
</div>
</div>
<hr class="invis">
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
<label>Username</label>
<input type="text" class="form-control" placeholder="Username">
</div>
<div class="form-group">
<label>Password</label>
<input type="password" class="form-control" placeholder="************">
</div>
<div class="form-group">
<label>Re-Enter Password</label>
<input type="password" class="form-control" placeholder="************">
</div>
<div class="well total-price">
<p><strong> Purchase Total:</strong> $80.00 </p>
</div>
<button type="submit" class="btn btn-primary">Pay Now</button>
</form>
</div>
<hr class="invis">
</div>
</div>
</div>
</div>
</div>
</div>
</section>

@endsection