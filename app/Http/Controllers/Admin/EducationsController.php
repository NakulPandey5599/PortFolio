<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationsController extends Controller
{
    function index() {
        $educations = Education::all();
        return view('admin.pages.education.show',['education'=>$educations]);
        
        
    }
    function create() {
        return view ('admin.pages.education.add');
        
    }
    function store(Request $request) {
        try {
            $formFields = $request->validate([
            'degree' => 'required',
            'institution' => 'required',
            'start_year' => 'required',
            'end_year' => 'required',
            'grade'=>'required',
            'description'=>'required'
        ]);

        Education::create($formFields);
         
        return redirect('/admin/home')->with('success', 'education add successfully!');
        
        } catch (\Throwable $th) {
            return $th;
        }
        
    }
    function edit($education_id) {
        $education = Education::where('id', $education_id)->first();
        return view('admin.pages.education.edit',['education'=>$education]);
        
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

      Education::where('id', $request->education_id)->update($formFields);

        return redirect('/admin/home')->with('success', 'education updated successfully!');
        
    }
}
