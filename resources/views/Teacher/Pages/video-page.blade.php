@extends('Teacher/Layout/main')

@section('title','Courses')

@section('contents')
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="/assets/img/loader/loader.svg" alt="loader">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->

            <div id="content-container">
                <div>
                    <a href="../upload-video/{{$course->id}}"><button id="uploadBtn">Upload Video</button></a>
                </div>
          <div class="header-info"><h4>All Videos</h4></div>
    
          <!-- First Video Section -->
        <section class="video-section">
        @forelse($videos as $key=>$video)
          <div class="videos">
            <a href="../ShowVideo/{{$video->id}}"><div class="thumbnail"><img src="/Thumbnails/{{$video->video_thumbnail}}" alt="thumb1"></div></a>
            <div class="info">
              <div class="title">
                <a href="ShowVideo/{{$video->id}}"><h2 class="main-text">{{$video->course_title}}</h2></a>
              </div>
              <div class="hover-icon"><i class="fas fa-ellipsis-v"></i></div>
            </div>
            <div class="btns">
              <a href="../edit-video/{{$video->id}}"><button type="button">Edit</button></a>
              <a href="../destroy-video/{{$video->id}}"><button type="button">Delete</button></a>
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