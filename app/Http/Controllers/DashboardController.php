<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
         if(Auth::user()->hasRole('student')){
          $courses = Course::all();
          $students = User::whereRoleIs('student')->get();
          $no_students = User::whereRoleIs('student')->count();
        return view('pages/home', compact("courses", "students","no_students"));
        }elseif(Auth::user()->hasRole('teacher')){
             return view('Teacher/Pages/index');
        }elseif(Auth::user()->hasRole('admin')){
         return view('Admin/Pages/index');
    }
    }
}
