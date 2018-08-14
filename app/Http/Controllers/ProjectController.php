<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index ()
    {

        return view('projects.list');
    }
    public function show()
    {

    }
    public function store(Request $request)
    {

    }
}
