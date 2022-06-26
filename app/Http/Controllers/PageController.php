<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\User;

class PageController extends Controller
{
    // public function home() {
    //     return view('pages/home');
    // }

    public function about() {
        $courses = Course::all();
        return view('pages/about', compact("courses"));
    }

    public function contact() {
        $courses = Course::all();
        return view('pages/contact', compact("courses"));
    }

    public function blog() {
        $courses = Course::all();
        return view('pages/blog/blog', compact("courses"));
    }
    
    public function single() {
        $courses = Course::all();
        return view('pages/blog/single', compact("courses"));
    }

    public function forums() {
        $courses = Course::all();
        return view('pages/community/forums', compact("courses"));
    }

    public function course_account() {
        $courses = Course::all();
        return view('pages/courses/course-account', compact("courses"));
    }

    public function course_achievements() {
        $courses = Course::all();
        return view('pages/courses/course-achievements', compact("courses"));
    }

    public function course_faqs() {
        $courses = Course::all();
        return view('pages/courses/course-faqs', compact("courses"));
    }

    public function course_filterable() {
        $courses = Course::all();
        return view('pages/courses/course-filterable', compact("courses"));
    }

    public function course_grid() {
        $courses = Course::all();
        return view('pages/courses/course-grid', compact("courses"));
    }

    public function course_instructors() {
        $courses = Course::all();
        return view('pages/courses/course-instructors', compact("courses"));
    }

    public function course_list() {
        $courses = Course::all();
        return view('pages/courses/course-show', compact("courses"));
    }

    public function course_login() {
        $courses = Course::all();
        return view('pages/courses/course-login', compact("courses"));
    }

    public function course_quiz() {
        $courses = Course::all();
        return view('pages/courses/course-quiz', compact("courses"));
    }

    // public function course_single() {
    //     // $courses = Course::all();
    //     // return view('pages/courses/course-single', compact("courses"));
    //     // return view('pages/courses/course-single');
    // }

    public function course_testimonials() {
        $courses = Course::all();
        return view('pages/courses/course-testimonials', compact("courses"));
    }

    public function page_fullwidth() {
        $courses = Course::all();
        return view('pages/features/page-fullwidth', compact("courses"));
    }

    public function page_pricing() {
        $courses = Course::all();
        return view('pages/features/page-pricing', compact("courses"));
    }

    public function page_services() {
        $courses = Course::all();
        return view('pages/features/page-services', compact("courses"));
    }

    public function page_shop_cart() {
        $courses = Course::all();
        return view('pages/features/page-shop-cart', compact("courses"));
    }

    public function page_shop_single_alt() {
        $courses = Course::all();
        return view('pages/features/page-shop-single-alt', compact("courses"));
    }

    public function page_shop_single() {
        $courses = Course::all();
        return view('pages/features/page-shop-single', compact("courses"));
    }

    public function page_shop() {
        $courses = Course::all();
        return view('pages/features/page-shop', compact("courses"));
    }

    public function page_shortcodes() {
        $courses = Course::all();
        return view('pages/features/page-shortcodes', compact("courses"));
    }

    public function page_sidebar() {
        $courses = Course::all();
        return view('pages/features/page-sidebar', compact("courses"));
    }

    public function page_typography() {
        $courses = Course::all();
        return view('pages/features/page-typography', compact("courses"));
    }
}
