<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display all jobs
     */
    public function index()
    {
        $jobs = Job::all();
        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show create form
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store job
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'job_type' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        Job::create([
            'title' => $request->title,
            'company_name' => $request->company_name,
            'location' => $request->location,
            'job_type' => $request->job_type,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->route('jobs.index')
            ->with('success', 'Job created successfully');
    }

    /**
     * Show single job
     */
    public function show($id)
    {
        $job = Job::findOrFail($id);
        return view('jobs.show', compact('job'));
    }

    /**
     * Show edit form
     */
    public function edit($id)
    {
        $job = Job::findOrFail($id);
        return view('jobs.edit', compact('job'));
    }

    /**
     * Update job
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'job_type' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        $job = Job::findOrFail($id);

        $job->update([
            'title' => $request->title,
            'company_name' => $request->company_name,
            'location' => $request->location,
            'job_type' => $request->job_type,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->route('jobs.index')
            ->with('success', 'Job updated successfully');
    }

    /**
     * Delete job
     */
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect()->route('jobs.index')
            ->with('success', 'Job deleted successfully');
    }
}