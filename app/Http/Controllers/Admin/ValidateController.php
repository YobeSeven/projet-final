<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Commentaire;
use App\Models\User;
use Illuminate\Http\Request;

class ValidateController extends Controller
{
    public function index(){
        $users = User::all();
        $userValidates = User::where('validate' , 0)->get();
        $articleValidates = Article::where('validate' , 0)->get();
        $articleDeletes = Article::where('trash' , 1)->get();
        $commentaireValidates = Commentaire::where('validate' , 0)->get();
        return view('backend.components.validate' , compact( 'userValidates' ,'articleValidates' , 'articleDeletes' , 'users' , 'commentaireValidates'));
    }

    public function validateArticle(Article $id){
        $article = $id;
        $article->validate = 1;
        $article->save();
        return redirect()->back()->with('success' , 'votre article a bien été enregistré');
    }

    public function nonValidateArticle(Article $id){
        $article = $id;
        $article->delete();
        return redirect()->back()->with('success' , 'votre article a bien été supprimer');
    }

    public function deleteArticle(Article $id){
        $article = $id;
        $article->delete();
        return redirect()->back()->with('sucess' , 'votre article a bien été supprimer');
    }

    public function restoreDeleteArticle(Article $id){
        $article = $id;
        $article->trash = 0;
        $article->save();
        return redirect()->back()->with('success' , 'votre article à été remis');
    }
}
