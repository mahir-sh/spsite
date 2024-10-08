<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Work_experiences;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/project',[ProjectController::class,'index'])->name('project.index');


Route::get('/projects_details/{id}',action: [ProjectController::class,'show'])->name('projects_details.show');



Route::get('/about', function () {
    return view('about');
});

Route::get('/work_experiences', [Work_experiences::class, 'work'])->name('work_experiences.index');


