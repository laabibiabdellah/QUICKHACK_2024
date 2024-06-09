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
use Illuminate\Support\Facades\Route;


Route::resource('post', PostController::class);

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('register', RegisterController::class);
Route::resource('dashboard-users', AdminUsersController::class);
Route::resource('dashboard-posts', AdminPostController::class);
Route::resource('dashboard-cities', AdminCityController::class);
Route::resource('dashboard-companies', AdminCompanyController::class);
Route::resource('dashboard-prefectures', AdminPrefectureController::class);


Route::resource('my-posts', MyPostsController::class);

Route::get('login', [LoginController::class, 'login'])
    ->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'handle'])->name('handle')
    ->middleware('guest');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');



Route::get('/contact', function () {
    return view('contact');
})->name('contact');




Route::get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');
Route::get('/dashboard/settings', function () {
    return view('admin.settings');
})->name('settings');

Route::fallback(function () {
    return view('not-found');
});
