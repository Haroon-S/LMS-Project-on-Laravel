@extends('Admin/Layout/main')

@section('title','Students')

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
              <a href="admin-students/{{$course->id}}"><button type="button">View Students</button></a>
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
@endsection