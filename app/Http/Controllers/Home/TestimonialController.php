<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function edit(Testimonial $id){
        $testimonial = $id;
        return view('backend.components.home.testimonial.edit' , compact('testimonial'));
    }

    public function update(Testimonial $id , Request $request){
        $this->authorize('admin');
        $request->validate([
            "texte_client"  =>  ["string"],
            // "image_client"  =>  ['image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
            "nom_client"    =>  ["string"],
            "job_client"    =>  ["string"],
        ]);

        $testimonial = $id;
        if (($request->file('image_client') != null)) {
            $request->file('image_client')->storePublicly('img/avatar/' , 'public');
            if ($testimonial->image_client == "01.jpg" || $testimonial->image_client == "02.jpg" || $testimonial->image_client == "03.jpg") {
                $testimonial->update([
                    "texte_client"  =>  $request->texte_client,
                    "image_client"  =>  $request->file('image_client')->hashName(),
                    "nom_client"    =>  $request->nom_client,
                    "job_client"    =>  $request->job_client,
                ]);
            } else {
                Storage::disk('public')->delete('img/avatar/' . $id->image_client);
                $testimonial->update([
                    "texte_client"  =>  $request->texte_client,
                    "image_client"  =>  $request->file('image_client')->hashName(),
                    "nom_client"    =>  $request->nom_client,
                    "job_client"    =>  $request->job_client,
                ]);
            }
            return redirect()->route('testimonial.index');
        } else {
            $testimonial->update([
                "texte_client"  =>  $request->texte_client,
                "nom_client"    =>  $request->nom_client,
                "job_client"    =>  $request->job_client,
            ]);
            return redirect()->route('testimonial.index');
        };
    }
}
