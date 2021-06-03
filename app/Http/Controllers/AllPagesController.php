<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\CardAboutSection;
use App\Models\CarouselIntro;
use App\Models\ContactSection;
use App\Models\HomeTitre;
use App\Models\Intro;
use App\Models\Promotion;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AllPagesController extends Controller
{
    public function home(){
        $aboutSections = AboutSection::all();
        $cardAboutSections = CardAboutSection::all();
        $intros = Intro::all();
        $carouselIntros = CarouselIntro::all();
        $testimonials = Testimonial::all();
        $services = Service::all();
        $teams = Team::all();
        $promotions = Promotion::all();
        $contactSections = ContactSection::all();
        $homeTitres = HomeTitre::all();
        return view('home' , compact('aboutSections' , 'cardAboutSections' , 'intros' , 'carouselIntros' , 'testimonials' , 'services' , 'teams' , 'promotions' , 'contactSections' , 'homeTitres'));
    }

    public function service(){
        $contactSections = ContactSection::all();
        return view('frontend.pages.services' , compact('contactSections'));
    }

    public function contact(){
        $contactSections = ContactSection::all();
        return view('frontend.pages.contact' , compact('contactSections'));
    }

    public function blog(){
        return view('frontend.pages.blog');
    }

    public function blogPost(){
        return view('frontend.pages.blog-post');
    }
}
