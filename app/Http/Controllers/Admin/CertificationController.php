<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certification;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certifications = Certification::all();
        return view('admin.pages.certification.show',compact('certifications'));
         
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view ('admin.pages.certification.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         try {
            $formFields = $request->validate([
            'certification' => 'required',
            'institution' => 'required',
            'year' => 'required',
            'grade'=>'required',
            'description'=>'nullable'
        ]);

        Certification::create($formFields);
         
        return redirect('/admin/home')->with('success', 'certification add successfully!');
        
        } catch (\Throwable $th) {
            return $th;
        }
    }

    /**
     * Display the specified resource.
     */
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $certification = Certification::where('id', $id)->first();
        return view('admin.pages.certification.edit',compact('certification'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
         $formFields = $request->validate([
            'certification' => 'required',
            'instituiton' => 'required',
            'year' => 'required',
            'grade'=>'required',
            'description'=>'nullable'
        ]);

      Certification::where('id', $request->$id)->update($formFields);

        return redirect('/admin/home')->with('success', 'certification updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         $certification = Certification::findorfail($id);
        $certification->delete();
        return redirect()->back();
    }
}
