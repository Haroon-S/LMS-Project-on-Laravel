<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        // $no_students =DB::table('users')->whereRoleIs('student')->count();
        $no_students = User::whereRoleIs('student')->count();
        echo $no_students;
        // $users  = User::with('roles')->paginate(10);
        // echo $users;
        // foreach ($users as $user ) {
        // echo ( $user->roles->first()->display_name );
        // }
        // $students = Auth::user()->roles;
        
        //     echo $students;
            // return view('qt', compact("no_students"));
            return view('pages/show-course');
        // if(Auth::user()->hasRole('student')){
        //     $students = User::all();
        //     echo $students;
        //     return view('qt');
        //   }
        //   else
        //   {}
    }


    public function showCourse()
    {
        return view('show-course');
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
