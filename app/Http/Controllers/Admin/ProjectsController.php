<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    function index() {
        
    }
    function create() {
        return view('admin.pages.projects.create');
        
    }
    function store(Request $request) {
        
    }
    function edit($id) {
         return view('admin.pages.projects.edit');
    }
    function update(Request $request) {
        
    }
}
