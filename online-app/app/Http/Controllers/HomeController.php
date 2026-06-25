<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Category;
use App\Models\Company;

class HomeController extends Controller
{
    public function home()
    {
        $jobs = Job::latest()->get();
        $categories = Category::all();
        $companies = Company::all();

        return view('home', compact(
            'jobs',
            'categories',
            'companies'
        ));
    }
}