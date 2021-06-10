<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\NewsletterSender;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function store(Request $request){
        if ($request->has('newsletterForStore')) {
            $request->validate([
                "mail" => ["required","string","email","max:255"],
            ]);
            $newsletter = Newsletter::create([
                "mail" => $request->mail,
            ]);
            
            Mail::to("pour.serveur.pro.1234@gmail.com")->send(new NewsletterSender($request));
            return redirect()->back();
        }
    }
}
