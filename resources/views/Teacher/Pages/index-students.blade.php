@extends('Teacher/Layout/main')

@section('title','Students List')

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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">
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
            
            <div id="content-container">
          <div class="header-info"><h4>All Courses</h4></div>
    
          <!-- First Video Section -->
        <section class="video-section">
        @forelse($courses as $key=>$course)
          <div class="videos">
            <div class="thumbnail"><img src="Thumbnails/{{$course->thumbnail}}" alt="thumb1"></div>
            <div class="info">
              <div class="title">
                <h2 class="main-text">{{$course->course_title}}</h2>
                <p class="sub-text">No. of Students: <span>{{$course->number_of_students}}</span></p>
              </div>
              <div class="hover-icon"><i class="fas fa-ellipsis-v"></i></div>
            </div>
            <div class="btns">
              <a href="view-reviews/{{$course->id}}"><button type="button">View Students</button></a>
            </div>
          </div>
        @empty
            <h3>No Data Found</h3>
        @endforelse
          </section>
      </div>
            
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