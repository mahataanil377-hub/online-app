<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobRequest;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Company;
use App\Models\Category;

class JobController extends Controller
{
public function index()
{
    $jobs = Job::with(['company', 'categories'])->get();
    return view('jobs.index', compact('jobs'));
}
    public function create()
    {
        $companies = Company::all();
        $categories = category::all();
        return view('jobs.create', compact('companies','categories'));
    }

    public function store(JobRequest $request)
    {
       $validate=$request->validated();

        Job::create($validate);

        return redirect()
            ->route('jobs.index')
            ->with('success', 'Job Created Successfully');
    }

    public function show(Job $job)
    {
        return view('jobs.show', compact('job'));
    }


public function edit($id)
{
    $job = Job::with('categories')->findOrFail($id);

    $companies = Company::all();
    $categories = Category::all(); // <-- add this

    return view('jobs.edit', compact(
        'job',
        'companies',
        'categories'
    ));
}
    public function update(Request $request, Job $job)
    {
        $request->validate([
            'company_id' => 'required|exists:companies,id',
            'title' => 'required|string|max:255',
            'job_type' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'position' => 'nullable',
            'startup' => 'nullable|string|max:255',
            'experience' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
        ]);

        $job->update($request->all());

        return redirect()
            ->route('jobs.index')
            ->with('success', 'Job Updated Successfully');
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()
            ->route('jobs.index')
            ->with('success', 'Job Deleted Successfully');
    }
}
