<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //* DELETE NEW USER
    public function destroy(User $id){
        $this->authorize('admin');
        $user = $id;
        $article = $user->article;
        $article->each->delete();
        $user->delete();
        return redirect()->back();
    }

    //* Validate USER
    public function validateUser(User $id){
        $user = $id;
        $user->validate = 1;
        $user->save();
        return redirect()->back()->with('success' , 'user validated');
    }

    public function nonValidateUser(User $id){
        $user = $id;
        $user->delete();
        return redirect()->back()->with('success' , 'user non validated');
    }

    //* UPDATE ROLE OF USER
    public function updateRole(User $id,Request $request){
        if ($request->has('roleForUpdate')) {
            $request->validate([
                "role_id" => ["required"]
            ]);
            $user = $id;
            $user->role_id = $request->role_id;
            $user->save();
            return redirect()->back();
        }
    }
}
