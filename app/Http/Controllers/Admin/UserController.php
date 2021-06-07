<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //* DELETE NEW USER
    public function destroy(User $id){
        $this->authorize('admin');
        $id->delete();
        return redirect()->back();
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
