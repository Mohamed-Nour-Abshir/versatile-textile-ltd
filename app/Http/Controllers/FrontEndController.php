<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //Home Page
    public function index(){
        return View('home-component');
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
