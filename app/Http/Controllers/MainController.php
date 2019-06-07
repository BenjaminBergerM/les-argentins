<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() 
    {
        return view('home');
    }

    public function show($id) 
    {
        return view('projects.project'.$id);
    }
}
