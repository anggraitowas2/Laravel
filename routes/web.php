<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PricingController;

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
//     return view('index');
// });
Route::get('edit', function () {
    return view('author.edit');
});
// Route::get('course', function () {
//     return view('author.course');
// });

// Route::get('/author', function () {
//      return view('author.author');
// });
// Route::get('member', function () {
//     return view('author.author');
// });
// Route::get('edit', function () {
//     return view('/author.edit');
// });
// Route::resource('redirects', MemberController::class);
// Route::get('user', function () {
//     return view('author.user');
// });
// Manage Admin
// Route::get('author', [MemberController::class, 'index'])->name('author.author');
// Route::post('users/{id}', [MemberController::class, 'changepassword'])->name('admin.user.changepassword');
// Route::get('users/create', [MemberController::class, 'create'])->name('admin.user.create');
// Route::post('users/create', [MemberController::class, 'store'])->name('admin.user.store');
// Route::get('users/edit/{id}', [MemberController::class, 'edit'])->name('admin.user.edit');
// Route::post('users/edit/{id}', [MemberController::class, 'update'])->name('admin.user.update');
// Route::delete('users/destroy/{id}',[MemberController::class, 'destroy'])->name('admin.user.destroy');

// Route::get('redirects',[IndexController::class,'index']);
//COURSE
Route::get('/author/course',[CourseController::class,'index']);
Route::post('/author/course',[CourseController::class,'create']);
Route::put('/author/course',[CourseController::class,'edit']);
Route::delete('/author/course',[CourseController::class,'destroy']);



//INDEX
Route::get('/',[IndexController::class,'member']);

//MEMBER
Route::get('redirects',[MemberController::class,'index']);
Route::post('redirects',[MemberController::class,'create']);
Route::put('redirects',[MemberController::class,'edit']);
Route::delete('redirects',[MemberController::class,'destroy']);

//WORKSHOP
Route::get('/author/workshop',[WorkshopController::class,'index']);
Route::post('/author/workshop',[WorkshopController::class,'create']);
Route::put('/author/workshop',[WorkshopController::class,'edit']);
Route::delete('/author/workshop',[WorkshopController::class,'destroy']);

//FEEDBACK
Route::get('/author/feedback',[FeedbackController::class,'index']);
Route::post('/author/feedback',[FeedbackController::class,'create']);
Route::put('/author/feedback',[FeedbackController::class,'edit']);
Route::delete('/author/feedback',[FeedbackController::class,'destroy']);

//PRICING
Route::get('/author/pricing',[PricingController::class,'index']);
Route::post('/author/pricing',[PricingController::class,'create']);
Route::put('/author/pricing',[PricingController::class,'edit']);
Route::delete('/author/pricing',[PricingController::class,'destroy']);

// // USER ROUTES
// Route::get('/', 'FrontController@main')->name('main');

// ADMIN ROUTES
// Route::group([
//     'as' => 'admin.',
//     'middleware' => [ 'Admin' ],
// ], function () {
//     Route::get('dashboard', 'AdminController@dashboard');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
