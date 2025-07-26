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
        return view('admin.pages.projects.show', compact('projects') );
        
    }
    function create() {
        return view('admin.pages.projects.add');
        
    }

    function store(Request $request) {
     try {
        
         $formFields = $request->validate([
            'title' => 'required',
            'image' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'images.*' => 'image|mimes:jpg,jpeg,png|max:2048',
            'github' => 'required|url',
            'live_link' => 'required|url',
            'description' => 'required',
            'key_features' => 'required|array',
            'key_features.*' => 'nullable|string|max:255',
            'technologies-used' => 'nullable|string',
            'project-overview' => 'nullable|string|max:500',
            'challenges' => 'nullable|string|max:500',
            'solution' => 'nullable|string|max:500',
        ]);

        $formFields['image'] = $request->file('image')->store('uploads', 'public');
        // Multiple images
        if ($request->hasFile('images')) {
            $multiImagePaths = [];
            foreach ($request->file('images') as $image) {
                $multiImagePaths[] = $image->store('uploads', 'public');
            }
            $formFields['images'] = $multiImagePaths;
        }
        $formFields['technologies-used'] = explode(',', $request->input('technologies-used'));

        Project::create($formFields);

        return redirect('/admin/home')->with('success', 'project created successfully!');
        
        
     } catch (\Throwable $th) {
         return $th;
     }
    }

    function edit($project_id) {

        $project = Project::where('id', $project_id)->first();
         return view('admin.pages.projects.edit',['project'=>$project]);
    }




    function update(Request $request) {
        try {
            $formFields = $request->validate([
               'title' => 'required',
               'image' => ['image', 'nullable','mimes:jpg,jpeg,png', 'max:2048'],
               'images.*' => 'image|mimes:jpg,jpeg,png|max:2048',
               'github' => 'required|url',
               'live_link' => 'required|url',
               'description' => 'required',
               'key_features' => 'required|array',
               'key_features.*' => 'nullable|string|max:255',
               'technologies-used' => 'nullable|string',
               'project-overview' => 'nullable|string|max:500',
               'challenges' => 'nullable|string|max:500',
               'solution' => 'nullable|string|max:500',
           ]);
           
           if($request->hasFile('image')){ 
           $formFields['image'] = $request->file('image')->store('uploads', 'public');
           }else{
               unset($formFields['image']);
           }
   if ($request->hasFile('images')) {
        $multiImagePaths = [];
        foreach ($request->file('images') as $image) {
            $multiImagePaths[] = $image->store('uploads', 'public');
        }
        $formFields['images'] = $multiImagePaths;
   }
   $formFields['technologies-used'] = explode(',', $request->input('technologies-used'));

   Project::where('id', $request->project_id)->update($formFields);

   return redirect('/admin/home')->with('success', 'project created successfully!');
} catch (\Throwable $th) {
    return $th;
}

        
    }
}
