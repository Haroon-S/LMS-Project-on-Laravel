@extends('Admin/Layout/main')

@section('title','Home')

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
                                                        <td>{{$review->course_title}}</td>
                                                        <td>{{$review->student_name}}</td>
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
@endsection