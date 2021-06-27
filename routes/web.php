<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MemberController;

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
    return view('index');
});
Route::get('edit', function () {
    return view('author.edit');
});

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

Route::get('redirects',[MemberController::class,'index']);
Route::post('redirects',[MemberController::class,'create']);
Route::put('redirects',[MemberController::class,'edit']);
// Route::post('redirects',[MemberController::class,'update']);
Route::delete('redirects',[MemberController::class,'destroy']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
