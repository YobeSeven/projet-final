<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;

class SettingProfileController extends Controller
{
    //* FONCTION POUR CHANGER LE NOM ET L'EMAIL
    public function updateProfile(Request $request){
        
        if ($request->has("nameUpdate")) { 
        // POUR LE NOM ET L"EMAIL //
            if ($request->name == null && $request->email == null) {
                return back();
            } elseif ($request->name == null) {
                $request->validate([
                    "email" => ["string","email","max:255","unique:users"]
                ]);
                Auth::user()->email = $request->email;
                Auth::user()->save();

            } elseif ($request->email == null) {
                $request->validate([
                    "name"  => "string|max:255",
                ]);
                Auth::user()->name = $request->name;
                Auth::user()->save();
            } else {
                $request->validate([
                    "email" => ["string","email","max:255","unique:users"],
                    "name"  => "string|max:255",
                ]);
                Auth::user()->name = $request->name;
                Auth::user()->email = $request->email;
                Auth::user()->save();
            }
            return redirect()->back()->with("success" , "save done");
        } 
    }
    
    //* FONCTION POUR CHANGER LE MOT DE PASSE
    public function updatePassword(Request $request){
        if ($request->has("passwordUpdate")) {
            $checkPassword = Hash::check($request->current_password, Auth::user()->password);
            if ($checkPassword) {            
                $request->validate([
                    "password"=> ["required", "confirmed", Rules\Password::min(8)]
                ]);

                Auth::user()->password = Hash::make($request->password);
                Auth::user()->save();
                return redirect()->back()->with("success" , "save done");
            } else {
                return back()->with("fail" , "wrong password");
            }
        }
    }

    //* FONCTION POUR CHANGER L'IMAGE
    public function updateImage(Request $request){

        if ($request->has('imageUpdate')) {
            $request->validate([
                "image" => ['image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
            ]);

            $request->file('image')->storePublicly('img/' , 'public');
            
            Auth::user()->image = $request->file('image')->hashName();

            Auth::user()->save();

            return redirect()->back()->with("success" , "sauvegarde faite");
        }
    }

    //* FONCTION POUR SUPPRIMER L'IMAGE
    public function destroyImage(Request $request){

        $userImage = Auth::user()->image;
        
        if ($request->has('deleteImage')) {

            if (!($userImage = "profil_vide.jpg")) {

                Storage::disk('public')->delete('img/' . $userImage);

                DB::table('users')->where("id" , Auth::user()->id)->update([
                    "image" => "profil_vide.jpg"
                ]);

            }
        }
        return redirect()->back();
    }

    //* FONCTION POUR METTRE UNE DESCRIPTION
    public function putDescription(Request $request){
        if ($request->has('addDescription')) {
            $request->validate([
                "texte" => ["required","string"]
            ]);

            Auth::user()->texte = $request->texte;
            Auth::user()->save();
        }
        return redirect()->back();
    }

    //* FONCTION POUR SUPPRIMER LE PROFIL
    public function destroyProfile(Request $request){
        if ($request->has("deleteProfile")) {
            // POUR SUPPRIMER LE COMPTE //
            $checkPassword = Hash::check($request->password, Auth::user()->password);
            if ($checkPassword) {
                Auth::user()->delete();
                return redirect()->route("home")->with("success" , "your account has been deleted"); 
            } else {
                return back()->with("fail" , "wrong password");
            }
        }
    }

}
