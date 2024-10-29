<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Category;

class Portfolio extends Controller
{
    public function index(){
        $projects = Project::all();
        $categories = Category::all();
        return view('pages.portfolio', compact('projects','categories'));
    }
}
