<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Certificate;
use App\Models\Gallery;
use App\Models\HomeSlider;
use App\Models\Product;
use App\Models\Review;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //Home Page
    public function index(){
        $sliders = HomeSlider::all();
        $products = Product::all();
        $brands = Brand::all();
        $reviews = Review::all();
        $certifications = Certificate::all();
        return View('home-component',compact('sliders','products','brands','reviews','certifications'));
    }
    //About Page
    public function about(){
        $teamFounder = Team::find(1);
        $teamManager = Team::find(2);
        return View('about-component',compact('teamFounder','teamManager'));
    }
    //Gallery Page
    public function gallery(){
        $galleries = Gallery::all();
        return View('gallery-component',compact('galleries'));
    }
    //News Page
    public function news(){
        return View('news-component');
    }
    //Contact Page
    public function contact(){
        return View('contact-component');
    }
    //Men's Item Page
    public function mensItem()
    {
        $products = Product::all();
        return view('mens-item-component',compact('products'));
    }

    //Boy's Item Page
    public function boysItem()
    {
        $products = Product::all();
        return view('boys-item-component',compact('products'));
    }

    //Girl's Item Page
    public function girlsItem()
    {
        $products = Product::all();
        return view('girls-item-component',compact('products'));
    }

    //Kid's Item Page
    public function kidsItem()
    {
        $products = Product::all();
        return view('kids-item-component',compact('products'));
    }

    //Ladies Item Page
    public function ladiesItem()
    {
        $products = Product::all();
        return view('ladies-item-component',compact('products'));
    }
}
