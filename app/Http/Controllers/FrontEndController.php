<?php

namespace App\Http\Controllers;

use App\Models\HomeSlider;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //Home Page
    public function index(){
        $sliders = HomeSlider::all();
        $products = Product::all();
        return View('home-component',compact('sliders','products'));
    }
    //About Page
    public function about(){
        return View('about-component');
    }
    //Gallery Page
    public function gallery(){
        return View('gallery-component');
    }
    //News Page
    public function news(){
        return View('news-component');
    }
    //Contact Page
    public function contact(){
        return View('contact-component');
    }
}
