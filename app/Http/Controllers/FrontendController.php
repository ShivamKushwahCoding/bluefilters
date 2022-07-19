<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function home(){
        $sectors = Category::get();
        return view('frontend.home',compact('sectors'));
    }

    public function about(){

        return view('frontend.about');
    }

    public function products(){
        return view('frontend.products');
    }

    public function technology(){
        return view('frontend.technology');
    }

    public function sectors(){
        return view('frontend.sectors');
    }

    public function partners(){
        return view('frontend.partners');
    }

    public function news(){
        return view('frontend.news');
    }

    public function contact_us(){
        return view('frontend.contact-us');
    }

    public function sector(){
        return view('frontend.sector');
    }

    public function news_view(){
        return view('frontend.news-view');
    }
    
    
}
