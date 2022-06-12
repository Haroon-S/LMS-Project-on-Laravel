<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


//      public function course()
//     { 
//           $students = User::whereRoleIs('student')->get();
//           $uploadedCourse = Course::all();
//           return view('pages/home', compact("uploadedCourse", "students"));
//           // $result = (new StudentController)->index();
//           // app('App\Http\Controllers\StudentController')->index();
//     }

    public function index()
    {
        if(Auth::user()->hasRole('student')){
          $students = User::whereRoleIs('student')->get();
          $uploadedCourse = Course::all();
          return view('pages/home', compact("uploadedCourse", "students"));
          // $uploadedCourse = Course::all();
          // return view('pages/home', compact("uploadedCourse"));
          // $result = (new StudentController)->index();
          // app('App\Http\Controllers\StudentController')->index();
          //    return view('pages/home');
        }elseif(Auth::user()->hasRole('teacher')){
             return view('HSS-Views/teacherdashboard');
        }elseif(Auth::user()->hasRole('admin')){
         return view('Admin/Pages/index');
    }
    }
}
