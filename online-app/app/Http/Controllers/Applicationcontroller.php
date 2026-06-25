<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\User;
use App\Models\Job;
use App\Models\Category;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * LIST ALL APPLICATIONS
     */
    public function index()
    {
        $applications = Application::with([ 'category'])
            ->get();

        return view('application.index', compact('applications'));
    }

    /**
     * SHOW CREATE FORM
     */
    public function create()
    {
        $users = User::all();
        $jobs = Job::all();
        $categories = Category::all();

        return view('application.create', compact('users', 'jobs', 'categories'));
    }

    /**
     * STORE APPLICATION
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'job_id' => 'required|exists:jobs,id',
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        Application::create([
            'user_id' => $request->user_id,
            'job_id' => $request->job_id,
            'category_id' => $request->category_id,
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('application.index')
            ->with('success', 'Application created successfully');
    }

    /**
     * SHOW SINGLE APPLICATION
     */
    public function show($id)
    {
        $application = Application::with(['user', 'job', 'category'])
            ->findOrFail($id);

        return view('application.show', compact('application'));
    }

    /**
     * SHOW EDIT FORM
     */
    public function edit($id)
    {
        $application = Application::findOrFail($id);

        $users = User::all();
        $jobs = Job::all();
        $categories = Category::all();

        return view('application.edit', compact('application', 'users', 'jobs', 'categories'));
    }

    /**
     * UPDATE APPLICATION
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'job_id' => 'required|exists:jobs,id',
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        $application = Application::findOrFail($id);

        $application->update([
            'user_id' => $request->user_id,
            'job_id' => $request->job_id,
            'category_id' => $request->category_id,
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('application.index')
            ->with('success', 'Application updated successfully');
    }

    /**
     * DELETE APPLICATION
     */
    public function destroy($id)
    {
        $application = Application::findOrFail($id);
        $application->delete();

        return redirect()->route('application.index')
            ->with('success', 'Application deleted successfully');
    }
}