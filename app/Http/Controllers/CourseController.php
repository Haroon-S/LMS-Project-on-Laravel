<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use App\Models\Review;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::check()) {
             $sid = Auth::user()->id;
        $my_courses = DB::table('enrollments')
        ->join('courses', 'enrollments.course_id', '=', 'courses.id')
        ->where('enrollments.user_id', $sid)
        ->get();
$courses = Course::all();
$students = User::whereRoleIs('student')->get();
$no_students = User::whereRoleIs('student')->count();
return view('pages/home', compact("courses", "students","no_students","my_courses"));
        }
        else{
            // $sid = Auth::user()->id;
            $my_courses = DB::table('enrollments')
            ->join('courses', 'enrollments.course_id', '=', 'courses.id')
            ->where('enrollments.user_id', 1)
            ->get();
    $courses = Course::all();
    $students = User::whereRoleIs('student')->get();
    $no_students = User::whereRoleIs('student')->count();
    return view('pages/home', compact("courses", "students","no_students","my_courses"));
        }
    }

    public function adminCourses()
    {
        $courses = Course::all();
        return view ("Admin/Pages/index-courses", compact("courses"));
    }

    public function teacherCourses()
    {
        $courses = Course::all();
        return view("Teacher/Pages/index-courses", compact("courses"));
    }
    public function teacherCoursesForReviews()
    {
        $courses=Course::all();
        return view("Teacher/Pages/index-reviews", compact("courses"));
    }
    public function teacherCoursesForStudents()
    {
        $courses=Course::all();
        return view("Teacher/Pages/index-students", compact("courses"));
    }
    
    
    public function courseShow()
    {
        return view("show-course");
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "course_title" => "required|max:255",
            "course_description" => "required|max:255",
            "course_category" => "required",
            "thumbnail" => "required",
        ]);

        $thumbnail = $request->file("thumbnail");
        $data["thumbnail"] = Str::uuid(). '.' .$thumbnail->getClientOriginalExtension();
        $thumbnail->move("Thumbnails", $data["thumbnail"]);

        Course::create([
            "course_title" => $request->course_title,
            "course_description" => $request->course_description,
            "course_category" => $request->course_category,
            "thumbnail" => $data["thumbnail"],
            'user_id' => Auth::user()->id,
            'teacher_name' => Auth::user()->name,
        ]);

        return redirect(url("teacher-courses"));
    }

    public function reviewCourses()
    {
        $courses=Course::all();
        return view("Admin/Pages/review-courses", compact('courses'));
    }

    public function studentCourses()
    {
        $courses=Course::all();
        return view("Admin/Pages/student-courses", compact('courses'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        $courses = Course::all();
        return view('pages/courses/course-single', compact("course","courses"));
    }
    public function myShow(Course $course)
    {
        $courses = Course::all();
        return view('pages/courses/my-course-single', compact("course","courses"));
    }
    
    public function enrollCourse(Course $course)
    {
       
        Enrollment::create([
            "course_id" => $course->id,
            'user_id' => Auth::user()->id
        ]);


        $cid = $course->id;

        Course::where('id',$cid)->increment('number_of_students',1);


            // $tc = $course->id;
            // $ts = Auth::user()->id;
            // echo $ts;
            // echo $tc;
            return redirect(url("home"));
    }

    public function q_t(Course $course)
    {
        return view('qt', compact("course"));
    }

    public function showCourse()
    {
        $sid = Auth::user()->id;
        // for ($x = 0; $x <= 10; $x++) {
        //     echo $sid ;
        //   }
        echo $sid;
        $my_course = DB::table('enrollments')
                ->join('courses', 'enrollments.course_id', '=', 'courses.id')
                ->where('enrollments.user_id', $sid)
                ->get();
                echo $my_course; 
        return view("show-course");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view("Teacher/Pages/edit-course", compact('course'));
    }
    
    
    
    public function myCourses(Course $course)
    {
        $sid = Auth::user()->id;
        return view("show-course");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $data = $request->validate([
            "course_title" => "required|max:50",
            "course_category" => "required",
            "course_description" => "required",
            "thumbnail" => "required",
        ]);

        if( $request->file("thumbnail") ){

            //delete old file from dir
            File::delete('Thumbnails/'.$course->thumbnail);

            // put new file in dir
            $file = $request->file('thumbnail');
            $data['thumbnail'] = Str::uuid(). '.' .$file->getClientOriginalExtension();
            $file->move('Thumbnails/', $data['thumbnail']);
        }

        $course->update($data);

        return redirect(url('teacher-courses'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        if(File::exists('Thumbnails/'.$course->thumbnail)) {
            File::delete('Thumbnails/'.$course->thumbnail);
        }

        $reviews=Review::where('course_id', $course->id)->get();

        foreach($reviews as $review)
        {
            $review->delete();
        }

        $course->delete();
        return redirect(url('admin-courses'));
    }


    public function destroyTeacher(Course $course)
    {
        if(File::exists('Thumbnails/'.$course->thumbnail)) {
            File::delete('Thumbnails/'.$course->thumbnail);
        }

        $course->delete();
        return redirect(url('teacher-courses'));
    }

    public function destroyAdmin(Course $course)
    {
        if(File::exists('Thumbnails/'.$course->thumbnail)) {
            File::delete('Thumbnails/'.$course->thumbnail);
        }

        $course->delete();
        return redirect(url('admin-courses'));
    }
}
