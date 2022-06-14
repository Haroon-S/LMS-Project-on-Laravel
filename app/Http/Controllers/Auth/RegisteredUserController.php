<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Course;
use App\Models\Review;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use PDF;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'picture' => ['required'],
        ]);

        $picture = $request->file("picture");
        $data["picture"] = Str::uuid(). '.' .$picture->getClientOriginalExtension();
        $picture->move("Pictures", $data["picture"]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'picture' => $data["picture"],
        ]);

        event(new Registered($user));

        Auth::login($user);
      
        $user->attachRole($request->role_id);
        //$user->attachRole('admin');

        return redirect(RouteServiceProvider::HOME);
    }

    public function destroyStudent(User $user)
    {
        if(File::exists('Pictures/'.$user->picture)) {
            File::delete('Pictures/'.$user->picture);
        }

        $user->delete();
        return redirect(url('admin-students'));
    }

    public function destroyTeacher(User $user)
    {
        if(File::exists('Pictures/'.$user->picture)) {
            File::delete('Pictures/'.$user->picture);
        }

        $courses =Course::where('user_id', $user->id)->get();

        foreach($courses as $course)
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
        }

        $user->delete();
        return redirect(url('admin-teachers'));
    }

    public function studentsPdf()
    {
        $users = DB::table('users')
        ->leftJoin('role_user', 'users.id', '=', 'role_user.user_id')
        ->where('role_user.role_id', '3')
        ->get();
        $pdf=PDF::loadView("Admin/PDF/Students", compact("users"))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download("students.pdf");
    }

    public function teachersPdf()
    {
        $users = DB::table('users')
        ->leftJoin('role_user', 'users.id', '=', 'role_user.user_id')
        ->where('role_user.role_id', '2')
        ->get();
        $pdf=PDF::loadView("Admin/PDF/Teachers", compact("users"))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download("teachers.pdf");
    }

    public function coursesPdf()
    {
        $courses=Course::all();
        $pdf=PDF::loadView("Admin/PDF/Courses", compact("courses"));
        return $pdf->download("courses.pdf");
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            "name" => "required|max:50",
            "email" => "required",
        ]);

        if( $request->file("picture") ){

            //delete old file from dir
            File::delete('Pictures/'.$user->picture);

            // put new file in dir
            $file = $request->file('picture');
            $data['picture'] = Str::uuid(). '.' .$file->getClientOriginalExtension();
            $file->move('Pictures/', $data['picture']);
        }

        $user->update($data);

        return redirect(url('account-setting'));
    }

    public function updatePassword(Request $request, User $user)
    {
        $password = $request->validate([
            "password" => "required",
        ]);

        $user->update($password);

        return redirect(url('logout'));
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();
        
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

}
