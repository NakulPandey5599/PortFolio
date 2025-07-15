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

    function register(){
        return view('admin.auth.register');
    }
}
