<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\Company;
use App\Models\Category;

class Frontcontroller extends Controller
{
    public function welcome(){
        return view('welcome');
    }
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
    
   public function about(){
       return view('about');
   }
   public function apply(){
     $jobs = Job::all();
       return view('apply' , compact('jobs'));
   }
   public function content(){
       return view('content');
   }
   public function contact(){
       return view('contact');
   }
   public function dashboard(){
       return view('dashboard');
       
   }
    }
