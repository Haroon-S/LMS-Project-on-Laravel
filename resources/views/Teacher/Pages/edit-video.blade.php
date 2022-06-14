@extends('Teacher/Layout/main')

@section('title','Students List')

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
            <!-- begin app-header -->
            
            <!-- end app-header -->
            <!-- begin app-container -->
            <div class="app-container">
                
                <!-- begin app-main -->
                <div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    <div class="container-fluid">
                        
            <div class="col">
            <div id="form">
                <form action="../update-video/{{$video->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <legend>Create Course</legend>
                        <div class="container">

                            <div class="row">
                                <div class="col-3">
                                    <label for="Title">Title</label>
                                </div>
                                <div class="col">
                                    <input type="text" name="video_title" class="title" value="{{$video->video_title}}" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <label for="thumbnail">Thumbnail</label>
                                </div>
                                <div class="col">
                                    <input type="file" name="video_thumbnail" accept="image/png, image/gif, image/jpeg">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <label for="thumbnail">Video File</label>
                                </div>
                                <div class="col">
                                    <input type="file" name="video_file" accept="video/*">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <label for="video_description">Description</label>
                                </div>
                                <div class="col">
                                    <textarea name="video_description" rows="6" cols="25" required>{{$video->video_description}}</textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col" id="btns">
                                    <button type="submit" name="submit">Submit</button>
                                    <button type="reset" name="reset">Reset</button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
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
@endsection