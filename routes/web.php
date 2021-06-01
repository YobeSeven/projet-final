<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AllAuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetForgotPasswordController;
use App\Http\Controllers\Mail\ContactController;
use App\Http\Controllers\Mail\NewsletterController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('/services', function () {
    return view('frontend.pages.services');
})->name('services');

Route::get('/contact', function () {
    return view('frontend.pages.contact');
})->name('contact');

Route::get('/blog', function () {
    return view('frontend.pages.blog');
})->name('blog');

Route::get('/blog/post', function () {
    return view('frontend.pages.blog-post');
})->name('blog-post');

Route::middleware(['guest'])->group(function () {
    Route::get('/guest/login',[AllAuthController::class , 'login'])->name('login');
    Route::get('/guest/register',[AllAuthController::class , 'register'])->name('register');
    Route::get('/guest/forgot/password',[AllAuthController::class , 'forgotPassword'])->name('forgot-password');
    Route::get('/guest/reset/forgot/password/{token}',[AllAuthController::class , 'resetForgotPassword'])->name('reset-forgot-password');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/auth/admin',[AllAuthController::class , 'admin'])->name("admin");
});


// FUNCTION
Route::get('/store/login',[LoginController::class , 'store'])->name('login.store');
Route::get('/logout/auth',[LoginController::class , 'logout'])->name('logout');
Route::post('/store/auth',[RegisterController::class , 'store'])->name('register.store');
Route::post('/store/forget/password',[ForgotPasswordController::class , 'store'])->name('forgot-password.store');
Route::post('/store/reset/forgot/password',[ResetForgotPasswordController::class , 'store'])->name('reset-forgot-password.store');
Route::post('/store/contact/mail',[ContactController::class , 'store'])->name('contact.store');
Route::post('/store/newsletter',[NewsletterController::class , 'store'])->name('newsletter.store');
Route::delete('/delete/{id}/user',[UserController::class , 'destroy'])->name('user.destroy');
Route::put('/update/role/{id}/user',[UserController::class , 'updateRole'])->name('role.update');