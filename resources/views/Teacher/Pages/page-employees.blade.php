@extends('Teacher/Layout/main')

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
                <!-- begin app-nabar -->
                
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
                                        <h1>Team</h1>
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
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Employees</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->

                        <!--start contact contant-->

                        <div class="row">
                            <div class="col-xl-4 col-sm-6">
                                <div class="card card-statistics employees-contant px-2">
                                    <div class="card-body pb-5 pt-4">
                                        <div class="text-center">
                                            <div class="pt-1 bg-img m-auto"><img src="assets/img/avtar/01.jpg" class="img-fluid" alt="employees-img"></div>
                                            <div class="mt-3 employees-contant-inner">
                                                <h4 class="mb-1">Muhammad Saim</h4>
                                                <h5 class="mb-0 text-muted">CEO</h5>
                                                <div class="mt-3 ">
                                                    <span class="badge badge-pill badge-success-inverse px-3 py-2">Web Developer</span>
                                                    <span class="badge badge-pill badge-primary-inverse px-3 py-2">Mob App Dev</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="card card-statistics employees-contant px-2">
                                    <div class="card-body pb-5 pt-4">
                                        <div class="text-center">
                                            <div class="pt-1 bg-img m-auto"><img src="assets/img/avtar/02.jpg" class="img-fluid" alt="employees-img"></div>
                                            <div class="mt-3 employees-contant-inner">
                                                <h4 class="mb-1">Haroon Shahid</h4>
                                                <h5 class="mb-0 text-muted">CEO</h5>
                                                <div class="mt-3 ">
                                                    <span class="badge badge-pill badge-success-inverse px-3 py-2">Web Developer</span>
                                                    <span class="badge badge-pill badge-primary-inverse px-3 py-2">Photoshop</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="card card-statistics employees-contant px-2">
                                    <div class="card-body pb-5 pt-4">
                                        <div class="text-center">
                                            <div class="pt-1 bg-img m-auto"><img src="assets/img/avtar/03.jpg" class="img-fluid" alt="employees-img"></div>
                                            <div class="mt-3 employees-contant-inner">
                                                <h4 class="mb-1">M Usma Iqbal</h4>
                                                <h5 class="mb-0 text-muted">Developer</h5>
                                                <div class="mt-3 ">
                                                    <span class="badge badge-pill badge-success-inverse px-3 py-2">Laravel</span>
                                                    <span class="badge badge-pill badge-primary-inverse px-3 py-2">SEO Expert</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="card card-statistics employees-contant px-2">
                                    <div class="card-body pb-5 pt-4">
                                        <div class="text-center">
                                            <div class="pt-1 bg-img m-auto"><img src="assets/img/avtar/04.jpg" class="img-fluid" alt="employees-img"></div>
                                            <div class="mt-3 employees-contant-inner">
                                                <h4 class="mb-1">Zanish Fatima</h4>
                                                <h5 class="mb-0 text-muted">UX designer</h5>
                                                <div class="mt-3 ">
                                                    <span class="badge badge-pill badge-success-inverse px-3 py-2">UI/UX</span>
                                                    <span class="badge badge-pill badge-info-inverse px-3 py-2">Photoshop</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--end employees contant-->
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