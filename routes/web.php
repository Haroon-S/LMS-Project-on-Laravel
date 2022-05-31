<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
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