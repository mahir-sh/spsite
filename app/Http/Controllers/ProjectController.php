<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {

        $projects = json_decode(file_get_contents(storage_path('data/projects.json')), associative: true);

       // dd($projects);
        return view('project',compact('projects'));
    }

    public function show($projects)
    {
        $projects = json_decode(file_get_contents(storage_path('data/projects.json')), associative: true);


            $path = request()->path();
            $segments = collect(explode('/', $path));
            $id = $segments->last();

        return view('projects_details',data: compact('id','projects'));
    }






}
