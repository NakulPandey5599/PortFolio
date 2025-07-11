<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home(){
        return view('home');
    }

    public function about(){
        return view('pages.about');
    }

    public function portfolio(){
        return view('pages.portfolio');
    }
    
    public function resume(){
        return view('pages.resume');
    }
    public function contact(){
        return view('pages.contact');
    }
}
