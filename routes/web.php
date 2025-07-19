<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\EducationsController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\SkillsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use Illuminate\Auth\Events\Login;

Route::get('/', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('home');
});

Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/resume', [PageController::class, 'resume'])->name('resume');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

//admin route
// Route::get('/admin', [AdminController::class, 'index'])->name('index');

Route::prefix('admin')->group(function () {
    Route::get('/home', [AuthController::class, 'home']);
    Route::get('/form', [AuthController::class, 'forms']);
    Route::get('/', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'register']);

    //profle routes
    Route::prefix('/profile')->group(function (){
        Route::get('/', [ProfileController::class, 'index']);
        Route::get('/create', [ProfileController::class, 'create']);
        Route::post('/store', [ProfileController::class, 'store'])->name('profile.store');
        Route::get('/edit', [ProfileController::class, 'edit']);
        Route::put('/update/{profile}', [ProfileController::class, 'update'])->name('profile.update');
    });


    //Skills Route
    Route::prefix('/skills')->group(function (){
        Route::get('/', [SkillsController::class, 'index'])->name('skills.show');
        Route::get('/create', [SkillsController::class, 'create'])->name('skills.create');
        Route::post('/store', [SkillsController::class, 'store'])->name('skills.store');
        Route::get('/edit/{id}', [SkillsController::class, 'edit'])->name('skills.edit');
        Route::put('/update', [SkillsController::class, 'update'])->name('skills.update');

    });

    Route::prefix('/project')->group(function (){
        Route::get('/', [ProjectsController::class, 'index'])->name('project.show');
        Route::get('/create', [ProjectsController::class, 'create'])->name('project.create');
        Route::post('/store', [ProjectsController::class, 'store'])->name('project.store');
        Route::get('/edit', [ProjectsController::class, 'edit'])->name('project.edit');;
        Route::put('/update', [ProjectsController::class, 'update'])->name('project.update');
    });

     Route::prefix('/education')->group(function (){
        Route::get('/', [EducationsController::class, 'index']);
        Route::get('/create', [EducationsController::class, 'create']);
        Route::post('/store', [EducationsController::class, 'store'])->name('education.store');
        Route::put('/edit/{id}', [EducationsController::class, 'edit'])->name('education.edit');
        Route::post('/update', [EducationsController::class, 'update'])->name('education.update');
    });
    Route::get('typography', [AdminController::class, 'typography']);
});

Route::prefix('ui-features')->group(function () {
    Route::get('buttons', [AdminController::class, 'buttons']);
    Route::get('dropdowns', [AdminController::class, 'dropdowns']);
    Route::get('typography', [AdminController::class, 'typography']);
});

     Route::get('/forms/basic_elements', [AdminController::class, 'basic_elements'])->name('basic_elements');
     Route::get('/charts/chartjs', [AdminController::class, 'chartjs'])->name('chartjs');
     Route::get('tables/basic_table', [AdminController::class, 'basic_table'])->name('basic_table');
     Route::get('/icons/mdi', [AdminController::class, 'mdi'])->name('mdi');

    Route::prefix('samples')->group(function(){

       Route::get('login',[AdminController::class, 'login'])->name('login');
       Route::get('register',[AdminController::class, 'register'])->name('register');
       Route::get('error_404',[AdminController::class, 'error_404'])->name('error_404');
       Route::get('error_500',[AdminController::class, 'error_500'])->name('error_500');
        
    });
    