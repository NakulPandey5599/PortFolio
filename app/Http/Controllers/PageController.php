<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Education;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PageController extends Controller
{

    public function welcome(){ 
         return view('welcome'); 
    }
    
    public function home(){
        $projectCount = Project::count();
        $profile = Profile::first();
        $educations = Education::all();
        $skills = Skills::all();
        $project = Project::all();
        return view('users.pages.home', compact('projectCount','profile','educations', 'skills','project')); 
    }

    public function about(){
        return view('users.pages.about');
    }

    public function projects(){
        $project = Project::all();
        $profile = Profile::first();
        return view('users.pages.projects', compact('project','profile'));
    }
    
    public function contact(){
        return view('users.pages.contact');
    }



    public function resume(){
        $project = Project::all();
         $skills = Skills::all();
        return view('users.pages.resume',compact('skills','project'));
    }
    
    public function pdfinbrowser(){
        $pdf = Pdf::loadView('users.pages.resume');
    return $pdf->stream('resume.pdf');
    }

        
    public function downloadpdf(){
        $pdf = Pdf::loadView('users.pages.resume');
    return $pdf->download('downloadedresume.pdf');
    }

    function test(){
        // return view('users.pages.test')
         $pdf = Pdf::loadView('users.pages.test');
         return $pdf->stream('resume.pdf');
    }

    















}
