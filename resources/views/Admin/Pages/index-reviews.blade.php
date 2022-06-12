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
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="latestjobs" class="table table-borderless table-striped jobportal-table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Id</th>
                                                        <th>Review</th>
                                                        <th>Course</th>
                                                        <th>Student</th>
                                                        <th>Date</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-muted">
                                                    @forelse($reviews as $key=>$review)
                                                    <tr>
                                                        <td>{{$key+1}}</td>
                                                        <td>{{$review->id}}
                                                        </td>
                                                        <td>{{$review->review_on_course}}</td>
                                                        @foreach($courses as $key=>$course)
                                                            @if($review->course_id==$course->id)
                                                            <td>{{course->course_title}}</td>
                                                            @endif
                                                        @endforeach

                                                        @foreach($users as $key=>$user)
                                                            @if($review->user_id==$user->id)
                                                            <td>{{$user->name}}</td>
                                                            @endif
                                                        @endforeach
                                                        <td>
                                                            <label class="badge badge-success-inverse mb-0">{{$review->created_at}}</label>
                                                        </td>
                                                        <td>
                                                            <a href="DestroyReview/{{$review->id}}"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a>
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