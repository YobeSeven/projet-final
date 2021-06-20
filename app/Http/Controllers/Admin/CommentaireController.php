<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function store(Request $request , $id){
        $request->validate([
            "email" =>  ['required' , 'email' , 'string' , 'max:255'],
            "auteur"    =>  ['required' , 'string' , 'max:255'],
            "message"   =>  ['required' , 'string']
        ]);

        Commentaire::create([
            "email" =>  $request->email,
            "auteur"    =>  $request->auteur,
            "message"   =>  $request->message,
            "validate"  =>  0,
            "article_id"    =>  $id,
        ]);

        return redirect()->back()->with('success' , 'Votre commentaire a été poster');
    }

    public function validateCommentaire(Commentaire $id){
        $commentaire = $id;
        $commentaire->validate = 1;
        $commentaire->save();
        return redirect()->back()->with('success' , 'commentaire validate');
    }

    public function nonValidateCommentaire(Commentaire $id){
        $commentaire = $id;
        $commentaire->delete();
        return redirect()->back()->with('success' , 'commentaire supprimer');
    }
}
