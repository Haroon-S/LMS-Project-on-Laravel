<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('lara', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

require __DIR__.'/auth.php';


Route::get('Home', [AdminController::class,'index'])->middleware('authenticated');
Route::get('app-chat', [AdminController::class,'appChat'])->middleware('authenticated');
Route::get('calendar-full', [AdminController::class,'calendarFull'])->middleware('authenticated');
Route::get('calendar-list', [AdminController::class,'calendarList'])->middleware('authenticated');
Route::get('admin-courses', [CourseController::class,'index'])->middleware('authenticated');
Route::get('admin-requests', [AdminController::class,'indexrequests'])->middleware('authenticated');
Route::get('admin-reviews', [ReviewController::class,'index'])->middleware('authenticated');
Route::get('admin-students', [AdminController::class,'indexStudents'])->middleware('authenticated');
Route::get('admin-teachers', [AdminController::class,'indexTeachers'])->middleware('authenticated');
Route::get('mail-inbox', [AdminController::class,'mailInbox'])->middleware('authenticated');
Route::get('maps-google', [AdminController::class,'mapsGoogle'])->middleware('authenticated');
Route::get('maps-mapael', [AdminController::class,'mapsMapael'])->middleware('authenticated');
Route::get('maps-vector', [AdminController::class,'mapsVector'])->middleware('authenticated');
Route::get('account-setting', [AdminController::class,'accountSetting'])->middleware('authenticated');
Route::get('employees', [AdminController::class,'employees'])->middleware('authenticated');
Route::get('contacts', [AdminController::class,'contacts'])->middleware('authenticated');
Route::get('admin-faq', [AdminController::class,'faq'])->middleware('authenticated');
Route::get('file-manager', [AdminController::class,'fileManager'])->middleware('authenticated');
Route::get("DestroyStudent/{user}",[RegisteredUserController::class,"destroyStudent"]);
Route::get("DestroyTeacher/{user}",[RegisteredUserController::class,"destroyTeacher"]);
Route::get('StudentsPDF', [RegisteredUserController::class, 'studentsPdf']);
Route::get('TeachersPDF', [RegisteredUserController::class, 'teachersPdf']);
Route::get('CoursesPDF', [RegisteredUserController::class, 'coursesPdf']);
Route::get("DestroyCourse/{course}",[CourseController::class,"destroy"]);
Route::get("DestroyReview/{review}",[ReviewController::class,"destroy"]);
Route::post('UpdateProfile/{user}', [RegisteredUserController::class, 'update']);
Route::post('UpdatePassword/{user}', [RegisteredUserController::class, 'updatePassword']);
Route::get('logout', [RegisteredUserController::class, 'destroy']);

Route::get('Teacher-Home', [TeacherController::class,'index'])->middleware('authenticated');
Route::get('teacher-courses', [CourseController::class,'teacherCourses'])->middleware('authenticated');
Route::get('teacher-app-chat', [TeacherController::class,'appChat'])->middleware('authenticated');
Route::get('teacher-calendar-full', [TeacherController::class,'calendarFull'])->middleware('authenticated');
Route::get('teacher-calendar-list', [TeacherController::class,'calendarList'])->middleware('authenticated');
Route::get('teacher-students', [CourseController::class,'teacherCoursesForStudents'])->middleware('authenticated');
Route::get('all-teachers', [TeacherController::class,'indexTeachers'])->middleware('authenticated');
Route::get('teacher-mail-inbox', [TeacherController::class,'mailInbox'])->middleware('authenticated');
Route::get('teacher-maps-google', [TeacherController::class,'mapsGoogle'])->middleware('authenticated');
Route::get('teacher-maps-mapael', [TeacherController::class,'mapsMapael'])->middleware('authenticated');
Route::get('teacher-maps-vector', [TeacherController::class,'mapsVector'])->middleware('authenticated');
Route::get('teacher-account-setting', [TeacherController::class,'accountSetting'])->middleware('authenticated');
Route::get('teacher-contacts', [TeacherController::class,'contacts'])->middleware('authenticated');
Route::get('teacher-faq', [TeacherController::class,'faq'])->middleware('authenticated');
Route::get('teacher-file-manager', [TeacherController::class,'fileManager'])->middleware('authenticated');
Route::get('teacher-reviews', [CourseController::class,'teacherCoursesForReviews'])->middleware('authenticated');
Route::get('create-course', [TeacherController::class,'createCourse'])->middleware('authenticated');
Route::post("store-course/{user}",[CourseController::class,"store"]);
Route::get("DestroyCourse/{course}",[CourseController::class,"destroyTeacher"]);




Route::get('/', [CourseController::class, 'index']);

Route::get('home', [CourseController::class, 'index']);


Route::get('QT', [StudentController::class, 'index']);


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

Route::get('course-single/{$uploadedCourse}', [PageController::class, 'course_single']);

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