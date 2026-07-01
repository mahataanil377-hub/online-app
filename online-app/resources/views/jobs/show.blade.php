@extends('layouts.sidebar')

@section('content')

<style>
    .job-card{
        border:1px solid #dee2e6;
        border-radius:15px;
        box-shadow:0 5px 15px rgba(0,0,0,.08);
    }

    .job-header{
        padding:20px 25px;
        border-bottom:1px solid #dee2e6;
    }

    .job-title{
        font-size:30px;
        font-weight:700;
        text-align:center;
        margin:30px 0;
    }

    .info-item{
        padding:15px 0;
        border-bottom:1px solid #eee;
    }

    .label{
        font-weight:600;
        color:#555;
    }

    .value{
        color:#222;
    }

    .section-title{
        font-size:20px;
        font-weight:700;
        margin:35px 0 15px;
    }

    .badge-category{
        border:1px solid #198754;
        color:#198754;
        border-radius:25px;
        padding:6px 16px;
        margin:4px;
        display:inline-block;
        font-size:14px;
    }

    .btn-back{
        border-radius:25px;
        padding:10px 28px;
    }
</style>

<div class="container py-4">

    <div class="card job-card">

        <div class="job-header">
            <h4 class="mb-0">
                <i class="bi bi-briefcase"></i>
                Job Details
            </h4>
        </div>

        <div class="card-body p-4">

            <h2 class="job-title">
                {{ $job->title }}
            </h2>

            <div class="row">

                <div class="col-md-6 info-item">
                    <span class="label">Company:</span><br>
                    <span class="value">{{ $job->company->name ?? 'N/A' }}</span>
                </div>

                <div class="col-md-6 info-item">
                    <span class="label">Location:</span><br>
                    <span class="value">{{ $job->location }}</span>
                </div>

                <div class="col-md-6 info-item">
                    <span class="label">Job Type:</span><br>
                    <span class="value">{{ $job->job_type }}</span>
                </div>

                <div class="col-md-6 info-item">
                    <span class="label">Position:</span><br>
                    <span class="value">{{ $job->position }}</span>
                </div>

                <div class="col-md-6 info-item">
                    <span class="label">Startup:</span><br>
                    <span class="value">{{ $job->startup }}</span>
                </div>

                <div class="col-md-6 info-item">
                    <span class="label">Experience:</span><br>
                    <span class="value">{{ $job->experience }}</span>
                </div>

            </div>

            <h4 class="section-title">Job Description</h4>

            <p>{{ $job->description }}</p>

            <h4 class="section-title">Categories</h4>

            @foreach($job->categories as $cat)
                <span class="badge-category">{{ $cat->name }}</span>
            @endforeach

            <div class="mt-4">
                <a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary btn-back">
                    <i class="bi bi-arrow-left"></i> Back
                </a>
            </div>

        </div>

    </div>

</div>

@endsection