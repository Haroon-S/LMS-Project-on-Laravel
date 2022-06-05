<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('student')){
             return view('studentdashboard');
        }elseif(Auth::user()->hasRole('teacher')){
             return view('teacherdashboard');
        }elseif(Auth::user()->hasRole('admin')){
         return view('Admin/Pages/index');
    }
    }
}
