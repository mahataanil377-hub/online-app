@extends('layouts.app')

@section('content')



    <!-- ================= JOBS ================= -->
<div class="container py-5">

    <!-- ================= HERO SECTION ================= -->
    <div class="row align-items-center bg-light rounded-4 shadow-sm p-5 mb-5">

        <!-- LEFT SIDE TEXT -->
        <div class="col-lg-6">

            <span class="badge bg-primary mb-3 px-3 py-2">
                🔥 Best Job Platform
            </span>

            <h1 class="fw-bold display-5 text-dark">
                Find Your <span class="text-primary">Dream Job</span>
            </h1>

            <p class="text-muted mt-3">
                Discover thousands of job opportunities from top companies and build your career.
            </p>

            <!-- SEARCH BOX -->
            <div class="input-group mt-4 shadow-sm">

                <input type="text"
                       class="form-control p-3"
                       placeholder="Search jobs, companies, skills...">

                <button class="btn btn-primary px-4">
                    Search
                </button>

            </div>

            <!-- QUICK INFO -->
            <div class="row mt-4">

                <div class="col-4">
                    <div class="bg-white p-3 rounded shadow-sm text-center">
                        <h6 class="fw-bold mb-0">10K+</h6>
                        <small class="text-muted">Jobs</small>
                    </div>
                </div>

                <div class="col-4">
                    <div class="bg-white p-3 rounded shadow-sm text-center">
                        <h6 class="fw-bold mb-0">500+</h6>
                        <small class="text-muted">Companies</small>
                    </div>
                </div>

                <div class="col-4">
                    <div class="bg-white p-3 rounded shadow-sm text-center">
                        <h6 class="fw-bold mb-0">Easy</h6>
                        <small class="text-muted">Apply</small>
                    </div>
                </div>

            </div>

        </div>

        <!-- RIGHT SIDE IMAGE -->
        <div class="col-lg-6 text-center mt-4 mt-lg-0">

            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d"
                 class="img-fluid rounded-4 shadow"
                 style="max-height:420px; object-fit:cover;">

        </div>

    </div>


    <!-- ================= JOBS SECTION ================= -->
    <section class="mb-5">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h2 class="fw-bold text-dark">Latest Jobs</h2>
                <p class="text-muted mb-0">Find your dream job from top companies.</p>
            </div>

            <a href="#" class="btn btn-warning rounded-pill px-4 fw-bold">
                View All
            </a>

        </div>

        <div class="row g-4">

            @forelse($jobs as $job)

            <div class="col-lg-4 col-md-6">

                <div class="card border-0 shadow-sm h-100 rounded-4">

                    <div class="card-body">

                        <div class="d-flex justify-content-between mb-2">

                            <span class="badge bg-primary">
                                {{ $job->job_type }}
                            </span>

                            <span class="badge bg-success">
                                Active
                            </span>

                        </div>

                        <h5 class="fw-bold mt-3">
                            {{ $job->title }}
                        </h5>

                        <p class="text-muted mb-1">
                            🏢 {{ $job->company->name ?? 'N/A' }}
                        </p>

                        <p class="text-muted">
                            📍 {{ $job->location }}
                        </p>

                        @if(isset($job->salary))
                        <h6 class="text-warning fw-bold">
                            Rs. {{ number_format($job->salary) }}
                        </h6>
                        @endif

                        <hr>

                        <a href="{{ route('jobs.show',$job->id) }}"
                           class="btn btn-primary w-100 rounded-pill">
                            View Details →
                        </a>

                    </div>

                </div>

            </div>

            @empty

            <div class="col-12 text-center text-muted">
                No jobs available
            </div>

            @endforelse

        </div>

    </section>

</div>




    <!-- ================= CATEGORIES ================= -->
    <section class="mb-5">

        <h2 class="text-center fw-bold mb-4">Job Categories</h2>

        <div class="row g-4">

            @forelse($categories as $category)

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow-sm text-center h-100 rounded-4">

                    <div class="card-body py-4">

                        <div class="display-6">💼</div>

                        <h5 class="fw-bold mt-2">
                            {{ $category->name }}
                        </h5>

                        <span class="badge bg-info text-dark mt-2">
                            {{ $category->jobs_count ?? 0 }} Jobs
                        </span>

                    </div>

                </div>

            </div>

            @empty
            <div class="col-12 text-center text-muted">
                No categories found
            </div>
            @endforelse

        </div>

    </section>


    <!-- ================= COMPANIES ================= -->
    <section class="mb-5">

        <h2 class="text-center fw-bold mb-4">Top Companies</h2>

        <div class="row g-4">

            @forelse($companies as $company)

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow-sm text-center h-100 rounded-4">

                    <div class="card-body">

                        @if($company->logo)
                        <img src="{{ asset('storage/'.$company->logo) }}"
                             class="rounded-circle mb-3"
                             style="width:80px;height:80px;object-fit:cover;">
                        @endif

                        <h5 class="fw-bold">
                            {{ $company->name }}
                        </h5>

                        <p class="text-muted mb-1">
                            {{ $company->city }}
                        </p>

                        <span class="badge bg-secondary">
                            {{ $company->industry }}
                        </span>

                    </div>

                </div>

            </div>

            @empty
            <div class="col-12 text-center text-muted">
                No companies found
            </div>
            @endforelse

        </div>

    </section>

</div>

@endsection