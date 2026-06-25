@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow border-0">

        <div class="card-header bg-info text-white">
            <h4 class="mb-0">Application Details</h4>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <strong>Applicant Name:</strong>
                    <p>{{ $application->user->name ?? 'N/A' }}</p>
                </div>

                <div class="col-md-6 mb-3">
                    <strong>Email:</strong>
                    <p>{{ $application->user->email ?? 'N/A' }}</p>
                </div>

                <div class="col-md-6 mb-3">
                    <strong>Job:</strong>
                    <p>{{ $application->job->title ?? 'N/A' }}</p>
                </div>

                <div class="col-md-6 mb-3">
                    <strong>Status:</strong>
                    <span class="badge bg-warning text-dark">
                        {{ $application->status }}
                    </span>
                </div>

                <div class="col-md-6 mb-3">
                    <strong>Applied Date:</strong>
                    <p>{{ $application->created_at->format('d M Y') }}</p>
                </div>

                <div class="col-md-6 mb-3">
                    <strong>Phone:</strong>
                    <p>{{ $application->user->phone ?? 'N/A' }}</p>
                </div>

                <div class="col-md-12 mb-3">
                    <strong>Cover Letter:</strong>
                    <p>{{ $application->cover_letter ?? 'N/A' }}</p>
                </div>

                <div class="col-md-12 mb-3">
                    <strong>CV:</strong><br>

                    @if($application->cv)
                        <a href="{{ asset('storage/' . $application->cv) }}"
                           target="_blank"
                           class="btn btn-secondary btn-sm">
                            Download CV
                        </a>
                    @else
                        <span class="text-muted">No CV uploaded</span>
                    @endif
                </div>

            </div>

            <a href="{{ route('application.index') }}" class="btn btn-primary">
                Back
            </a>

        </div>

    </div>

</div>

@endsection