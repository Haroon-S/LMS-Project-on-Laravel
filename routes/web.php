<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('laravel', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

require __DIR__.'/auth.php';


Route::get('Home', [AdminController::class,'index']);
Route::get('app-chat', [AdminController::class,'appChat']);
Route::get('auth-lock-screen', [AdminController::class,'authLock']);
Route::get('auth-login', [AdminController::class,'authLogin']);
Route::get('auth-register', [AdminController::class,'authRegister']);
Route::get('calendar-full', [AdminController::class,'calendarFull']);
Route::get('calendar-list', [AdminController::class,'calendarList']);
Route::get('admin-courses', [AdminController::class,'indexCourses']);
Route::get('admin-requests', [AdminController::class,'indexrequests']);
Route::get('admin-reviews', [AdminController::class,'indexReviews']);
Route::get('admin-students', [AdminController::class,'indexStudents']);
Route::get('admin-teachers', [AdminController::class,'indexTeachers']);
Route::get('mail-inbox', [AdminController::class,'mailInbox']);
Route::get('maps-google', [AdminController::class,'mapsGoogle']);
Route::get('maps-mapael', [AdminController::class,'mapsMapael']);
Route::get('maps-vector', [AdminController::class,'mapsVector']);
Route::get('account-setting', [AdminController::class,'accountSetting']);
Route::get('coming-soon', [AdminController::class,'comingSoon']);
Route::get('empolyees', [AdminController::class,'employees']);
Route::get('contacts', [AdminController::class,'contacts']);
Route::get('admin-faq', [AdminController::class,'faq']);
Route::get('file-manager', [AdminController::class,'fileManager']);
Route::get('admin-teachers-list', [AdminController::class,'teachers']);

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