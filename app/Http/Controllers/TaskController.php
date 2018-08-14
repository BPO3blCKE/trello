<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index ()
    {

        return view('projects.detail');
    }
    public function show()
    {

    }
    public function store(Request $request)
    {

    }
}
