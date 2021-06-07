<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AllPagesController;
use App\Http\Controllers\Auth\AllAuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetForgotPasswordController;
use App\Http\Controllers\Auth\SettingProfileController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Mail\ContactController;
use App\Http\Controllers\Mail\NewsletterController;
use App\Http\Controllers\Partials\FooterController;
use Hamcrest\Core\Set;
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
//& ROUTE FRONTEND

Route::get('/',[AllPagesController::class , 'home'])->name('home');
Route::get('/services',[AllPagesController::class , 'service'])->name('services');
Route::get('/contact',[AllPagesController::class , 'contact'])->name('contact');
Route::get('/blog',[AllPagesController::class , 'blog'])->name('blog');
Route::get('/blog/poste',[AllPagesController::class , 'blogPost'])->name('blog-post');

//& ROUTE APRES CONNEXION
Route::middleware(['auth'])->group(function () {
    Route::middleware(['admin'])->group(function () {
        Route::get('/admin/home',[HomeController::class , 'home'])->name('home.index');
        Route::get('/admin/home/intro',[HomeController::class , 'intro'])->name('intro.index');
        Route::get('/change/footer',[FooterController::class , 'index'])->name('footer.index');
        Route::get('/edit/{id}/footer',[FooterController::class , 'edit'])->name('footer.edit');
    });
    Route::get('/auth/admin',[AllAuthController::class , 'admin'])->name('admin');
    Route::get('/auth/profile',[AllAuthController::class , 'profile'])->name('profile');
});

//& ROUTE SEULEMENT POUR LES NON-CONNECTES
Route::middleware(['guest'])->group(function () {
    Route::get('/login',[AllAuthController::class , 'login'])->name('login');
    Route::get('/register',[AllAuthController::class , 'register'])->name('register');
    Route::get('/forgot/password',[AllAuthController::class , 'forgotPassword'])->name('forgot-password');
    Route::get('/reset/forgot/password/{token}',[AllAuthController::class , 'resetForgotPassword'])->name('reset-forgot-password');
});

//& FUNCTION
    //! AUTH
Route::get('/store/login',[LoginController::class , 'store'])->name('login.store');
Route::get('/logout/auth',[LoginController::class , 'logout'])->name('logout');
Route::post('/store/auth',[RegisterController::class , 'store'])->name('register.store');
Route::post('/store/forget/password',[ForgotPasswordController::class , 'store'])->name('forgot-password.store');
Route::post('/store/reset/forgot/password',[ResetForgotPasswordController::class , 'store'])->name('reset-forgot-password.store');
    //! MAIL
Route::post('/store/contact/mail',[ContactController::class , 'store'])->name('contact.store');
Route::post('/store/newsletter',[NewsletterController::class , 'store'])->name('newsletter.store');
    //! ADMIN CONTROLL
Route::delete('/delete/{id}/user',[UserController::class , 'destroy'])->name('user.destroy');
Route::put('/update/role/{id}/user',[UserController::class , 'updateRole'])->name('role.update');
    //! PROFILE
Route::put('update/profile',[SettingProfileController::class , 'updateProfile'])->name('setting-profile.updateProfile');
Route::put('update/password',[SettingProfileController::class , 'updatePassword'])->name('setting-profile.updatePassword');
Route::put('update/image',[SettingProfileController::class , 'updateImage'])->name('setting-profile.updateImage');
Route::delete('delete/profile',[SettingProfileController::class , 'destroyProfile'])->name('setting-profile.destroyProfile');
Route::delete('delete/image/profile',[SettingProfileController::class , 'destroyImage'])->name('setting-profile.imageDestroy');
Route::post('user/description',[SettingProfileController::class , 'putDescription'])->name('setting-profile.putDescription');
    //! FOOTER COMPONENTS
Route::put('update/{id}/footer',[FooterController::class , 'update'])->name('footer.update');