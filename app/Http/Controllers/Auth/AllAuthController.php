<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllAuthController extends Controller
{
    public function register(){
        return view('backend.auth.register');
    }

    public function login(){
        return view('backend.auth.login');
    }

    public function forgotPassword(){
        return view('backend.auth.forgot-password');
    }

    public function ResetForgotPassword($token){
        return view('backend.auth.reset-forgot-password',["token" => $token]);
    }

    public function admin(User $users){
        $users = User::all();
        return view('backend.admin' , compact('users'));
    }
    
    public function profile(){
        return view('backend.auth.profile');
    }
}
