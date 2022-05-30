<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Admin/Pages/index");
    }
    
    public function appChat()
    {
        return view("Admin/Pages/app-chat");
    }
    public function authLock()
    {
        return view("Admin/Pages/auth-lockscreen");
    }
    public function authLogin()
    {
        return view("Admin/Pages/auth-login");
    }
    public function authRegister()
    {
        return view("Admin/Pages/auth-register");
    }
    public function calendarFull()
    {
        return view("Admin/Pages/calendar-full");
    }
    public function calendarList()
    {
        return view("Admin/Pages/calendar-list");
    }
    public function indexCourses()
    {
        return view("Admin/Pages/index-courses");
    }
    public function indexRequests()
    {
        return view("Admin/Pages/index-requests");
    }
    public function indexReviews()
    {
        return view("Admin/Pages/index-reviews");
    }
    public function indexStudents()
    {
        return view("Admin/Pages/index-students");
    }
    public function indexTeachers()
    {
        return view("Admin/Pages/index-teachers");
    }
    public function mailInbox()
    {
        return view("Admin/Pages/mail-inbox");
    }
    public function mapsGoogle()
    {
        return view("Admin/Pages/maps-google");
    }
    public function mapsMapael()
    {
        return view("Admin/Pages/maps-mapael");
    }
    public function mapsVector()
    {
        return view("Admin/Pages/maps-vector");
    }
    public function accountSetting()
    {
        return view("Admin/Pages/page-account-setting");
    }
    public function comingSoon()
    {
        return view("Admin/Pages/page-coming-soon");
    }
    public function contacts()
    {
        return view("Admin/Pages/page-contacts");
    }
    public function employees()
    {
        return view("Admin/Pages/page-employees");
    }
    public function faq()
    {
        return view("Admin/Pages/page-faq");
    }
    public function fileManager()
    {
        return view("Admin/Pages/page-file-manager");
    }
    public function teachers()
    {
        return view("Admin/Pages/page-teachers");
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
