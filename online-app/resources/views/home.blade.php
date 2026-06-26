@extends('layouts.app')

@section('content')

<div class="container py-5">

    {{-- HERO SECTION --}}
    <section class="bg-primary text-white d-flex align-items-center rounded-4"
             style="min-height: 50vh;">

        <div class="container text-center">

            <h1 class="fw-bold">Find Your Next Opportunity</h1>

            <p class="text-light">
                Thousands of jobs waiting for you
            </p>

            {{-- SEARCH --}}
            <form action="#" method="GET" class="row justify-content-center mt-4">

                <div class="col-md-6 d-flex">

                    <input type="text"
                           name="query"
                           class="form-control me-2"
                           placeholder="Search jobs...">

                    <button class="btn btn-light text-primary fw-semibold">
                        Search
                    </button>

                </div>

            </form>

        </div>

    </section>

    {{-- JOBS SECTION --}}
    <section class="py-5">

        <h2 class="text-center fw-bold mb-5">Latest Jobs</h2>

        <div class="row g-4">

            @forelse($jobs as $job)

            <div class="col-md-4">

                <div class="card shadow border-0 rounded-4 h-100">

                    <div class="card-body">

                        <span class="badge bg-primary">
                            {{ $job->job_type }}
                        </span>

                        <h5 class="fw-bold mt-3">
                            {{ $job->title }}
                        </h5>

                        <p class="text-muted">
                            {{ $job->location }}
                        </p>

                        <p>
                            <strong>Company:</strong>
                            {{ $job->company->name ?? 'N/A' }}
                        </p>

                        <a href="{{ route('jobs.show', $job->id) }}"
                           class="btn btn-primary">
                            View Details
                        </a>

                    </div>

                </div>

            </div>

            @empty
                <p class="text-center text-muted">No jobs found</p>
            @endforelse

        </div>

    </section>

    {{-- CATEGORIES --}}
    <section class="py-5">

        <h2 class="text-center fw-bold mb-5">Job Categories</h2>

        <div class="row g-4">

            @forelse($categories as $category)

            <div class="col-md-3">

                <div class="card shadow rounded-4 text-center">

                    <div class="card-body">

                        <h5 class="fw-bold">
                            {{ $category->name }}
                        </h5>

                        <p class="text-muted">
                            {{ $category->jobs_count ?? 0 }} Jobs
                        </p>

                    </div>

                </div>

            </div>

            @empty
                <p class="text-center text-muted">No categories found</p>
            @endforelse

        </div>

    </section>

    {{-- COMPANIES --}}
    <section class="py-5">

        <h2 class="text-center fw-bold mb-5">Top Companies</h2>

        <div class="row g-4">

            @forelse($companies as $company)

            <div class="col-md-3">

                <div class="card shadow rounded-4 text-center">

                    <div class="card-body">

                        @if($company->logo)
                            <img src="{{ asset('storage/'.$company->logo) }}"
                                 class="img-fluid mb-3"
                                 style="height:80px;">
                        @endif

                        <h5 class="fw-bold">
                            {{ $company->name }}
                        </h5>

                        <p class="text-muted">
                            {{ $company->city }}
                        </p>

                        <p class="small text-secondary">
                            {{ $company->industry }}
                        </p>

                    </div>

                </div>

            </div>

            @empty
                <p class="text-center text-muted">No companies found</p>
            @endforelse

        </div>

    </section>

</div>

@endsection