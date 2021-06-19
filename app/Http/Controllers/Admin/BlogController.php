<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\NewArticleSender;
use App\Models\Article;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index(){
        $articles = Article::all();
        return view("backend.components.blog.blog" , compact('articles'));
    }

    public function edit(Article $id){
        $article = $id;
        return view('backend.components.blog.edit' , compact('article'));
    }

    public function update(Article $id , Request $request){
        $this->authorize('webmaster');
        $request->validate([
            "titre"  =>  ['string','max:255'],
            "article"   =>  ['string'],
            "image"     =>  ['image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
            "categorie_id"  =>  ['numeric'],
            "tag_id"    =>  ['numeric'],
        ]);
        $article = $id;
        if ($request->file('image') != null) {
            if ($article->image == 'blog-1.jpg' || $article->image == 'blog-2.jpg' || $article->image == 'blog-3.jpg') {
                $request->file('image')->storePublicly('img/blog/' , 'public');
                $article->update([
                    "titre"         =>  $request->titre,
                    "article"       =>  $request->article,
                    "image"         =>  $request->file('image')->hashName(),
                    "categorie_id"  =>  $request->categorie_id,
                    "tag_id"        =>  $request->tag_id,
                ]);
                return redirect()->back();
            } else {
                Storage::disk('public')->delete('img/blog/' . $article->image);
                $request->file('image')->storePublicly('img/blog/' , 'public');
                $article->update([
                    "titre"         =>  $request->titre,
                    "article"       =>  $request->article,
                    "image"         =>  $request->file('image')->hashName(),
                    "categorie_id"  =>  $request->categorie_id,
                    "tag_id"        =>  $request->tag_id,
                ]);
                return redirect()->back();
            }
        } else {
            $article->update([
                "titre"         =>  $request->titre,
                "article"       =>  $request->article,
                "categorie_id"  =>  $request->categorie_id,
                "tag_id"        =>  $request->tag_id,
            ]);
            return redirect()->back();
        }
    }

    public function create(){
        return view('backend.components.blog.create');
    }

    public function store(Request $request){
        $this->authorize('webmaster');
        $request->validate([
            "titre" =>  ['required' , 'string' , 'max:255'],
            "article" =>  ['required' , 'string' , 'max:255'],
            // "image" =>  ['required' , 'image' , 'mimes:jpeg,png,jpg,gif,svg' , 'max:2048'],
            "categorie_id" =>  ['required' , 'numeric'],
            "tag_id"    =>  ['required' , 'numeric'],
        ]);
        $request->file('image')->storePublicly('img/blog/' , 'public');
        $userId = Auth::user()->id;
        $article = new Article();
        $article->user_id       =   $userId;
        $article->titre         =   $request->titre;
        $article->article       =   $request->article;
        $article->image         =   $request->file('image')->hashName();
        $article->categorie_id  =   $request->categorie_id;
        $article->tag_id        =   $request->tag_id;        
        $article->save();

        $newletters = Newsletter::all();
        foreach ($newletters as  $value) {
            $mail = $value->mail;
            Mail::to('pour.serveur.pro.1234@gmail.com')->send(new NewArticleSender($mail));
        }
        return redirect()->route('blog.index');
    }

    public function destroy(Article $id){
        $article = $id;
        $article->delete();
        return redirect()->back();
    }
}
