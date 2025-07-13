<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }             
    public function buttons(){
        return view('admin.pages.ui-features.buttons');
    }             
    public function dropdowns(){
        return view('admin.pages.ui-features.dropdowns');
    }             
    public function typography(){
        return view('admin.pages.ui-features.typography');
    }             

    public function basic_elements(){
        return view('admin.pages.forms.basic_elements');
    }  


    public function chartjs(){
        return view('admin.pages.charts.chartjs');
    }  



    public function basic_table(){
        return view('admin.pages.tables.basic_table');
    }  


    public function mdi(){
        return view('admin.pages.icons.mdi');
    }  

    public function login(){
        return view('admin.pages.samples.login');
    }  

    public function register(){
        return view('admin.pages.samples.register');
    }  
    public function error_404(){
        return view('admin.pages.samples.error_404');
    }  
    public function error_500(){
        return view('admin.pages.samples.error_500');
    }  









}
