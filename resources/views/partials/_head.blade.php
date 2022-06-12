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