<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/projects_details', function () {
    return view('projects_details');
});

Route::get('/work_experiences', function () {
    return view('work_experiences');
});
