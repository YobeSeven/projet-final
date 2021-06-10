<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AboutSectionController extends Controller
{
    public function edit(AboutSection $id){
        $aboutSection = $id;
        return view('backend.components.home.about-section.edit' , compact('aboutSection'));
    }

    public function update(AboutSection $id , Request $request){
        $request->validate([
            "titre_section"             =>  ["string" , "max:255"],
            "texte_premier_section"     =>  ["string"],
            "texte_deuxieme_section"    =>  ["string"],
            "lien"                      =>  ["url"],
        ]);
        $aboutSection = $id;
        $verifLien = $request->lien;
        $verifLien1 = Str::substr($verifLien, 12, 7);
        $verifLien2 = Str::substr($verifLien, 8, 8);
        $codeLien2 = Str::substr($verifLien, 17);
        if ($verifLien1 === "youtube") {
            $aboutSection->update([
                "titre_section"             =>  $request->titre_section,
                "texte_premier_section"     =>  $request->texte_premier_section,
                "texte_deuxieme_section"    =>  $request->texte_deuxieme_section,
                "lien"                      =>  $request->lien
            ]);            
            return redirect()->route('aboutSection.index');
        } elseif ($verifLien2 === "youtu.be") {
            $changeLien = "https://wwww.youtube.com/watch?v=" . $codeLien2 ;
            $aboutSection->update([
                "titre_section"             =>  $request->titre_section,
                "texte_premier_section"     =>  $request->texte_premier_section,
                "texte_deuxieme_section"    =>  $request->texte_deuxieme_section,
                "lien"                      =>  $changeLien,
            ]);            
            return redirect()->route('aboutSection.index');
        }
    }
}
