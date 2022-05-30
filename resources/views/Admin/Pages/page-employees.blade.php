@extends('Admin/Layout/main')

@section('title','Home')

@section('contents')
<!DOCTYPE html>
<html lang="en">


<head>
    <title>Mentor - Bootstrap 4 Admin Dashboard Template</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors.css" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
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
                                        <h1>Employees</h1>
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
                                            <div class="text-right">
                                                <h4><span class="badge badge-primary badge-pill px-3 py-2">$50/hr</span></h4>
                                            </div>
                                            <div class="pt-1 bg-img m-auto"><img src="assets/img/avtar/01.jpg" class="img-fluid" alt="employees-img"></div>
                                            <div class="mt-3 employees-contant-inner">
                                                <h4 class="mb-1">Samuel Woods</h4>
                                                <h5 class="mb-0 text-muted">UX designer</h5>
                                                <div class="mt-3 ">
                                                    <span class="badge badge-pill badge-success-inverse px-3 py-2">UI</span>
                                                    <span class="badge badge-pill badge-primary-inverse px-3 py-2">UX</span>
                                                    <span class="badge badge-pill badge-info-inverse px-3 py-2">Photoshop</span>
                                                    <span class="badge badge-pill badge-warning-inverse px-3 py-2">+7</span>
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
                                            <div class="text-right">
                                                <h4><span class="badge badge-primary badge-pill px-3 py-2">$50/hr</span></h4>
                                            </div>
                                            <div class="pt-1 bg-img m-auto"><img src="assets/img/avtar/02.jpg" class="img-fluid" alt="employees-img"></div>
                                            <div class="mt-3 employees-contant-inner">
                                                <h4 class="mb-1">Jenny Smithnig</h4>
                                                <h5 class="mb-0 text-muted">UX designer</h5>
                                                <div class="mt-3 ">
                                                    <span class="badge badge-pill badge-success-inverse px-3 py-2">UI</span>
                                                    <span class="badge badge-pill badge-primary-inverse px-3 py-2">UX</span>
                                                    <span class="badge badge-pill badge-info-inverse px-3 py-2">Photoshop</span>
                                                    <span class="badge badge-pill badge-warning-inverse px-3 py-2">+2</span>
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
                                            <div class="text-right">
                                                <h4><span class="badge badge-primary badge-pill px-3 py-2">$50/hr</span></h4>
                                            </div>
                                            <div class="pt-1 bg-img m-auto"><img src="assets/img/avtar/03.jpg" class="img-fluid" alt="employees-img"></div>
                                            <div class="mt-3 employees-contant-inner">
                                                <h4 class="mb-1">Brian Joedon</h4>
                                                <h5 class="mb-0 text-muted">Developer</h5>
                                                <div class="mt-3 ">
                                                    <span class="badge badge-pill badge-success-inverse px-3 py-2">Php</span>
                                                    <span class="badge badge-pill badge-primary-inverse px-3 py-2">Android</span>
                                                    <span class="badge badge-pill badge-info-inverse px-3 py-2">ios</span>
                                                    <span class="badge badge-pill badge-warning-inverse px-3 py-2">+5</span>
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
                                            <div class="text-right">
                                                <h4><span class="badge badge-primary badge-pill px-3 py-2">$50/hr</span></h4>
                                            </div>
                                            <div class="pt-1 bg-img m-auto"><img src="assets/img/avtar/04.jpg" class="img-fluid" alt="employees-img"></div>
                                            <div class="mt-3 employees-contant-inner">
                                                <h4 class="mb-1">Garettdon</h4>
                                                <h5 class="mb-0 text-muted">UX designer</h5>
                                                <div class="mt-3 ">
                                                    <span class="badge badge-pill badge-success-inverse px-3 py-2">UI</span>
                                                    <span class="badge badge-pill badge-primary-inverse px-3 py-2">UX</span>
                                                    <span class="badge badge-pill badge-info-inverse px-3 py-2">Photoshop</span>
                                                    <span class="badge badge-pill badge-warning-inverse px-3 py-2">+4</span>
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
                                            <div class="text-right">
                                                <h4><span class="badge badge-primary badge-pill px-3 py-2">$50/hr</span></h4>
                                            </div>
                                            <div class="pt-1 bg-img m-auto"><img src="assets/img/avtar/05.jpg" class="img-fluid" alt="employees-img"></div>
                                            <div class="mt-3 employees-contant-inner">
                                                <h4 class="mb-1">Garynice</h4>
                                                <h5 class="mb-0 text-muted">Mobile designer</h5>
                                                <div class="mt-3 ">
                                                    <span class="badge badge-pill badge-success-inverse px-3 py-2">Php</span>
                                                    <span class="badge badge-pill badge-primary-inverse px-3 py-2">Android</span>
                                                    <span class="badge badge-pill badge-info-inverse px-3 py-2">ios</span>
                                                    <span class="badge badge-pill badge-warning-inverse px-3 py-2">+5</span>
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
                                            <div class="text-right">
                                                <h4><span class="badge badge-primary badge-pill px-3 py-2">$50/hr</span></h4>
                                            </div>
                                            <div class="pt-1 bg-img m-auto"><img src="assets/img/avtar/06.jpg" class="img-fluid" alt="employees-img"></div>
                                            <div class="mt-3 employees-contant-inner">
                                                <h4 class="mb-1">Andrew nico</h4>
                                                <h5 class="mb-0 text-muted">Developer</h5>
                                                <div class="mt-3 ">
                                                    <span class="badge badge-pill badge-success-inverse px-3 py-2">Php</span>
                                                    <span class="badge badge-pill badge-primary-inverse px-3 py-2">Android</span>
                                                    <span class="badge badge-pill badge-info-inverse px-3 py-2">ios</span>
                                                    <span class="badge badge-pill badge-warning-inverse px-3 py-2">+5</span>
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
                                            <div class="text-right">
                                                <h4><span class="badge badge-primary badge-pill px-3 py-2">$50/hr</span></h4>
                                            </div>
                                            <div class="pt-1 bg-img m-auto"><img src="assets/img/avtar/07.jpg" class="img-fluid" alt="employees-img"></div>
                                            <div class="mt-3 employees-contant-inner">
                                                <h4 class="mb-1">Michaelveld</h4>
                                                <h5 class="mb-0 text-muted">Developer</h5>
                                                <div class="mt-3 ">
                                                    <span class="badge badge-pill badge-success-inverse px-3 py-2">Php</span>
                                                    <span class="badge badge-pill badge-primary-inverse px-3 py-2">Android</span>
                                                    <span class="badge badge-pill badge-info-inverse px-3 py-2">ios</span>
                                                    <span class="badge badge-pill badge-warning-inverse px-3 py-2">+5</span>
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
                                            <div class="text-right">
                                                <h4><span class="badge badge-primary badge-pill px-3 py-2">$50/hr</span></h4>
                                            </div>
                                            <div class="pt-1 bg-img m-auto"><img src="assets/img/avtar/08.jpg" class="img-fluid" alt="employees-img"></div>
                                            <div class="mt-3 employees-contant-inner">
                                                <h4 class="mb-1">Jimmy Falicon</h4>
                                                <h5 class="mb-0 text-muted">Developer</h5>
                                                <div class="mt-3 ">
                                                    <span class="badge badge-pill badge-success-inverse px-3 py-2">Php</span>
                                                    <span class="badge badge-pill badge-primary-inverse px-3 py-2">Android</span>
                                                    <span class="badge badge-pill badge-info-inverse px-3 py-2">ios</span>
                                                    <span class="badge badge-pill badge-warning-inverse px-3 py-2">+5</span>
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
                                            <div class="text-right">
                                                <h4><span class="badge badge-primary badge-pill px-3 py-2">$50/hr</span></h4>
                                            </div>
                                            <div class="pt-1 bg-img m-auto"><img src="assets/img/avtar/09.jpg" class="img-fluid" alt="employees-img"></div>
                                            <div class="mt-3 employees-contant-inner">
                                                <h4 class="mb-1">Richardket</h4>
                                                <h5 class="mb-0 text-muted">UX designer</h5>
                                                <div class="mt-3 ">
                                                    <span class="badge badge-pill badge-success-inverse px-3 py-2">UI</span>
                                                    <span class="badge badge-pill badge-primary-inverse px-3 py-2">UX</span>
                                                    <span class="badge badge-pill badge-info-inverse px-3 py-2">Photoshop</span>
                                                    <span class="badge badge-pill badge-warning-inverse px-3 py-2">+5</span>
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

    <!-- plugins -->
    <script src="assets/js/vendors.js"></script>

    <!-- custom app -->
    <script src="assets/js/app.js"></script>
</body>


</html>
@endsection