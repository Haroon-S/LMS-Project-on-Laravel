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
                                        <h1>Car Dealer</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    Dashboard
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Car
                                                    Dealer</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- start car dealer-->
                        <div class="row">
                            <div class="col-sm-12 col-xxl-3 mb-30">
                                <div class="card card-statistic car-dealer-contants h-100 mb-0 o-hidden">
                                    <div class="card-body p-0">
                                        <div class="bg-gradient">
                                            <div class="card-header border-0 d-flex justify-content-between mb-3">
                                                <div class="card-heading">
                                                    <h4 class="card-title text-white">Site activity</h4>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="text-white p-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-horizontal"></i>
                                                    </a>
                                                    <div class="dropdown-menu custom-dropdown dropdown-menu-right p-4">
                                                        <h6 class="mb-1">Action</h6>
                                                        <a class="dropdown-item" href="#!"> <i class="fa-fw fa fa-clock-o"></i>Last week</a>
                                                        <a class="dropdown-item" href="#!"> <i class="fa-fw fa fa-clock-o"></i>Last month</a>
                                                        <a class="dropdown-item" href="#!"> <i class="fa-fw fa fa-clock-o"></i>Last year</a>
                                                        <a class="dropdown-item" href="#!"> <i class="fa-fw fa fa-download"></i>Export report</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="apechart-wrapper">
                                                <div id="cardealerdemo1" class="chart-fit"></div>
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-xxs-6">
                                                <div class="media align-items-center p-4 border-sm-right border-bottom">
                                                    <div class="mr-4">
                                                        <i class="fe fe-user-check text-primary font-30"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <strong class="text-dark">New Visitors</strong>
                                                        <h3 class="font-light text-muted mb-0">528+</h3>
                                                    </div>
                                                </div>
                                                <div class="media align-items-center p-4 border-sm-right border-bottom border-sm-bottom-0">
                                                    <div class="mr-4">
                                                        <i class="fe fe-compass text-primary font-30"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <strong class="text-dark">Page Views</strong>
                                                        <h3 class="font-light text-muted mb-0">15K+</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxs-6">
                                                <div class="media align-items-center p-4 border-bottom">
                                                    <div class="mr-4">
                                                        <i class="fe fe-eye text-primary font-30"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <strong class="text-dark">Inventory Lead</strong>
                                                        <h3 class="font-light text-muted mb-0">156+</h3>
                                                    </div>
                                                </div>
                                                <div class="media align-items-center p-4">
                                                    <div class="mr-4">
                                                        <i class="fe fe-activity text-primary font-30"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <strong class="text-dark">Bounce Rate</strong>
                                                        <h3 class="font-light text-muted mb-0">87%</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 col-xxl-6 mb-30">
                                <div class="card card-statistic car-dealer-contants h-100 mb-0">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="card-heading">
                                            <h4 class="card-title">Sale Analysis Trend</h4>
                                        </div>
                                        <div class="dropdown">
                                            <a class="p-2" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fe fe-more-horizontal"></i>
                                            </a>
                                            <div class="dropdown-menu custom-dropdown dropdown-menu-right p-4">
                                                <h6 class="mb-1">Action</h6>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-o pr-2"></i>View reports</a>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-edit pr-2"></i>Edit reports</a>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-bar-chart-o pr-2"></i>Statistics</a>
                                                <h6 class="mb-1 mt-3">Export</h6>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-pdf-o pr-2"></i>Export to PDF</a>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-excel-o pr-2"></i>Export to CSV</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xxs-6 col-xl-4">
                                                <h5>Number of Sale</h5>
                                                <h2 class="font-40 font-light text-muted mb-0">2,431</h2>
                                            </div>
                                            <div class="col-xxs-6 col-xl-4">
                                                <h5 class="text-primary">Amount of Sale</h5>
                                                <h2 class="font-40 font-light text-primary mb-0">3,546</h2>
                                            </div>
                                        </div>
                                        <div class="apechart-wrapper">
                                            <div id="cardealerdemo2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 col-xxl-3 mb-30">
                                <div class="card card-statistics o-hidden h-100 mb-0">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="card-heading">
                                            <h4 class="card-title">Safe Deal</h4>
                                        </div>
                                        <div class="dropdown">
                                            <a class="p-2" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fe fe-circle"></i>
                                            </a>
                                            <div class="dropdown-menu custom-dropdown dropdown-menu-right p-4">
                                                <h6 class="mb-1">Action</h6>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-o pr-2"></i>View reports</a>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-edit pr-2"></i>Edit reports</a>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-bar-chart-o pr-2"></i>Statistics</a>
                                                <h6 class="mb-1 mt-3">Export</h6>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-pdf-o pr-2"></i>Export to PDF</a>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-excel-o pr-2"></i>Export to CSV</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-5 pb-0 pt-2">
                                        <div class="morris-wrapper">
                                            <div id="cardealer1" style="height: 250px;"></div>
                                        </div>
                                        <div class="row mt-3 align-self-center justify-content-center">
                                            <div class="col-6 col-sm-4">
                                                <div class="pb-3 mt-3 text-center">
                                                    <h3 class="mb-1 font-weight-bold text-warning">680</h3>
                                                    <p class="text-muted"> New cars</p>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4">
                                                <div class="mt-3 text-center">
                                                    <h3 class="mb-1 font-weight-bold text-cyan">800</h3>
                                                    <p class="text-muted"> Used cars </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-8 mb-30">
                                <div class="card card-statistics h-100 mb-0">
                                    <div class="card-header">
                                        <h4 class="card-title">Top inquiries</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <thead class="bg-light">
                                                    <tr>
                                                        <th>VIN number</th>
                                                        <th>Car name</th>
                                                        <th>Leads</th>
                                                        <th>Date </th>
                                                        <th>Type</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-muted mb-0">
                                                    <tr>
                                                        <td>#54981</td>
                                                        <td>2017 Audi A4 Prestiger</td>
                                                        <td>4</td>
                                                        <td>20-01-2019</td>
                                                        <td>Old</td>
                                                        <td>
                                                            <a href="javascript:void(0)" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                            <a href="javascript:void(0)"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#25425</td>
                                                        <td>2016 BMW X1</td>
                                                        <td>6 </td>
                                                        <td>26-04-2019</td>
                                                        <td>New</td>
                                                        <td>
                                                            <a href="javascript:void(0)" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                            <a href="javascript:void(0)"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#45678</td>
                                                        <td>2017 Audi Q3 2.0T Prestige</td>
                                                        <td>9</td>
                                                        <td>14-04-2019</td>
                                                        <td>Old</td>
                                                        <td>
                                                            <a href="javascript:void(0)" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                            <a href="javascript:void(0)"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#47989</td>
                                                        <td>1998 BMW M3</td>
                                                        <td>2</td>
                                                        <td>06-12-2019</td>
                                                        <td>Old</td>
                                                        <td>
                                                            <a href="javascript:void(0)" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                            <a href="javascript:void(0)"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#12356</td>
                                                        <td>2016 BMW M3 Base</td>
                                                        <td>3</td>
                                                        <td>12-12-2019</td>
                                                        <td>New</td>
                                                        <td>
                                                            <a href="javascript:void(0)" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                            <a href="javascript:void(0)"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#12345</td>
                                                        <td>2010 BMW M6</td>
                                                        <td>5</td>
                                                        <td>10-02-2019</td>
                                                        <td>New</td>
                                                        <td>
                                                            <a href="javascript:void(0)" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                            <a href="javascript:void(0)"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#34265</td>
                                                        <td>2014 Ford F-150 Lariat</td>
                                                        <td>9</td>
                                                        <td>30-12-2019</td>
                                                        <td>Old</td>
                                                        <td>
                                                            <a href="javascript:void(0)" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                            <a href="javascript:void(0)"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#15548</td>
                                                        <td>2016 Ford Edge Titanium</td>
                                                        <td>8</td>
                                                        <td>12-12-2019</td>
                                                        <td>New</td>
                                                        <td>
                                                            <a href="javascript:void(0)" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                            <a href="javascript:void(0)"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 mb-30">
                                <div class="card card-statistics h-100 mb-0">
                                    <div class="card-header">
                                        <h4 class="card-title">Page views</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-right">
                                            <span class="mr-3"><i class="fa fa-square pr-1 text-primary"></i> User</span>
                                            <span><i class="fa fa-square pr-1 text-info"></i> Page view</span>
                                        </div>
                                        <div class="apexchart-wrapper">
                                            <div id="cardealerdemo3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-statistics">
                                    <div class="card-body p-0">
                                        <div class="row no-gutters">
                                            <div class="col-lg-6 col-xl-3 p-20 border-bottom border-xl-bottom-0 border-lg-right">
                                                <div class="row align-items-center">
                                                    <div class="col-xxs-6">
                                                        <h4>Billing Statement</h4>
                                                        <p>Consectetur ipsum dolor sit amet, adipisicing.</p>
                                                    </div>
                                                    <div class="col-xxs-6 ml-auto mt-3 mt-sm-0 mb-0 text-xxs-center">
                                                        <span class="d-block text-primary font-30">56</span>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-3 p-20 border-bottom border-xl-bottom-0 border-xl-right">
                                                <div class="row align-items-center">
                                                    <div class="col-xxs-6">
                                                        <h4>Car Use</h4>
                                                        <p>Consectetur ipsum dolor sit amet, adipisicing.</p>
                                                    </div>
                                                    <div class="col-xxs-6 ml-auto mt-3 mt-sm-0 mb-0 text-xxs-center">
                                                        <span class="d-block text-primary font-30">353</span>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-3 p-20 border-bottom border-lg-bottom-0 border-lg-right">
                                                <div class="row align-items-center">
                                                    <div class="col-xxs-6">
                                                        <h4>Receivable Data</h4>
                                                        <p>Consectetur ipsum dolor sit amet, adipisicing.</p>
                                                    </div>
                                                    <div class="col-xxs-6 ml-auto mt-3 mt-sm-0 mb-0 text-xxs-center">
                                                        <span class="d-block text-primary font-30">98%</span>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-3 p-20">
                                                <div class="row align-items-center">
                                                    <div class="col-xxs-6">
                                                        <h4>Recap the Car</h4>
                                                        <p>Consectetur ipsum dolor sit amet, adipisicing.</p>
                                                    </div>
                                                    <div class="col-xxs-6 ml-auto mt-3 mt-sm-0 text-xxs-center">
                                                        <span class="d-block text-primary font-30">155</span>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xxl-4 mb-30">
                                <div class="card card-statistics h-100 mb-0 car-dealer-contants">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Leads By Make Model</h4>
                                        </div>
                                    </div>
                                    <div class="card-body car-dealer-contants-text">
                                        <div class="pb-3 pt-0">
                                            <p class="text-muted">Honda <span class="float-right font-weight-bold">74%</span></p>
                                            <div class="progress progress-sm m-b-0" style="height: 4px;">
                                                <div role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 74%;" class="progress-bar bg-primary"></div>
                                            </div>
                                        </div>
                                        <div class="py-3">
                                            <p class="text-muted">Toyota <span class="float-right font-weight-bold">69%</span></p>
                                            <div class="progress progress-sm m-b-0" style="height: 4px;">
                                                <div role="progressbar" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100" style="width: 69%;" class="progress-bar bg-info"></div>
                                            </div>
                                        </div>
                                        <div class="py-3">
                                            <p class="text-muted">Chevrolet <span class="float-right font-weight-bold">59%</span></p>
                                            <div class="progress progress-sm m-b-0" style="height: 4px;">
                                                <div role="progressbar" aria-valuenow="59" aria-valuemin="0" aria-valuemax="100" style="width: 59%;" class="progress-bar bg-success"></div>
                                            </div>
                                        </div>
                                        <div class="py-3">
                                            <p class="text-muted">Audi <span class="float-right font-weight-bold">52%</span></p>
                                            <div class="progress progress-sm m-b-0" style="height: 4px;">
                                                <div role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100" style="width: 52%;" class="progress-bar bg-orange"></div>
                                            </div>
                                        </div>
                                        <div class="py-3">
                                            <p class="text-muted">Mercedes <span class="float-right font-weight-bold">46%</span></p>
                                            <div class="progress progress-sm m-b-0" style="height: 4px;">
                                                <div role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100" style="width: 46%;" class="progress-bar bg-warning"></div>
                                            </div>
                                        </div>
                                        <div class="py-3">
                                            <p class="text-muted">BMW <span class="float-right font-weight-bold">56%</span></p>
                                            <div class="progress progress-sm m-b-0" style="height: 4px;">
                                                <div role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100" style="width: 56%;" class="progress-bar bg-pink"></div>
                                            </div>
                                        </div>
                                        <div class="py-3">
                                            <p class="text-muted">Chevrolet <span class="float-right font-weight-bold">59%</span></p>
                                            <div class="progress progress-sm m-b-0" style="height: 4px;">
                                                <div role="progressbar" aria-valuenow="59" aria-valuemin="0" aria-valuemax="100" style="width: 59%;" class="progress-bar bg-danger"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-4 mb-30">
                                <div class="card card-statistics h-100 mb-0 widget-branches-list dating-widget-branches-list">
                                    <div class="card-header">
                                        <h4 class="card-title">Most Viewed Pages</h4>
                                    </div>
                                    <div class="card-body scrollbar scroll_dark">
                                        <ul class="nav d-block">
                                            <li class="nav-item pt-0">
                                                <a class="media justify-content-between" href="javascript:void(0)">
                                                    <p>
                                                        <img src="assets/img/flags/au.png" class="img-fluid" alt="Australia">
                                                        <span class="title pl-3">Australia</span>
                                                    </p>
                                                    <span class="text-dark">80%</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="media justify-content-between" href="javascript:void(0)">
                                                    <p>
                                                        <img src="assets/img/flags/bd.png" class="img-fluid" alt="Bangladesh">
                                                        <span class="title pl-3">Bangladesh</span>
                                                    </p>
                                                    <span class="text-dark">45%</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="media justify-content-between" href="javascript:void(0)">
                                                    <p>
                                                        <img src="assets/img/flags/ca.png" class="img-fluid" alt="Canada">
                                                        <span class="title pl-3">Canada</span>
                                                    </p>
                                                    <span class="text-dark">87%</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="media justify-content-between" href="javascript:void(0)">
                                                    <p>
                                                        <img src="assets/img/flags/in.png" class="img-fluid" alt="India">
                                                        <span class="title pl-3">India</span>
                                                    </p>
                                                    <span class="text-dark">95%</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="media justify-content-between" href="javascript:void(0)">
                                                    <p>
                                                        <img src="assets/img/flags/cn.png" class="img-fluid" alt="China">
                                                        <span class="title pl-3">China</span>
                                                    </p>
                                                    <span class="text-dark">65%</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="media justify-content-between" href="javascript:void(0)">
                                                    <p>
                                                        <img src="assets/img/flags/es.png" class="img-fluid" alt="Ecuador">
                                                        <span class="title pl-3">Ecuador</span>
                                                    </p>
                                                    <span class="text-dark">78%</span>
                                                </a>
                                            </li>
                                            <li class="nav-item pb-0">
                                                <a class="media justify-content-between" href="javascript:void(0)">
                                                    <p>
                                                        <img src="assets/img/flags/lk.png" class="img-fluid" alt="Sri Lanka">
                                                        <span class="title pl-3">Sri Lanka</span>
                                                    </p>
                                                    <span class="text-dark">95%</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xxl-4 mb-30">
                                <div class="card card-statistics h-100 mb-0 o-hidden">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="card-heading">
                                            <h4 class="card-title">Lead overview</h4>
                                        </div>
                                        <div class="dropdown">
                                            <select class="custom-select custom-select-sm" id="inputGroupSelect01">
                                                <option selected>Weekly</option>
                                                <option value="1">Monthly</option>
                                                <option value="2">Yearly</option>
                                                <option value="3">All time</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row align-self-center">
                                            <div class="col">
                                                <h4>Reached 6454</h4>
                                                <p>Ea consectetur dolorem, enim explicabo necessitatibus</p>
                                                <ul class="jobportaldemo2-list list-unstyled m-t-20">
                                                    <li class="py-1"> <i class="fa fa-minus pr-2 text-primary"></i> Request more info</li>
                                                    <li class="py-1"> <i class="fa fa-minus pr-2 text-primary"></i> Make an offer</li>
                                                    <li class="py-1"> <i class="fa fa-minus pr-2 text-primary"></i> Schedule test drive</li>
                                                    <li class="py-1"> <i class="fa fa-minus pr-2 text-primary"></i> Financial information</li>
                                                </ul>
                                            </div>
                                            <div class="apexchart-wrapper col">
                                                <div id="cardealerdemo4" class="jobportaldemo2"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apexchart-wrapper">
                                        <div id="cardealerdemo5" class="chart-fit p-absolute-lrb"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end car dealer-->
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
            <!-- begin footer -->
            <footer class="footer">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-left">
                        <p>&copy; Copyright 2019. All rights reserved.</p>
                    </div>
                    <div class="col  col-sm-6 ml-sm-auto text-center text-sm-right">
                        <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                    </div>
                </div>
            </footer>
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