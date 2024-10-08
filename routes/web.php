<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Work_experiences;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/project',[ProjectController::class,'index'])->name('project.index');


Route::get('/projects_details', function () {
    return view('projects_details');
});
