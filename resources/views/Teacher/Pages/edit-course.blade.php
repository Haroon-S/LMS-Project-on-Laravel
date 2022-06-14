@extends('Teacher/Layout/main')

@section('title','Edit Course')

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
                <form action="../update-course/{{$course->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <legend>Update Course</legend>
                        <div class="container">

                            <div class="row">
                                <div class="col-3">
                                    <label for="Title">Title</label>
                                </div>
                                <div class="col">
                                    <input type="text" name="course_title" class="title" value="{{$course->course_title}}" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <label for="course_category">Category</label>
                                </div>
                                <div class="col">
                                    <select name="course_category" required>
                                @if($course->course_category=="Select")
                                {
                                    <option selected>Select</option>
                                    <option name="category">Technical Skills</option>
                                    <option name="category">Computing Courses</option>
                                    <option name="category">Programming Courses</option>
                                    <option name="category">Content Writing</option>
                                    <option name="category">Marketing Courses</option>
                                }
                                @elseif($course->course_category=="Technical Skills")
                                {
                                    <option >Select</option>
                                    <option name="category" selected>Technical Skills</option>
                                    <option name="category">Computing Courses</option>
                                    <option name="category">Programming Courses</option>
                                    <option name="category">Content Writing</option>
                                    <option name="category">Marketing Courses</option>
                                }
                                @elseif($course->course_category=="Computing Courses")
                                {
                                    <option >Select</option>
                                    <option name="category">Technical Skills</option>
                                    <option name="category" selected>Computing Courses</option>
                                    <option name="category">Programming Courses</option>
                                    <option name="category">Content Writing</option>
                                    <option name="category">Marketing Courses</option>
                                }
                                @elseif($course->course_category=="Programming Courses")
                                {
                                    <option>Select</option>
                                    <option name="category">Technical Skills</option>
                                    <option name="category">Computing Courses</option>
                                    <option name="category" selected>Programming Courses</option>
                                    <option name="category">Content Writing</option>
                                    <option name="category">Marketing Courses</option>
                                }
                                @elseif($course->course_category=="Content Writing")
                                {
                                    <option selected>Select</option>
                                    <option name="category">Technical Skills</option>
                                    <option name="category">Computing Courses</option>
                                    <option name="category">Programming Courses</option>
                                    <option name="category" selected>Content Writing</option>
                                    <option name="category">Marketing Courses</option>
                                }
                                @elseif($course->course_category=="Marketing Courses")
                                {
                                    <option>Select</option>
                                    <option name="category">Technical Skills</option>
                                    <option name="category">Computing Courses</option>
                                    <option name="category">Programming Courses</option>
                                    <option name="category">Content Writing</option>
                                    <option name="category" selected>Marketing Courses</option>
                                }
                                @endif
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <label for="thumbnail">Thumbnail</label>
                                </div>
                                <div class="col">
                                    <input type="file" name="thumbnail" accept="image/png, image/gif, image/jpeg">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <label for="course_description">Description</label>
                                </div>
                                <div class="col">
                                    <textarea name="course_description" rows="6" cols="25" required>{{$course->course_description}}</textarea>
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