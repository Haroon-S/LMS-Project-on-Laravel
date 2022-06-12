<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use DB;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Teacher/Pages/index");
    }
    public function appChat()
    {
        return view("Teacher/Pages/app-chat");
    }
    public function calendarFull()
    {
        return view("Teacher/Pages/calendar-full");
    }
    public function calendarList()
    {
        return view("Teacher/Pages/calendar-list");
    }
    public function indexTeachers()
    {
        //$users=User::all();
        $users = DB::table('users')
        ->leftJoin('role_user', 'users.id', '=', 'role_user.user_id')
        ->where('role_user.role_id', '2')
        ->get();
        return view("Teacher/Pages/index-teachers", compact("users"));
    }
    public function mailInbox()
    {
        return view("Teacher/Pages/mail-inbox");
    }
    public function mapsGoogle()
    {
        return view("Teacher/Pages/maps-google");
    }
    public function mapsMapael()
    {
        return view("Teacher/Pages/maps-mapael");
    }
    public function mapsVector()
    {
        return view("Teacher/Pages/maps-vector");
    }
    public function accountSetting()
    {
        return view("Teacher/Pages/page-account-setting");
    }
    public function contacts()
    {
        $users = DB::table('users')
        ->leftJoin('role_user', 'users.id', '=', 'role_user.user_id')
        ->where('role_user.role_id', '1')
        ->get();
        return view("Teacher/Pages/page-contacts", compact("users"));
    }
    public function employees()
    {
        return view("Teacher/Pages/page-employees");
    }
    public function faq()
    {
        return view("Teacher/Pages/page-faq");
    }
    public function fileManager()
    {
        return view("Teacher/Pages/page-file-manager");
    }
    public function createCourse()
    {
        return view("Teacher/Pages/create-course");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
