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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Task 2 CSS.css">
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
                        
            <div class="col">
            <div id="form">
                <form action="store-course/{{Auth::user()->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <legend>Create Course</legend>
                        <div class="container">

                            <div class="row">
                                <div class="col-3">
                                    <label for="Title">Title</label>
                                </div>
                                <div class="col">
                                    <input type="text" name="course_title" class="title" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <label for="course_category">Category</label>
                                </div>
                                <div class="col">
                                    <select name="course_category" required>
                                        <option selected>Select</option>
                                        <option name="category">Technical Skills</option>
                                        <option name="category">Computing Courses</option>
                                        <option name="category">Programming Courses</option>
                                        <option name="category">Content Writing</option>
                                        <option name="category">Marketing Courses</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <label for="thumbnail">Thumbnail</label>
                                </div>
                                <div class="col">
                                    <input type="file" name="thumbnail" accept="image/png, image/gif, image/jpeg" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <label for="course_description">Description</label>
                                </div>
                                <div class="col">
                                    <textarea name="course_description" rows="6" cols="25" required></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <input type="checkbox" value="agree">
                                    <label for="agree">I agree to terms & conditions</label>
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

    <!-- plugins -->
    <script src="assets/js/vendors.js"></script>

    <!-- custom app -->
    <script src="assets/js/app.js"></script>
</body>

</html>
@endsection