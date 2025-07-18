<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use PhpParser\Node\Stmt\TryCatch;

class ProjectsController extends Controller
{
    function index() {
        $projects = Project::all();
        return view('admin.pages.projects.show', ['projects' => $projects] );
        
    }
    function create() {
        return view('admin.pages.projects.add');
        
    }

    function store(Request $request) {


         $formFields = $request->validate([
            'title' => 'required',
            'image' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'github' => 'required|url',
            'live_link' => 'required|url',
            'description' => 'required',
        ]);

        $formFields['image'] = $request->file('image')->store('uploads', 'public');

        Project::create($formFields);

        return redirect('/admin/home')->with('success', 'project created successfully!');
        
    }
    function edit($project_id) {

        $project = Project::where('id', $project_id)->first();
         return view('admin.pages.projects.edit',['project'=>$project]);
    }




    function update(Request $request) {
        try {
            $formFields = $request->validate([
               'title' => 'required',
               'image' => ['image', 'mimes:jpg,jpeg,png', 'max:2048'],
               'github' => 'required|url',
               'live_link' => 'required|url',
               'description' => 'required',
           ]);
           
           if($request->hasFile('image')){ 
           $formFields['image'] = $request->file('image')->store('uploads', 'public');
           }else{
               unset($formFields['image']);
           }
   
           Project::where('id', $request->project_id)->update($formFields);
   
           return redirect('/admin/home')->with('success', 'project created successfully!');
        } catch (\Throwable $th) {
            return $th;
        }

        
    }
}
