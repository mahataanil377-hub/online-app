<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Job;
use Illuminate\Support\Facades\Storage;

class ApplicationController extends Controller
{
    /**
     * Display all applications
     */
    public function index()
    {
        $applications = Application::with('job')->latest()->paginate(6);
        return view('application.index', compact('applications'));
    }

    /**
     * Show create form
     */
    public function create()
    {
        $jobs = Job::all();
        return view('application.create', compact('jobs'));
    }

    /**
     * Store application
     */
    public function store(Request $request)
    {
        $request->validate([
            'job_id' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'cover_letter' => 'nullable|string',
            'resume' => 'nullable|file|mimes:pdf,doc,docx',
        ]);

        $resumePath = null;

        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public');
        }

        Application::create([
            'job_id' => $request->job_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'cover_letter' => $request->cover_letter,
            'resume' => $resumePath,
            'status' => 'pending',
        ]);
            return back()->with('success', 'Application submitted successfully!');
    }

    /**
     * Show single application
     */
    public function show($id)
    {
        $application = Application::with('job')->findOrFail($id);
        return view('application.show', compact('application'));
    }

    /**
     * Delete application
     */
    public function destroy($id)
    {
        $application = Application::findOrFail($id);

        // delete resume file if exists
        if ($application->resume) {
            Storage::disk('public')->delete($application->resume);
        }

        $application->delete();

        return redirect()->route('application.index')
                         ->with('success', 'Application deleted successfully!');
    }
}