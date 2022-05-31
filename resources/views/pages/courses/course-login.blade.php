@extends('layouts/main')

@section('title',"Course Login")

@section('contents')

<body class="login">
<div id="loader">
<div class="loader-container">
<img src="images/site.gif" alt="" class="loader-site">
</div>
</div>
<div id="wrapper">
<div class="container">
<div class="row login-wrapper">
<div class="col-md-6 col-md-offset-3">
<div class="logo logo-center">
<a href="index-2.html"><img src="images/xlogin-logo.png.pagespeed.ic.rk5LaeLYSz.png" alt=""></a>
</div>
<div class="panel panel-login">
<div class="panel-heading">
<div class="row">
<div class="col-xs-6">
<a href="#" class="active" id="login-form-link">Login</a>
</div>
<div class="col-xs-6">
<a href="#" id="register-form-link">Register</a>
</div>
</div>
<hr>
</div>
<div class="panel-body">
<div class="row">
<div class="col-lg-12">
<form id="login-form" action="#" method="post" role="form" style="display: block;">
<div class="form-group">
<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
</div>
<div class="form-group">
<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
</div>
<div class="form-group text-center">
<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
<label for="remember"> &nbsp; Remember Me</label>
</div>
<div class="form-group">
<div class="row">
<div class="col-sm-12">
<button type="submit" class="form-control btn btn-default">Login Account</button>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-lg-12">
<div class="text-center">
<a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
</div>
</div>
</div>
</div>
</form>
<form id="register-form" action="http://phpoll.com/register/process" method="post" role="form" style="display: none;">
<div class="form-group">
<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
</div>
<div class="form-group">
<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
</div>
<div class="form-group">
<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
</div>
<div class="form-group">
<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
</div>
<div class="form-group">
<div class="row">
<div class="col-sm-12">
<button type="submit" class="form-control btn btn-default btn-block">Register an Account</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>

@endsection