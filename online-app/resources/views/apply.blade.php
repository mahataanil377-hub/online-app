@extends('layouts.app')

@section('content')

<div class="container mt-2 py-5 mb-4 px-4">

    <!-- Heading -->
    <div class="text-center mb-5">
        <h1 class="fw-bold text-success display-5">
            Apply For job
        </h1>
        <p class="text-muted fs-5">
            Fill in your details and submit your application.
        </p>
    </div>

    @if(session('success'))
        <div class="alert alert-success shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    <div class="row g-4">

        <!-- Job Card -->
        <div class="col-lg-4">

            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

                <div class="bg-success text-white p-4">
                    <h3 class="fw-bold mb-1">Laravel Developer</h3>
                    <p class="mb-0">OnlineJob Pvt. Ltd.</p>
                </div>

                <div class="card-body">

                    <div class="mb-3">
                        📍 <strong>Location</strong><br>
                        Dhangadhi, Kailali
                    </div>

                    <div class="mb-3">
                        💼 <strong>Job Type</strong><br>
                        Full Time
                    </div>

                    <div class="mb-3">
                        💰 <strong>Salary</strong><br>
                        Rs. 50,000 - 80,000
                    </div>

                    <div>
                        ⭐ <strong>Experience</strong><br>
                        Less than 2 Years
                    </div>

                </div>

            </div>

        </div>

        <!-- Form -->
        <div class="col-lg-8 py-4">

            <div class="card border-0 shadow-lg rounded-4">

                <div class="card-body p-5">

                    <h2 class="fw-bold text-center mb-4">
                        Job Application Form
                    </h2>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('application.store') }}"
                          method="POST"
                          enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">
                                    Full Name
                                </label>
                                <input type="text"
                                       class="form-control form-control-lg rounded-3"
                                       name="name"
                                       placeholder="Enter your full name"
                                       required>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">
                                    Email
                                </label>
                                <input type="email"
                                       class="form-control form-control-lg rounded-3"
                                       name="email"
                                       placeholder="example@gmail.com"
                                       required>
                            </div>

                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">
                                Phone Number
                            </label>
                            <input type="text"
                                   class="form-control form-control-lg rounded-3"
                                   name="phone"
                                   placeholder="+977 98XXXXXXXX">
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">
                                Select Job
                            </label>

                            <select class="form-select form-select-lg rounded-3"
                                    name="job_id"
                                    required>

                                <option value="">Choose Job</option>

                                @foreach($jobs as $job)
                                    <option value="{{ $job->id }}">
                                        {{ $job->title }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">
                                Cover Letter
                            </label>

                            <textarea
                                class="form-control rounded-3"
                                rows="6"
                                name="cover_letter"
                                placeholder="Write your cover letter..."></textarea>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">
                                Upload Resume
                            </label>

                            <input type="file"
                                   class="form-control form-control-lg rounded-3"
                                   name="resume">

                            <small class="text-muted">
                                PDF, DOC, DOCX only
                            </small>
                        </div>

                        <div class="d-grid">
                      <div class="text-center">
                <button type="submit"
            class="btn btn-success btn-sm px-4 py-2 rounded-3 shadow">
                  Submit Application
               </button>
                 </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection