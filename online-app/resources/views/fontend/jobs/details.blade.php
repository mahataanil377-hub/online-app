@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

        <!-- Header -->
        <div class="bg-primary text-white p-5">

            <div class="d-flex justify-content-between align-items-center flex-wrap">

                <div>
                    <h2 class="fw-bold mb-2">
                        {{ $job->title }}
                    </h2>

                    <h5 class="mb-0">
                        <i class="fa-solid fa-building me-2"></i>
                        {{ $job->startup ?? 'Company Name' }}
                    </h5>
                </div>

                <span class="badge bg-warning text-dark fs-6 px-4 py-3 rounded-pill">
                    {{ ucfirst($job->job_type) }}
                </span>

            </div>

        </div>

        <div class="card-body p-5">

            <!-- Job Info -->
            <div class="row g-4 mb-5">

                <div class="col-md-3">
                    <div class="card border-0 shadow-sm text-center rounded-4 h-100">
                        <div class="card-body">
                            <i class="fa-solid fa-location-dot fs-2 text-primary mb-3"></i>
                            <h6>Location</h6>
                            <h5>{{ $job->location }}</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border-0 shadow-sm text-center rounded-4 h-100">
                        <div class="card-body">
                            <i class="fa-solid fa-briefcase fs-2 text-success mb-3"></i>
                            <h6>Experience</h6>
                            <h5>{{ $job->experience }}</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border-0 shadow-sm text-center rounded-4 h-100">
                        <div class="card-body">
                            <i class="fa-solid fa-users fs-2 text-danger mb-3"></i>
                            <h6>Vacancies</h6>
                            <h5>{{ $job->position }}</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border-0 shadow-sm text-center rounded-4 h-100">
                        <div class="card-body">
                            <i class="fa-solid fa-building fs-2 text-warning mb-3"></i>
                            <h6>Company</h6>
                            <h5>{{ $job->startup }}</h5>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Description -->
            <div class="card border-0 bg-light rounded-4 mb-5">
                <div class="card-body p-4">

                    <h3 class="fw-bold mb-3">
                        Job Description
                    </h3>

                    @if($job->description)

                        <div style="line-height:2;">
                            {!! nl2br(e($job->description)) !!}
                        </div>

                    @else

                        <p class="text-muted">
                            No description available.
                        </p>

                    @endif

                </div>
            </div>

            <!-- Footer -->

            <div class="d-flex justify-content-between">

                <a href="{{ route('home.index') }}"
                   class="btn btn-outline-dark btn-lg">

                    ← Back

                </a>

                <a href="#"
                   class="btn btn-success btn-lg px-5">

                    Apply Now

                </a>

            </div>

        </div>

    </div>

</div>

@endsection