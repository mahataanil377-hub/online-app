<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\Category;
use App\Models\Company;
use App\Models\User;    
use App\Models\Application;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Dashboard (user count)
    public function dashboard()
    {
       $jobs = Job::count();
    $users = User::count();
    $categories = Category::count();
    $application = Application::count();
    $companies = Company::count();
    $notificationCount = Application::count();

    return view('dashboard', compact(
        'jobs',
        'users',
        'categories',
        'application',
        'companies',
        'notificationCount'
    ));
}
}
