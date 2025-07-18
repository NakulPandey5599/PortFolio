<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    function index() {
        
    }
    function create() {
        return view ('admin.pages.skills.add');
        
    }
    function store(Request $request) {

        $formFields = $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'nullable|string',
            'experience_years' => 'nullable|integer|min:0',
            'description' => 'nullable|string',
        ]);

        Skills::create($formFields);

        return redirect('/admin/home')->with('success', 'skills add successfully!');
        
    }
    function edit(Skills $skills) {
        return view ('admin.pages.skills.edit');
        
    }
    function update(Request $request, Skills $skills) {
        
        $formFields = $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'nullable|string',
            'experience_years' => 'nullable|integer|min:0',
            'description' => 'nullable|string',
        ]);

        $skills->update($formFields);

        return redirect('/admin/home')->with('success', 'skills Update successfully!');
        
        
    }
}
