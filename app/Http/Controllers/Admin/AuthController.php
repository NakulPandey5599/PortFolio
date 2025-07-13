<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login(){
        return view('admin.auth.login');
    }

    function home(){
        return view('/admin.home.index');
    }

    function forms(){
        return view('admin.pages.forms.basic_elements');
    }
}
