<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Category;
use App\Models\Company;

class HomeController extends Controller
{
    public function index()
    {
        $jobs = Job::with('company')->get();
        $categories = Category::withCount('jobs')->get();
        $companies = Company::all();
        return view('home', compact('jobs', 'categories', 'companies'));
    }
}