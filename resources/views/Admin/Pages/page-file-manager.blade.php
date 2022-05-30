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
                                            <h4 class="mb-0">Mentor_demo.SVG</h4>
                                            <p class="mb-2">28.8 kb</p>
                                            <a href="javascript:void(0)" class="btn btn-light">Download</a>
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
                                            <h4 class="mb-0">Mentor_demo.AVI</h4>
                                            <p class="mb-2">28.8 kb</p>
                                            <a href="javascript:void(0)" class="btn btn-light">Download</a>
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
                                            <h4 class="mb-0">Mentor_demo.css</h4>
                                            <p class="mb-2">28.8 kb</p>
                                            <a href="javascript:void(0)" class="btn btn-light">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="text-center p-2">
                                            <div class="mb-2">
                                                <img src="assets/img/file-icon/dbf.png" alt="png-img">
                                            </div>
                                            <h4 class="mb-0">Mentor_demo.dbf</h4>
                                            <p class="mb-2">28.8 kb</p>
                                            <a href="javascript:void(0)" class="btn btn-light">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="text-center p-2">
                                            <div class="mb-2">
                                                <img src="assets/img/file-icon/doc.png" alt="png-img">
                                            </div>
                                            <h4 class="mb-0">Mentor_demo.doc</h4>
                                            <p class="mb-2">28.8 kb</p>
                                            <a href="javascript:void(0)" class="btn btn-light">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="text-center p-2">
                                            <div class="mb-2">
                                                <img src="assets/img/file-icon/dwg.png" alt="png-img">
                                            </div>
                                            <h4 class="mb-0">Mentor_demo.dwg</h4>
                                            <p class="mb-2">28.8 kb</p>
                                            <a href="javascript:void(0)" class="btn btn-light">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="text-center p-2">
                                            <div class="mb-2">
                                                <img src="assets/img/file-icon/exe.png" alt="png-img">
                                            </div>
                                            <h4 class="mb-0">Mentor_demo.exe</h4>
                                            <p class="mb-2">28.8 kb</p>
                                            <a href="javascript:void(0)" class="btn btn-light">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="text-center p-2">
                                            <div class="mb-2">
                                                <img src="assets/img/file-icon/html.png" alt="png-img">
                                            </div>
                                            <h4 class="mb-0">Mentor_demo.html</h4>
                                            <p class="mb-2">28.8 kb</p>
                                            <a href="javascript:void(0)" class="btn btn-light">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="text-center p-2">
                                            <div class="mb-2">
                                                <img src="assets/img/file-icon/jpg.png" alt="png-img">
                                            </div>
                                            <h4 class="mb-0">Mentor_demo.jpg</h4>
                                            <p class="mb-2">28.8 kb</p>
                                            <a href="javascript:void(0)" class="btn btn-light">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="text-center p-2">
                                            <div class="mb-2">
                                                <img src="assets/img/file-icon/pdf.png" alt="png-img">
                                            </div>
                                            <h4 class="mb-0">Mentor_demo.pdf</h4>
                                            <p class="mb-2">28.8 kb</p>
                                            <a href="javascript:void(0)" class="btn btn-light">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="text-center p-2">
                                            <div class="mb-2">
                                                <img src="assets/img/file-icon/png.png" alt="png-img">
                                            </div>
                                            <h4 class="mb-0">Mentor_demo.png</h4>
                                            <p class="mb-2">28.8 kb</p>
                                            <a href="javascript:void(0)" class="btn btn-light">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="text-center p-2">
                                            <div class="mb-2">
                                                <img src="assets/img/file-icon/psd.png" alt="png-img">
                                            </div>
                                            <h4 class="mb-0">Mentor_demo.psd</h4>
                                            <p class="mb-2">28.8 kb</p>
                                            <a href="javascript:void(0)" class="btn btn-light">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="text-center p-2">
                                            <div class="mb-2">
                                                <img src="assets/img/file-icon/rtf.png" alt="png-img">
                                            </div>
                                            <h4 class="mb-0">Mentor_demo.rtf</h4>
                                            <p class="mb-2">28.8 kb</p>
                                            <a href="javascript:void(0)" class="btn btn-light">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="text-center p-2">
                                            <div class="mb-2">
                                                <img src="assets/img/file-icon/xls.png" alt="png-img">
                                            </div>
                                            <h4 class="mb-0">Mentor_demo.xls</h4>
                                            <p class="mb-2">28.8 kb</p>
                                            <a href="javascript:void(0)" class="btn btn-light">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="text-center p-2">
                                            <div class="mb-2">
                                                <img src="assets/img/file-icon/xml.png" alt="png-img">
                                            </div>
                                            <h4 class="mb-0">Mentor_demo.xml</h4>
                                            <p class="mb-2">28.8 kb</p>
                                            <a href="javascript:void(0)" class="btn btn-light">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="text-center p-2">
                                            <div class="mb-2">
                                                <img src="assets/img/file-icon/zip.png" alt="png-img">
                                            </div>
                                            <h4 class="mb-0">Mentor_demo.zip</h4>
                                            <p class="mb-2">28.8 kb</p>
                                            <a href="javascript:void(0)" class="btn btn-light">Download</a>
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

    <!-- plugins -->
    <script src="assets/js/vendors.js"></script>

    <!-- custom app -->
    <script src="assets/js/app.js"></script>
</body>


</html>
@endsection