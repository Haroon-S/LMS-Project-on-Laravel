@extends('Admin/Layout/main')

@section('title','Home')

@section('contents')
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="assets/img/loader/loader.svg" alt="loader">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->
            <!-- begin app-header -->
            
            <!-- end app-header -->
            <!-- begin app-container -->
            <div class="app-container">
                
                <!-- end app-navbar -->
                <!-- begin app-main -->
                <div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    <div class="container-fluid">
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                    <div class="page-title mb-2 mb-sm-0">
                                        <h1>Account Settings</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    Pages
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Account Settings</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->

                        <!--mail-Compose-contant-start-->
                        <div class="row account-contant">
                            <div class="col-12">
                                <div class="card card-statistics">
                                    <div class="card-body p-0">
                                        <div class="row no-gutters">
                                            <div class="col-xl-3 pb-xl-0 pb-5 border-right">
                                                <div class="page-account-profil pt-5">
                                                    <div class="profile-img text-center rounded-circle">
                                                        <div class="pt-5">
                                                            <div class="bg-img m-auto">
                                                                <img src="Pictures/{{ Auth::user()->picture }}" class="img-fluid" alt="users-avatar" width="100px" height="100px">
                                                            </div>
                                                            <div class="profile pt-4">
                                                                <h4 class="mb-1">{{ Auth::user()->name }}</h4>
                                                                <p>Admin</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="py-5 profile-counter">
                                                        <ul class="nav justify-content-center text-center">
                                                            <li class="nav-item border-right px-3">
                                                                <div>
                                                                    <h4 class="mb-0">90</h4>
                                                                    <p>Post</p>
                                                                </div>
                                                            </li>

                                                            <li class="nav-item border-right px-3">
                                                                <div>
                                                                    <h4 class="mb-0">1.5K</h4>
                                                                    <p>Messages</p>
                                                                </div>
                                                            </li>

                                                            <li class="nav-item px-3">
                                                                <div>
                                                                    <h4 class="mb-0">4.4K</h4>
                                                                    <p>Members</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="profile-btn text-center">
                                                        <div><button class="btn btn-light text-primary mb-2">Upload New Avatar</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-md-6 col-12 border-t border-right">
                                                <div class="page-account-form">
                                                    <div class="form-titel border-bottom p-3">
                                                        <h5 class="mb-0 py-2">Edit Your Personal Settings</h5>
                                                    </div>
                                                    <div class="p-4">
                                                        <form action="../UpdateProfile/{{ Auth::user()->id }}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-row">
                                                                <div class="form-group col-md-12">
                                                                    <label for="name1">Full Name</label>
                                                                    <input type="text" class="form-control" id="name1" value="{{ Auth::user()->name }}" name="name" required>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="title1">Title</label>
                                                                    <input type="text" class="form-control" id="title1" value="Admin" readonly>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="email1">Email</label>
                                                                    <input type="email" class="form-control" id="email1" value="{{ Auth::user()->email }}" name="email" required>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="email1">Change Picture</label>
                                                                    <input type="file" class="form-control" id="picture" accept="image/x-png,image/gif,image/jpeg" name="picture">
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Update Information</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6 border-t col-12">
                                                <div class="page-account-form">
                                                    <div class="form-titel border-bottom p-3">
                                                        <h5 class="mb-0 py-2">Change Password</h5>
                                                    </div>
                                                    <div class="p-4">
                                                        <form action="../UpdatePassword/{{ Auth::user()->id }}" method="post">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="fb">Password:</label>
                                                                <input type="password" class="form-control" id="password" name="password" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tr">Confirm Password:</label>
                                                                <input type="password" class="form-control" id="cPassword" name="cPassword" required>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Save & Update</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--mail-Compose-contant-end-->
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
            <!-- begin footer -->
            
            <!-- end footer -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->
@endsection