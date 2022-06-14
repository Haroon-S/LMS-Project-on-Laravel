<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('student')){
             return view('HSS-Views/studentdashboard');
        }elseif(Auth::user()->hasRole('teacher')){
             return view('Teacher/Pages/index');
        }elseif(Auth::user()->hasRole('admin')){
         return view('Admin/Pages/index');
    }
    }
}
