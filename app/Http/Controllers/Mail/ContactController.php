<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\ContactSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request){
        if ($request->has('contactForStore')) {
            $request->validate([
                "name"  => ["required","string","max:160"],
                "mail" => ["required","string","email","max:255"],
                "subject" => ["required","string","max:255"],
                "message" => ["required","string"]
            ]);
            Mail::to("pour.serveur.pro.1234@gmail.com")->send(new ContactSender($request));
            return redirect()->back();
        }
    }

}
