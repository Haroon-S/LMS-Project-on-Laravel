<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\Course;
use App\Models\Role;
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
    public function calendarFull()
    {
        return view("Admin/Pages/calendar-full");
    }
    public function calendarList()
    {
        return view("Admin/Pages/calendar-list");
    }
    public function indexRequests()
    {
        return view("Admin/Pages/index-requests");
    }
    public function indexStudents()
    {
        $users=User::all();
        $roles=Role::all();
        return view("Admin/Pages/index-students", compact("users","roles"));
    }
    public function indexTeachers()
    {
        $users=User::all();
        return view("Admin/Pages/index-teachers", compact("users"));
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
    public function contacts()
    {
        $users=User::all();
        return view("Admin/Pages/page-contacts", compact("users"));
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
        $users=User::all();
        return view("Admin/Pages/page-teachers", compact("users"));
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
        /*if(File::exists('Pictures/'.$admin->picture)) {
            File::delete('Pictures/'.$admin->picture);
        }

        $admin->delete();
        return redirect(url('admin-students'));*/
    }
}
