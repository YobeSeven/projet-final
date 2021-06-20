<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\Article;
use App\Models\CardAboutSection;
use App\Models\CardService;
use App\Models\CarouselIntro;
use App\Models\Commentaire;
use App\Models\ContactSection;
use App\Models\DeviceService;
use App\Models\FeatureService;
use App\Models\Footer;
use App\Models\HomeTitre;
use App\Models\Intro;
use App\Models\Promotion;
use App\Models\Service;
use App\Models\ServiceTitre;
use App\Models\Subject;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $subjects = Subject::all();
        $footers = Footer::all();
        return view('home' , compact('aboutSections' , 'cardAboutSections' , 'intros' ,
        'testimonials' , 'serviceRandomFor3' , 'serviceRandomFor9' , 'teamRandom1s' , 'teamRandom2s' ,
        'ceos' , 'promotions' , 'contactSections' , 'homeTitres' , 'footers' , 'subjects' , 'carouselIntros'));
    }

    public function service(){
        $url = url()->current();
        $urlCurrent = Str::afterLast($url, '/');
        $services = Service::paginate(6)->fragment('services');
        $featureRandomFor3 = FeatureService::inRandomOrder()->limit(3)->get();
        $articles = Article::all();
        $lastArticles = Article::latest()->take(3)->get();
        $cardServices = CardService::all();
        $contactSections = ContactSection::all();
        $serviceTitres = ServiceTitre::all();
        $deviceServices = DeviceService::all();
        $subjects = Subject::all();
        $footers = Footer::all();
        return view('frontend.pages.services' , compact('urlCurrent' , 'services' , 'serviceTitres' ,
        'featureRandomFor3' , 'contactSections' , 'articles' , 'lastArticles' , 'cardServices' , 'deviceServices' , 'subjects' , 'footers' ));
    }

    public function contact(){
        $url = url()->current();
        $urlCurrent = Str::afterLast($url, '/');
        $contactSections = ContactSection::all();
        $subjects = Subject::all();
        $footers = Footer::all();
        return view('frontend.pages.contact' , compact('urlCurrent','contactSections' , 'subjects' , 'footers'));
    }

    public function blog(){
        $url = url()->current();
        $urlCurrent = Str::afterLast($url, '/');
        $lastArticles = Article::latest()->take(3)->get();
        $articles = Article::paginate(3)->fragment("lastArticles");
        $footers = Footer::all();
        return view('frontend.pages.blog' , compact('urlCurrent' , 'lastArticles' , 'articles' , 'footers'));
    }

    public function blogPost(Article $id){
        $url = url()->current();
        $urlCurrent = Str::afterLast($url, '/');
        $article = $id;
        $commentaires = Commentaire::where('article_id', $article->id)->where('validate', 1)->get();
        $footers = Footer::all();
        return view('frontend.pages.blog-post' , compact('urlCurrent' , 'article' , 'commentaires' , 'footers'));
    }
}
