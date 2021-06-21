<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeTitre;
use App\Models\ServiceTitre;
use Illuminate\Http\Request;

class AllTitleController extends Controller
{
    public function index(){
        $homeTitres = HomeTitre::all();
        $serviceTitres = ServiceTitre::all();
        return view("backend.components.allTitles.all-titles" , compact('homeTitres' , 'serviceTitres'));
    }

    public function editTitreHome(HomeTitre $id){
        $homeTitre = $id;
        return view('backend.components.allTitles.edit-home' , compact('homeTitre'));
    }

    public function updateTitreHome(Request $request , HomeTitre $id){
        $request->validate([
            "titre_section"     =>  ["string" , "max:255"],
            "titre_service"     =>  ["string" , "max:255"],
            "titre_team"        =>  ["string" , "max:255"],
            "titre_testimonial" =>  ["string" , "max:255"],
        ]);

        $homeTitre = $id;
        $homeTitre->update([
            "titre_section"     =>  $request->titre_section,
            "titre_service"     =>  $request->titre_service,
            "titre_team"        =>  $request->titre_team,
            "titre_testimonial" =>  $request->titre_testimonial,
        ]);

        return redirect()->route('all-title.index')->with('success' , 'votre update à bien été fait');
    }

    public function editTitreService(ServiceTitre $id){
        $serviceTitre = $id;
        return view('backend.components.allTitles.edit-service' , compact('serviceTitre'));
    }
    
    public function updateTitreService(Request $request , ServiceTitre $id){
        $request->validate([
            "feature"   =>  ["string" , "max:255"],
            "section"   =>  ["string" , "max:255"],
        ]);

        $serviceTitres = $id;
        $serviceTitres->update([
            "feature"   =>  $request->feature,
            "section"   =>  $request->section,
        ]);
        return redirect()->route('all-title.index')->with('success' , 'votre update à bien été fait');
    }
}
