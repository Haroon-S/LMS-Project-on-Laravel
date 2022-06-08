<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('pages/home');
    }

    public function about() {
        return view('pages/about');
    }

    public function contact() {
        return view('pages/contact');
    }

    public function blog() {
        return view('pages/blog/blog');
    }
    
    public function single() {
        return view('pages/blog/single');
    }

    public function forums() {
        return view('pages/community/forums');
    }

    public function course_account() {
        return view('pages/courses/course-account');
    }

    public function course_achievements() {
        return view('pages/courses/course-achievements');
    }

    public function course_faqs() {
        return view('pages/courses/course-faqs');
    }

    public function course_filterable() {
        return view('pages/courses/course-filterable');
    }

    public function course_grid() {
        return view('pages/courses/course-grid');
    }

    public function course_instructors() {
        return view('pages/courses/course-instructors');
    }

    public function course_list() {
        return view('pages/courses/course-list');
    }

    public function course_login() {
        return view('pages/courses/course-login');
    }

    public function course_quiz() {
        return view('pages/courses/course-quiz');
    }

    public function course_single() {
        return view('pages/courses/course-single');
    }

    public function course_testimonials() {
        return view('pages/courses/course-testimonials');
    }

    public function page_fullwidth() {
        return view('pages/features/page-fullwidth');
    }

    public function page_pricing() {
        return view('pages/features/page-pricing');
    }

    public function page_services() {
        return view('pages/features/page-services');
    }

    public function page_shop_cart() {
        return view('pages/features/page-shop-cart');
    }

    public function page_shop_single_alt() {
        return view('pages/features/page-shop-single-alt');
    }

    public function page_shop_single() {
        return view('pages/features/page-shop-single');
    }

    public function page_shop() {
        return view('pages/features/page-shop');
    }

    public function page_shortcodes() {
        return view('pages/features/page-shortcodes');
    }

    public function page_sidebar() {
        return view('pages/features/page-sidebar');
    }

    public function page_typography() {
        return view('pages/features/page-typography');
    }
}
