<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationsController extends Controller
{
    function index() {
        
    }
    function create() {
        return view ('admin.pages.education.add');
        
    }
    function store(Request $request) {
        
        $formFields = $request->validate([
            'degree' => 'required',
            'instituiton' => 'required',
            'start_years' => 'required',
            'end_year' => 'required',
            'grade'=>'required',
            'description'=>'required'
        ]);

        Education::create($formFields);

        return redirect('/admin/home')->with('success', 'education add successfully!');
        
    }
    function edit($id) {
        
    }
    function update(Request $request ) {
         $formFields = $request->validate([
            'degree' => 'required',
            'instituiton' => 'required',
            'start_years' => 'required',
            'end_year' => 'required',
            'grade'=>'required',
            'description'=>'required'
        ]);

        $Education->update($formFields);

        return redirect('/admin/home')->with('success', 'ehucation updated successfully!');
        
    }
}
