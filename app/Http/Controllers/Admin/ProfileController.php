<?php

namespace App\Http\Controllers\Admin;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    function index( ) {
        $profile = Profile::first();
        return view('admin.pages.profile.show', ['profile' => $profile] );
    }
    
    function create()
    {
        return view('admin.pages.profile.add');
    }
    
    function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'image' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'github' => 'required|url',
            'linkedin' => 'required|url',
            'location' => 'required',
            'tagline' => 'required',
            'description' => 'required',
        ]);

        $formFields['image'] = $request->file('image')->store('uploads', 'public');

        Profile::create($formFields);
        return redirect('/admin/home')->with('success', 'Profile created successfully!');
    }
    function edit()
    {
        $profile = Profile::first();
        return view('admin.pages.profile.edit', ['profile' => $profile]);
    }
    function update(Request $request, Profile $profile)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'github' => 'required|url',
            'linkedin' => 'required|url',
            'location' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('uploads', 'public');
        } else {
            unset($formFields['image']);
        }

        $profile->update($formFields);
        
        return redirect('/admin/home')->with('success', 'Profile updated successfully!');
    }
}
