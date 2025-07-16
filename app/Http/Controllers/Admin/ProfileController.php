<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index() {
        
    }
    function create() {
        return view('admin.pages.profile.add');
        
    }
    function store(Request $request) {
        $formFields= $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'gender'=>'required',
            'image'=>['required','image','mimes:jpg,jpeg,png','max:2048'],
            'github'=>'required|url',
            'linkedin'=>'required|url',
            'location'=>'required',
            'description'=>'required',
        ]);
                
        
    }
    function edit($id) {
        
    }
    function update(Request $request) {
        
    }

}
