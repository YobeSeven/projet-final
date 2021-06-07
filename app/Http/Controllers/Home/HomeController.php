<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\CarouselIntro;
use App\Models\Intro;
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
}
