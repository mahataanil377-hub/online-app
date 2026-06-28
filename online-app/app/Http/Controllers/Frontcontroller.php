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
