<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\CardAboutSection;
use App\Models\CardService;
use App\Models\CarouselIntro;
use App\Models\ContactSection;
use App\Models\DeviceService;
use App\Models\FeatureService;
use App\Models\Footer;
use App\Models\HomeTitre;
use App\Models\Intro;
use App\Models\Promotion;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Support\Str;
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
        $footers = Footer::all();
        return view('home' , compact('aboutSections' , 'cardAboutSections' , 'intros' , 'carouselIntros' , 'testimonials' , 'services' , 'teams' , 'promotions' , 'contactSections' , 'homeTitres' , 'footers'));
    }

    public function service(){
        $url = url()->current();
        $urlCurrent = Str::afterLast($url, '/');
        $services = Service::all();
        $contactSections = ContactSection::all();
        $cardServices = CardService::all();
        $featureServices = FeatureService::all();
        $deviceServices = DeviceService::all();
        $footers = Footer::all();
        return view('frontend.pages.services' , compact('urlCurrent','services','contactSections','cardServices' ,'featureServices' , 'deviceServices' , 'footers'));
    }

    public function contact(){
        $url = url()->current();
        $urlCurrent = Str::afterLast($url, '/');
        $contactSections = ContactSection::all();
        $footers = Footer::all();
        return view('frontend.pages.contact' , compact('urlCurrent','contactSections'));
    }

    public function blog(){
        $url = url()->current();
        $urlCurrent = Str::afterLast($url, '/');
        $footers = Footer::all();
        return view('frontend.pages.blog' , compact('urlCurrent' , 'footers'));
    }

    public function blogPost(){
        $url = url()->current();
        $urlCurrent = Str::afterLast($url, '/');
        $footers = Footer::all();
        return view('frontend.pages.blog-post' , compact('urlCurrent' , 'footers'));
    }
}
