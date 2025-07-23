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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/index', function () {
//     return view('home');
// });
// Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/resume', [PageController::class, 'resume'])->name('resume');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/browsepdf', [PageController::class, 'pdfinbrowser'])->name('pdfinbrowser');
Route::get('/downloadpdf', [PageController::class, 'downloadpdf'])->name('downloadpdf');
Route::get('/test', [PageController::class, 'test'])->name('test');


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
        Route::get('/edit/{id}', [ProjectsController::class, 'edit'])->name('project.edit');;
        Route::put('/update', [ProjectsController::class, 'update'])->name('project.update');
    });

     Route::prefix('/education')->group(function (){
        Route::get('/', [EducationsController::class, 'index'])->name('education.show');
        Route::get('/create', [EducationsController::class, 'create'])->name('education.create');
        Route::post('/store', [EducationsController::class, 'store'])->name('education.store');
        Route::get('/edit/{id}', [EducationsController::class, 'edit'])->name('education.edit');
        Route::put('/update', [EducationsController::class, 'update'])->name('education.update');
    });
    
});

