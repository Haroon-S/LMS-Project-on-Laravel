<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [PageController::class, 'home']);

Route::get('home', [PageController::class, 'home']);

Route::get('about', [PageController::class, 'about']);

Route::get('contact', [PageController::class, 'contact']);

Route::get('blog', [PageController::class, 'blog']);

Route::get('single', [PageController::class, 'single']);

Route::get('forums', [PageController::class, 'forums']);

Route::get('course-account', [PageController::class, 'course_account']);

Route::get('course-achievements', [PageController::class, 'course_achievements']);

Route::get('course-faqs', [PageController::class, 'course_faqs']);

Route::get('course-filterable', [PageController::class, 'course_filterable']);

Route::get('course-grid', [PageController::class, 'course_grid']);

Route::get('course-instructors', [PageController::class, 'course_instructors']);

Route::get('course-list', [PageController::class, 'course_list']);

Route::get('course-login', [PageController::class, 'course_login']);

Route::get('course-quiz', [PageController::class, 'course_quiz']);

Route::get('course-single', [PageController::class, 'course_single']);

Route::get('course-testimonials', [PageController::class, 'course_testimonials']);

Route::get('page-fullwidth', [PageController::class, 'page_fullwidth']);

Route::get('page-pricing', [PageController::class, 'page_pricing']);

Route::get('page-services', [PageController::class, 'page_services']);

Route::get('page-shop-cart', [PageController::class, 'page_shop_cart']);

Route::get('page-shop-single-alt', [PageController::class, 'page_shop_single_alt']);

Route::get('page-shop-single', [PageController::class, 'page_shop_single']);

Route::get('page-shop', [PageController::class, 'page_shop']);

Route::get('page-shortcodes', [PageController::class, 'page_shortcodes']);

Route::get('page-sidebar', [PageController::class, 'page_sidebar']);

Route::get('page-typography', [PageController::class, 'page_typography']);