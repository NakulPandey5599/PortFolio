<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skills;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class SkillsController extends Controller
{
    function index() {
        $skills = Skills::all();
        return view ('admin.pages.skills.show',['skills'=> $skills]);
    }
    function create() {
        return view ('admin.pages.skills.add');
        
    }
   
    function store(Request $request) {
        try {
            
        $formFields = $request->validate([
            'skill_name' => 'required|string|max:255',
            'level' => 'nullable|string',
            'experience_years' => 'nullable|integer|min:0',
            'categories' => 'nullable|string',
        ]);

        Skills::create($formFields);

        return redirect('/admin/home')->with('success', 'skills add successfully!');
        } catch (\Throwable $th) {
            return $th;
        }

        
    }
    function edit($skills_id) {
         $skill = Skills::where('id', $skills_id)->first();
        return view ('admin.pages.skills.edit', ['skill'=>$skill]);
        
    }
    function update(Request $request ) {
        try {
            $formFields = $request->validate([
            'skill_name' => 'required|string|max:255',
            'level' => 'nullable|string',
            'experience_years' => 'nullable|integer|min:0',
            'description' => 'nullable|string',
        ]);

        Skills::where('id', $request->skills_id)->update($formFields);

        return redirect('/admin/home')->with('success', 'skills Update successfully!');

        } catch (\Throwable $th) {
            return $th;
        }
                
        
    }
}
