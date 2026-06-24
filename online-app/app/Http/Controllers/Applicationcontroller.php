<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    // LIST
    public function index()
    {
        $applications = Application::latest()->get();
        return view('application.index', compact('applications'));
    }

    // CREATE FORM
    public function create()
    {
        return view('application.create');
    }

    // STORE
    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required',
            'email'        => 'required|email',
            'phone'        => 'required',
            'company'      => 'nullable',
            'position'     => 'nullable',
            'skills'       => 'nullable',
            'cover_letter' => 'nullable',
            'resume'       => 'nullable|mimes:pdf,doc,docx|max:2048',
        ]);

        $resumePath = null;

        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public');
        }

        Application::create([
            'name'         => $request->name,
            'email'        => $request->email,
            'phone'        => $request->phone,
            'company'      => $request->company,
            'position'     => $request->position,
            'skills'       => $request->skills,
            'cover_letter' => $request->cover_letter,
            'resume'       => $resumePath,
            'status'       => 'pending',
        ]);

        return redirect()
            ->route('application.index')
            ->with('success', 'Application created successfully!');
    }

    // SHOW
    public function show($id)
    {
        $application = Application::findOrFail($id);
        return view('application.show', compact('application'));
    }

    // DELETE
    public function destroy($id)
    {
        $application = Application::findOrFail($id);

        if ($application->resume &&
            file_exists(storage_path('app/public/' . $application->resume))) {
            unlink(storage_path('app/public/' . $application->resume));
        }

        $application->delete();

        return redirect()
            ->route('application.index')
            ->with('success', 'Application deleted successfully!');
    }
}