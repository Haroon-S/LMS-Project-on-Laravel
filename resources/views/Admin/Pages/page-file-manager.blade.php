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
                                        <h1>File Manager</h1>
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
                                                <li class="breadcrumb-item active text-primary" aria-current="page">File Manager</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- start file maneger -->
                        <div class="row">
                            <div class="col-xl-3 col-sm-6">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="text-center p-2">
                                            <div class="mb-2">
                                                <img src="assets/img/file-icon/svg.png" alt="png-img">
                                            </div>
                                            <h4 class="mb-0">Teachers Details.pdf</h4>
                                            <p class="mb-2">28.8 kb</p>
                                            <a href="TeachersPDF" class="btn btn-light">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="text-center p-2">
                                            <div class="mb-2">
                                                <img src="assets/img/file-icon/ai.png" alt="png-img">
                                            </div>
                                            <h4 class="mb-0">Students Details.pdf</h4>
                                            <p class="mb-2">28.8 kb</p>
                                            <a href="StudentsPDF" class="btn btn-light">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="text-center p-2">
                                            <div class="mb-2">
                                                <img src="assets/img/file-icon/css.png" alt="png-img">
                                            </div>
                                            <h4 class="mb-0">Courses Details</h4>
                                            <p class="mb-2">28.8 kb</p>
                                            <a href="CoursesPDF" class="btn btn-light">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- start file maneger -->
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