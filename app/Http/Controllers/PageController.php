<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\User;

class PageController extends Controller
{
    public function home() {
        return view('pages/home');
    }

    public function about() {
        $uploadedCourse = Course::all();
        return view('pages/about', compact("uploadedCourse"));
    }

    public function contact() {
        $uploadedCourse = Course::all();
        return view('pages/contact', compact("uploadedCourse"));
    }

    public function blog() {
        $uploadedCourse = Course::all();
        return view('pages/blog/blog', compact("uploadedCourse"));
    }
    
    public function single() {
        $uploadedCourse = Course::all();
        return view('pages/blog/single', compact("uploadedCourse"));
    }

    public function forums() {
        $uploadedCourse = Course::all();
        return view('pages/community/forums', compact("uploadedCourse"));
    }

    public function course_account() {
        $uploadedCourse = Course::all();
        return view('pages/courses/course-account', compact("uploadedCourse"));
    }

    public function course_achievements() {
        $uploadedCourse = Course::all();
        return view('pages/courses/course-achievements', compact("uploadedCourse"));
    }

    public function course_faqs() {
        $uploadedCourse = Course::all();
        return view('pages/courses/course-faqs', compact("uploadedCourse"));
    }

    public function course_filterable() {
        $uploadedCourse = Course::all();
        return view('pages/courses/course-filterable', compact("uploadedCourse"));
    }

    public function course_grid() {
        $uploadedCourse = Course::all();
        return view('pages/courses/course-grid', compact("uploadedCourse"));
    }

    public function course_instructors() {
        $uploadedCourse = Course::all();
        return view('pages/courses/course-instructors', compact("uploadedCourse"));
    }

    public function course_list() {
        $uploadedCourse = Course::all();
        return view('pages/courses/course-list', compact("uploadedCourse"));
    }

    public function course_login() {
        $uploadedCourse = Course::all();
        return view('pages/courses/course-login', compact("uploadedCourse"));
    }

    public function course_quiz() {
        $uploadedCourse = Course::all();
        return view('pages/courses/course-quiz', compact("uploadedCourse"));
    }

    public function course_single() {
        $uploadedCourse = Course::all();
        return view('pages/courses/course-single', compact("uploadedCourse"));
    }

    public function course_testimonials() {
        $uploadedCourse = Course::all();
        return view('pages/courses/course-testimonials', compact("uploadedCourse"));
    }

    public function page_fullwidth() {
        $uploadedCourse = Course::all();
        return view('pages/features/page-fullwidth', compact("uploadedCourse"));
    }

    public function page_pricing() {
        $uploadedCourse = Course::all();
        return view('pages/features/page-pricing', compact("uploadedCourse"));
    }

    public function page_services() {
        $uploadedCourse = Course::all();
        return view('pages/features/page-services', compact("uploadedCourse"));
    }

    public function page_shop_cart() {
        $uploadedCourse = Course::all();
        return view('pages/features/page-shop-cart', compact("uploadedCourse"));
    }

    public function page_shop_single_alt() {
        $uploadedCourse = Course::all();
        return view('pages/features/page-shop-single-alt', compact("uploadedCourse"));
    }

    public function page_shop_single() {
        $uploadedCourse = Course::all();
        return view('pages/features/page-shop-single', compact("uploadedCourse"));
    }

    public function page_shop() {
        $uploadedCourse = Course::all();
        return view('pages/features/page-shop', compact("uploadedCourse"));
    }

    public function page_shortcodes() {
        $uploadedCourse = Course::all();
        return view('pages/features/page-shortcodes', compact("uploadedCourse"));
    }

    public function page_sidebar() {
        $uploadedCourse = Course::all();
        return view('pages/features/page-sidebar', compact("uploadedCourse"));
    }

    public function page_typography() {
        $uploadedCourse = Course::all();
        return view('pages/features/page-typography', compact("uploadedCourse"));
    }
}
