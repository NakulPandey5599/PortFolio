<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use App\Models\Contact;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Models\Certification;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\View;


class PageController extends Controller
{
    public function __construct()
    {
        // Share $profile with all views
        View::share('profile', Profile::first());
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function home()
    {
        $projectCount = Project::count();
        $certificationCount = Certification::count();
        $profile = Profile::first();
        $educations = Education::all();
        $skills = Skills::all();
        $project = Project::all();
        $certifications = Certification::all();
        return view('users.pages.home', compact('projectCount', 'profile', 'educations', 'skills', 'project','certifications','certificationCount'));
    }

    public function about(){
        $profile = Profile::first();
        $educations = Education::all();
        $skills = Skills::all();
        $project = Project::all();
        return view('users.pages.about',compact('profile','educations','skills','project'));
    }

    public function projects()
    {
        $project = Project::all();
        $profile = Profile::first();
        return view('users.pages.projects', compact('project', 'profile'));
    }

    public function contact(){
          $profile = Profile::first();
        return view('users.pages.contact',compact('profile'));
    }

    public function contact_us(Request $request)
    {
        try {
            $formField = $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
            ]);
            Contact::create($formField);
            return redirect('/')->with('success', 'Your message has been sent successfully!');
        } catch (\Throwable $th) {
            return $th;
        }
    }


    public function resume()
    {
        $projects = Project::all();
        $skills = Skills::all();
        $profile = Profile::first();
        $educations = Education::all();
        $certifications = Certification::all();
        return view('users.pages.resume', compact('skills', 'projects', 'profile', 'educations','certifications'));
    }

    public function pdfinbrowser()
    {
        $project = Project::all();
        $skills = Skills::all();
        $profile = Profile::first();
        $educations = Education::all();
        $is_download = 0;
        $pdf = Pdf::loadView('users.pages.test');
        $pdf->setPaper([0, 0, 612, 1200], 'portrait');
        return $pdf->stream('resume.pdf');
    }


    public function downloadpdf()
    {
        $segments = request()->segments();
        $lastSegment = end($segments);
        $projects = Project::all();
        $skills = Skills::all();
        $profile = Profile::first();
        $educations = Education::all();
        $certifications = Certification::all();
        $experiences = Experience::all();
        $is_download = 1;
        $pdf = Pdf::loadView('users.pages.test', compact('skills', 'projects', 'profile', 'educations', 'is_download','certifications','experiences'));
        // return $pdf->download('downloadedresume.pdf');
        $pdf->setPaper([0, 0, 700, 2200], 'portrait');
        if ($lastSegment == 'browsepdf') {
            return $pdf->stream('resume.pdf');
        } else {
            return $pdf->download('resume.pdf');
        }
    }


    public function project_details($project_id)
    {

        $project = Project::find($project_id);

        return view('users.pages.project_details', compact('project'));
    }
}
