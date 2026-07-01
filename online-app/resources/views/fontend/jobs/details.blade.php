@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="card border-0 shadow-lg rounded-5 overflow-hidden">

        <!-- HEADER -->
        <div class="bg-primary text-white p-5">

            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">

                <div class="d-flex align-items-center gap-3">

                    <div class="bg-white rounded-4 p-2 shadow">
                        <img src="{{ $job->logo 
                                    ? asset('storage/'.$job->logo) 
                                    : asset('images/default-company.png') }}"
                             alt="Company Logo"
                             width="70"
                             height="70"
                             class="rounded-3 object-fit-cover">
                    </div>

                    <div>
                        <h2 class="fw-bold mb-1">{{ $job->title }}</h2>

                        <div class="d-flex align-items-center gap-2 text-light">
                            <i class="fa-solid fa-building"></i>
                            <span>{{ $job->startup ?? 'Company Name' }}</span>
                        </div>
                    </div>

                </div>

                <span class="badge bg-warning text-dark fs-6 px-4 py-2 rounded-pill shadow-sm">
                    {{ ucfirst($job->job_type) }}
                </span>

            </div>
        </div>

        <div class="card-body p-5">

            <!-- INFO -->
            <div class="row g-4 mb-5">

                <div class="col-md-3">
                    <div class="card border-0 shadow-sm text-center rounded-4 h-100 hover-card">
                        <div class="card-body">
                            <i class="fa-solid fa-location-dot fs-2 text-primary mb-2"></i>
                            <h6 class="text-muted">Location</h6>
                            <h5 class="fw-bold">{{ $job->location }}</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border-0 shadow-sm text-center rounded-4 h-100 hover-card">
                        <div class="card-body">
                            <i class="fa-solid fa-briefcase fs-2 text-success mb-2"></i>
                            <h6 class="text-muted">Experience</h6>
                            <h5 class="fw-bold">{{ $job->experience }}</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border-0 shadow-sm text-center rounded-4 h-100 hover-card">
                        <div class="card-body">
                            <i class="fa-solid fa-users fs-2 text-danger mb-2"></i>
                            <h6 class="text-muted">Vacancies</h6>
                            <h5 class="fw-bold">{{ $job->position }}</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border-0 shadow-sm text-center rounded-4 h-100 hover-card">
                        <div class="card-body">
                            <i class="fa-solid fa-building fs-2 text-warning mb-2"></i>
                            <h6 class="text-muted">Company</h6>
                            <h5 class="fw-bold">{{ $job->startup }}</h5>
                        </div>
                    </div>
                </div>

            </div>

            <!-- DESCRIPTION -->
            <div class="card border-0 bg-light rounded-4 mb-5">
                <div class="card-body p-4">

                    <h3 class="fw-bold mb-3">Job Description</h3>

                    @if($job->description)
                        <div style="line-height:1.9;">
                            {!! nl2br(e($job->description)) !!}
                        </div>
                    @else
                        <p class="text-muted">No description available.</p>
                    @endif

                </div>
                <!-- ACTION BUTTONS -->
<div class="d-flex justify-content-between align-items-center mt-4 flex-wrap gap-3">

    <!-- BACK BUTTON -->
    <a href="{{ route('home.index') }}"
       class="btn btn-outline-dark px-4 py-2 rounded-3 shadow-sm">
        ← Back
    </a>

    <!-- APPLY BUTTON -->
    <a href="{{route('apply.index')}}"
       class="btn btn-success px-4 py-2 rounded-3 shadow shadow-sm">
        Apply Now
    </a>

</div>
            </div>

        </div>

    </div>
</div>

<!-- STYLE -->
<style>
.hover-card{
    transition: 0.3s ease;
}
.hover-card:hover{
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}
</style>

@endsection