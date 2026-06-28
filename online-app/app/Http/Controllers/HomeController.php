<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Category;
use App\Models\Company;

class HomeController extends Controller
{
      public function index()
{
    $jobs = Job::with('company')->latest()->take(6)->get();

    $categories = Category::latest()->take(8)->get();

    $companies = Company::latest()->take(6)->get();

    return view('home', compact(
        'jobs',
        'categories',
        'companies'
    ));
}

    
}