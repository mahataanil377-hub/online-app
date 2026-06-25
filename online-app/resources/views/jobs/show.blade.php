@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">Job Details</h5>
        </div>

        <div class="card-body">

            <h4>{{ $job->title }}</h4>

            <p><b>Company:</b> {{ $job->company->name ?? 'N/A' }}</p>
            <p><b>Location:</b> {{ $job->location }}</p>
            <p><b>Job Type:</b> {{ $job->job_type }}</p>
            <p><b>Position:</b> {{ $job->position }}</p>
            <p><b>Startup:</b> {{ $job->startup }}</p>
            <p><b>Experience:</b> {{ $job->experience }}</p>

            <p><b>Description:</b></p>
            <p>{{ $job->description }}</p>

            <p><b>Categories:</b></p>
            @foreach($job->categories as $cat)
                <span class="badge bg-info text-dark">
                    {{ $cat->name }}
                </span>
            @endforeach

            <br><br>

            <a href="{{ route('jobs.index') }}" class="btn btn-secondary">
                Back
            </a>

        </div>

    </div>

</div>

@endsection