<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use App\Models\CarouselIntro;
use App\Models\HomeTitre;
use App\Models\Intro;
use App\Models\Promotion;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('backend.components.home.home');
    }
    
    public function intro(){
        $intros = Intro::all();
        $carouselIntros = CarouselIntro::all();
        return view('backend.components.home.intro.intro' , compact('intros' , 'carouselIntros'));
    }

    public function aboutSection(){
        $aboutSections = AboutSection::all();
        return view('backend.components.home.about-section.about-section' , compact('aboutSections'));
    }

    public function testimonial(){
        $testimonials = Testimonial::all();
        $homeTitres = HomeTitre::all();
        return view('backend.components.home.testimonial.testimonial' , compact('testimonials' , 'homeTitres'));
    }

    public function team(){
        return view('backend.components.home.team.team');
    }

    public function promotion(){
        $promotions = Promotion::all();
        $homeTitres = HomeTitre::all();
        return view('backend.components.home.promotion.promotion' , compact('promotions' , 'homeTitres'));
    }
}
