@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div>
        
        <section class="container py-5">

    <h2 class="text-center fw-bold mb-5">
        Popular Jobs
    </h2>

    <div class="row g-4">

        @foreach($jobs as $job)

        <div class="col-md-4">

            <div class="card border-0 shadow-lg rounded-4 h-100">

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

                    <p>
                        <strong>Experience:</strong>
                        {{ $job->experience }}
                    </p>

                    <a href="{{ route('jobs.show', $job->id) }}"
                       class="btn btn-primary">
                        View Details
                    </a>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</section>


</div>
    </div>
   <section class="container py-5">

    <h2 class="text-center fw-bold mb-5">
        Job Categories
    </h2>

    <div class="row g-4">

        @foreach($categories as $category)

        <div class="col-md-3">

            <div class="card border-0 shadow rounded-4 h-100">

                <div class="card-body text-center">

                    <h5 class="fw-bold">
                        {{ $category->name }}
                    </h5>

                    <p class="text-muted">
                        {{ $category->jobs_count }} Jobs
                    </p>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</section>

<section class="container py-5">

    <h2 class="text-center fw-bold mb-5">
        Top Companies
    </h2>

    <div class="row g-4">

        @foreach($companies as $company)

        <div class="col-md-3">

            <div class="card border-0 shadow rounded-4 h-100">

                <div class="card-body text-center">

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

        @endforeach

    </div>

</section>
        


    </div>

</div>

@endsection