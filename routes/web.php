<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AdminCityController;
use App\Http\Controllers\AdminCompanyController;
use App\Http\Controllers\AdminPrefectureController;
use App\Http\Controllers\MyPostsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::resource('post', PostController::class);

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('register', RegisterController::class)->middleware('guest');
Route::resource('dashboard-users', AdminUsersController::class)->middleware('auth');
Route::resource('dashboard-posts', AdminPostController::class)->middleware('auth');
Route::resource('dashboard-cities', AdminCityController::class)->middleware('auth');
Route::resource('dashboard-companies', AdminCompanyController::class)->middleware('auth');
Route::resource('dashboard-prefectures', AdminPrefectureController::class)->middleware('auth');

Route::resource('settings', UserController::class)->middleware('auth');



Route::resource('my-posts', MyPostsController::class);

Route::get('login', [LoginController::class, 'login'])
    ->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'handle'])->name('handle')
    ->middleware('guest');
Route::post('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');



Route::get('/contact', function () {
    return view('contact');
})->name('contact');




Route::get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard')->middleware('auth');
Route::get('/dashboard/settings', function () {
    return view('admin.settings');
})->name('settings')->middleware('auth');

Route::fallback(function () {
    return view('not-found');
});
