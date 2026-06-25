<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;

class Frontcontroller extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function index(){
        return view('home');
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
