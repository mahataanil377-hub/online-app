@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Job Details</h5>

            <a href="{{ route('jobs.index') }}" class="btn btn-light btn-sm">
                Back
            </a>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <strong>Title:</strong>
                    <p>{{ $job->title }}</p>
                </div>

                <div class="col-md-6 mb-3">
                    <strong>Company Name:</strong>
                    <p>{{ $job->company_name }}</p>
                </div>

                <div class="col-md-6 mb-3">
                    <strong>Location:</strong>
                    <p>{{ $job->location }}</p>
                </div>

                <div class="col-md-6 mb-3">
                    <strong>Job Type:</strong>
                    <p>{{ $job->job_type ?? '-' }}</p>
                </div>

                <div class="col-md-12 mb-3">
                    <strong>Description:</strong>
                    <p>{{ $job->description ?? '-' }}</p>
                </div>

                <div class="col-md-6 mb-3">
                    <strong>Status:</strong>
                    <p>
                        @if($job->status == 'active')
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-danger">Inactive</span>
                        @endif
                    </p>
                </div>

            </div>

        </div>

    </div>

</div>

@endsection