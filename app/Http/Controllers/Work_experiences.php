<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Work_experiences extends Controller
{
     public function work()
    {

        $work = json_decode(file_get_contents(storage_path('data/wrok_experience.json')), true);

       // dd($work);
        return view('work_experiences',compact('work'));
    }

}
