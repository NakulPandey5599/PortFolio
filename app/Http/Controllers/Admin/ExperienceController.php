<?php

namespace App\Http\Controllers\Admin;

use App\Models\Experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ExperienceController extends Controller
{
    public function index()
    {
        return view('admin.pages.workExperience.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'role' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'start_date' => 'required|string|max:100',
            'description' => 'nullable|string',
        ]);

        Experience::create([
            'role' => $request->role,
            'company_name' => $request->company_name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'description' => $request->description,
            'responsibilities' => json_encode($request->responsibilities),
            'technologies_used' => json_encode($request->technologies_used),
        ]);

        return redirect()->back()->with('success', 'Work experience added successfully!');
    }

}
