<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function destroy(User $id){
        $this->authorize('admin');
        $id->delete();
        return redirect()->back();
    }
}
