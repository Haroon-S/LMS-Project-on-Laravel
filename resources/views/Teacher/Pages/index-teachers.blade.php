@extends('Teacher/Layout/main')

@section('title','Teachers List')

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
                                        <h1>Teachers</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="Teacher-Home"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    Pages
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Teachers</li>
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
                        @forelse($users as $key=>$user)
                            <div class="col-xxl-3 col-xl-4  col-sm-6">
                                <div class="card card-statistics contact-contant">
                                    <div class="card-body py-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-img">
                                                <img src="Pictures\{{$user->picture}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="ml-3">
                                                <h4 class="mb-0">{{$user->name}}</h4>
                                                <p><span class="badge badge-warning-inverse px-2 py-1 mt-1">Teacher</span></p>
                                            </div>
                                        </div>
                                        <div>
                                            <ul class="nav">
                                                <li class="nav-item">
                                                    <div class="img-icon"><i class="fa fa-envelope-o"></i></div>
                                                </li>
                                                <li class="nav-item">
                                                    <p>{{$user->email}}</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                                <h3>No Data Found</h3>
                            @endforelse
                        </div>
                        <!--end contact contant-->
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