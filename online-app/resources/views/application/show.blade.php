@extends('layouts.app')

@section('content')
<div class="container py-4">

<div class="d-flex justify-content-end align-items-center mb-2">

    <a href="{{ route('application.index') }}"
       class="btn btn-primary btn-sm rounded-pill shadow-sm d-flex align-items-center gap-4 px-4">

        <i class="bi bi-arrow-left me-2"></i>
        Back
    </a>

</div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">

            <div class="row g-3">

                <div class="col-md-6">
                    <div class="border rounded p-3">
                        <strong>Name</strong>
                        <div>{{ $application->name }}</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="border rounded p-3">
                        <strong>Email</strong>
                        <div>{{ $application->email }}</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="border rounded p-3">
                        <strong>Phone</strong>
                        <div>{{ $application->phone }}</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="border rounded p-3">
                        <strong>Status</strong>
                        <div>
                            <span class="badge bg-warning text-dark">
                                {{ $application->status }}
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="border rounded p-3">
                        <strong>Company</strong>
                        <div>{{ $application->company ?? 'N/A' }}</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="border rounded p-3">
                        <strong>Position</strong>
                        <div>{{ $application->position ?? 'N/A' }}</div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="border rounded p-3">
                        <strong>Skills</strong>
                        <div>{{ $application->skills ?? 'N/A' }}</div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="border rounded p-3">
                        <strong>Cover Letter</strong>
                        <div>{{ $application->cover_letter ?? 'N/A' }}</div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="border rounded p-3">
                        <strong>Resume</strong>
                        <div class="mt-2">
                            @if($application->resume)
                                <a href="{{ asset('storage/' . $application->resume) }}"
                                   target="_blank"
                                   class="btn btn-primary btn-sm">
                                    View Resume
                                </a>
                            @else
                                <span class="text-muted">No resume uploaded</span>
                            @endif
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>
@endsection