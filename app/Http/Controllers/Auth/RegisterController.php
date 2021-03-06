<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use App\Mail\RegisterSender;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;

class RegisterController extends Controller
{
    public function store(Request $request){
    
        $request->validate([
            "name"      => "required|string|max:255",
            "poste_id"  => "required|string",
            "email"     => "required|string|email|max:255|unique:users",
            "password"  => ["required", "confirmed", Rules\Password::min(8)],
        ]);
        
        $user = User::create([
            "name"      => $request->name,
            "poste_id"  => $request->poste_id,
            "role_id"   =>  4,
            "image"     => "profil_vide.jpg",
            "validate"  =>  0,
            "email"     => $request->email,
            "password"  => Hash::make($request->password),
        ]);
        
        event(new Registered($user));
        // Mail::to($request->email)->send(new RegisterSender($request));
        Auth::login($user);
        return redirect()->route("admin")->with("success" , "Account created ! We sent you an email");
    }

}
