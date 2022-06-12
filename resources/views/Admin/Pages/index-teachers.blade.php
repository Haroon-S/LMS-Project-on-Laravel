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
                                        <h1>Teachers</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="Home"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    Pages
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Clients</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- start-clients contant-->
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-statistics clients-contant">
                                    <div class="card-header">
                                        <div class="d-xxs-flex justify-content-between align-items-center">
                                            <div class="card-heading">
                                                <h4 class="card-title">Teachers</h4>
                                            </div>
                                            <div class="mt-xxs-0 mt-3 btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-sm btn-round  btn-primary">
                                                    <input type="radio" name="options" id="option1" checked="">
                                                    Today
                                                </label>
                                                <label class="btn btn-sm btn-outline-primary">
                                                    <input type="radio" name="options" id="option2">
                                                    Week
                                                </label>
                                                <label class="btn btn-sm btn-round btn-outline-primary">
                                                    <input type="radio" name="options" id="option3"> Month
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body py-0 table-responsive">
                                        <table class="table clients-contant-table mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Teachers</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Registered at</th>
                                                    <th scope="col">No of Courses</th>
                                                    <th scope="col">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($users as $key=>$user)
                                                <tr>
                                                <td>{{$key+1}}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="bg-img mr-4">
                                                                <img src="Pictures/{{$user->picture}}" class="img-fluid" alt="Clients-01">
                                                            </div>
                                                            <p class="font-weight-bold">{{$user->name}}</p>
                                                        </div>
                                                    </td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->created_at}}</td>
                                                    <td><a href="javascript:void(0)" class="dot"></a><span>5</span></td>
                                                    <td>
                                                        <a href="DestroyTeacher/{{$user->id}}" class="btn btn-icon btn-outline-danger btn-round"><i class="ti ti-close"></i></a>
                                                    </td>
                                                </tr>
                                                @empty
                                                    <h3>No Data Found</h3>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end-clients contant-->
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