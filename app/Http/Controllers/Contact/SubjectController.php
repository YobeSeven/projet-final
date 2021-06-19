<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(){
        $subjects = Subject::all();
        return view('backend.components.partials.subject.subject' , compact('subjects'));
    }

    public function create(){
        return view("backend.components.partials.subject.create");
    }

    public function store(Request $request){
        $request->validate([
            "subject"   =>  ['required' , 'string' , 'max:255'],
        ]);
        Subject::create([
            "subject"   =>  $request->subject,
        ]);
        return redirect()->route('subject.index');
    }

    public function edit(Subject $id){
        $subject = $id ;
        return view('backend.components.partials.subject.edit' , compact('subject'));
    }

    public function update(Request $request , Subject $id){
        $request->validate([
            "subject"   =>  ['required' , 'string' , 'max:255'],
        ]);
        $subject = $id;
        
        $subject->update([
            "subject"   =>  $request->subject,
        ]);
        return redirect()->route('subject.index');
    }

    public function destroy(Subject $id){
        $id->delete();
        return redirect()->back();
    }
}
