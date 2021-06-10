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
use App\Models\ServiceTitre;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AllPagesController extends Controller
{
    public function home(){
        $intros = Intro::all();
        $carouselIntros = CarouselIntro::all();
        $aboutSections = AboutSection::all();
        $cardAboutSections = CardAboutSection::all();
        $testimonials = Testimonial::all();
        $serviceRandomFor3 = Service::inRandomOrder()->limit(3)->get();
        $serviceRandomFor9 = Service::inRandomOrder()->limit(9)->get();
        $teams = User::where('poste_id' ,'!=' , 1)->get();
        $teamRandom1s = $teams->random(1);
        $teamRandom2s = $teams->random(1);
        $ceos = User::where('poste_id' , '=' , 1)->get();
        $promotions = Promotion::all();
        $contactSections = ContactSection::all();
        $homeTitres = HomeTitre::all();
        $footers = Footer::all();
        return view('home' , compact('aboutSections' , 'cardAboutSections' , 'intros' ,
        'testimonials' , 'serviceRandomFor3' , 'serviceRandomFor9' , 'teamRandom1s' , 'teamRandom2s' ,
        'ceos' , 'promotions' , 'contactSections' , 'homeTitres' , 'footers' , 'carouselIntros'));
    }

    public function service(){
        $url = url()->current();
        $urlCurrent = Str::afterLast($url, '/');
        $services = Service::all();
        $featureRandomFor3 = FeatureService::inRandomOrder()->limit(3)->get();
        $cardServices = CardService::all();
        $contactSections = ContactSection::all();
        $serviceTitres = ServiceTitre::all();
        $deviceServices = DeviceService::all();
        $footers = Footer::all();
        return view('frontend.pages.services' , compact('urlCurrent' , 'services' , 'serviceTitres' ,
        'featureRandomFor3' , 'contactSections' , 'cardServices' , 'deviceServices' , 'footers'));
    }

    public function contact(){
        $url = url()->current();
        $urlCurrent = Str::afterLast($url, '/');
        $contactSections = ContactSection::all();
        $footers = Footer::all();
        return view('frontend.pages.contact' , compact('urlCurrent','contactSections' , 'footers'));
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
