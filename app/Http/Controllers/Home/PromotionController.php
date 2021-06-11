<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function edit(Promotion $id){
        $promotion = $id;
        return view('backend.components.home.promotion.edit' , compact('promotion'));
    }

    public function update(Promotion $id , Request $request){
        $this->authorize('admin');
        $request->validate([
            "titre_promotion"   =>  ["string" , "max:255"],
            "texte_promotion"   =>  ["string"]
        ]);
        $promotion = $id;
        $promotion->update([
            "titre_promotion"   =>  $request->titre_promotion,
            "texte_promotion"   =>  $request->texte_promotion,
        ]);
        return redirect()->route('promotion.index');
    }
}
