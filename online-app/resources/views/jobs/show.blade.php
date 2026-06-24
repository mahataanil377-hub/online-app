@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow-lg border-0">

        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Job Details</h4>
            <a href="{{ route('jobs.index') }}" class="btn btn-light btn-sm">Back</a>
        </div>

        <div class="card-body">

            <div class="mb-3">
                <h3 class="fw-bold text-dark">{{ $job->title }}</h3>
            </div>

            <div class="row mb-2">
                <div class="col-md-4">
                    <p><strong>Company:</strong></p>
                    <span class="badge bg-secondary">{{ $job->company_name }}</span>
                </div>

                <div class="col-md-4">
                    <p><strong>Location:</strong></p>
                    <span class="text-muted">{{ $job->location }}</span>
                </div>

                <div class="col-md-4">
                    <p><strong>Status:</strong></p>

                    @if($job->status == 'active')
                        <span class="badge bg-success">Active</span>
                    @else
                        <span class="badge bg-danger">Inactive</span>
                    @endif

                </div>
            </div>

        </div>
    </div>

</div>

@endsection