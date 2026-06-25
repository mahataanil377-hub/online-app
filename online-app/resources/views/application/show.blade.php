@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-info text-white">
            <h4 class="mb-0">Application Details</h4>
        </div>

        <div class="card-body">

            <!-- NAME -->
            <div class="mb-3">
                <strong>Name:</strong>
                <p>{{ $application->name }}</p>
            </div>

            <!-- EMAIL -->
            <div class="mb-3">
                <strong>Email:</strong>
                <p>{{ $application->email }}</p>
            </div>

            <!-- PHONE -->
            <div class="mb-3">
                <strong>Phone:</strong>
                <p>{{ $application->phone ?? '-' }}</p>
            </div>

            <!-- JOB -->
            <div class="mb-3">
                <strong>Applied Job:</strong>
                <p>{{ $application->job->title ?? 'N/A' }}</p>
            </div>

            <!-- COVER LETTER -->
            <div class="mb-3">
                <strong>Cover Letter:</strong>
                <p>{{ $application->cover_letter ?? '-' }}</p>
            </div>

            <!-- RESUME -->
            <div class="mb-3">
                <strong>Resume:</strong><br>

                @if($application->resume)
                    <a href="{{ asset('storage/'.$application->resume) }}"
                       target="_blank"
                       class="btn btn-secondary btn-sm mt-2">
                        Download CV
                    </a>
                @else
                    <span class="text-muted">No Resume Uploaded</span>
                @endif
            </div>

            <!-- STATUS -->
            <div class="mb-3">
                <strong>Status:</strong>

                @if($application->status == 'pending')
                    <span class="badge bg-warning text-dark">Pending</span>
                @elseif($application->status == 'accepted')
                    <span class="badge bg-success">Accepted</span>
                @else
                    <span class="badge bg-danger">Rejected</span>
                @endif
            </div>

            <!-- BACK BUTTON -->
            <a href="{{ route('application.index') }}" class="btn btn-primary">
                Back to List
            </a>

        </div>

    </div>

</div>

@endsection