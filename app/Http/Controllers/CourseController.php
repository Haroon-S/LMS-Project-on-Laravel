<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = User::whereRoleIs('student')->get();
        $uploadedCourse = Course::all();
        return view('pages/home', compact("uploadedCourse", "students"));
    }

    public function teacherCourses()
    {
        $courses=Course::all();
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
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
        //
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
}
