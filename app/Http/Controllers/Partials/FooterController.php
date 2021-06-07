<?php

namespace App\Http\Controllers\Partials;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index(){
        $footers = Footer::all();
        return view('backend.components.partials.footer' , compact('footers'));
    }

    public function edit(Footer $id){
        $footer = $id;
        return view('backend.components.partials.footer-edit' , compact('footer'));
    }

    public function update(Footer $id , Request $request){
        $this->authorize('admin');
        $request->validate([
            "texte"         =>  ["required" , "string" , "max:255"],
            "lien"          =>  ["required" , "url"],
            "lien_texte"    =>  ["required" , "string" , "max:255" ],
        ]);
        $footer = $id ;
        $footer->update([
            "texte"         =>  $request->texte,
            "lien"          =>  $request->lien,
            "lien_texte"    =>  $request->lien_texte,
        ]);
        return redirect()->route('footer.index')->with("success" , "update done");
    }
}
