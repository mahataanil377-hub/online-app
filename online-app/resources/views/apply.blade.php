@extends('layouts.app')

@section('content')

<div class="container py-5">

    <!-- Title -->
    <div class="text-center mb-5">
        <h1 class="fw-bold text-success">
            Apply For Your Dream Job
        </h1>

        <p class="text-muted">
            Complete the form below and submit your application.
        </p>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">

        <!-- Job Details -->
        <div class="col-lg-4 mb-4">

            <div class="card shadow border-0">

                <div class="card-body">

                    <h3>Laravel Developer</h3>

                    <h6 class="text-success">
                        OnlineJob Pvt. Ltd.
                    </h6>

                    <hr>

                    <p><strong>Location:</strong>Dhangadhi,Kailali</p>
                    <p><strong>Type:</strong> Full Time</p>
                    <p><strong>Salary:</strong> Rs. 50,000 - 80,000</p>
                    <p><strong>Experience:</strong>less than 2-year</p>

                </div>

            </div>

        </div>
        
<!-- Application Form -->
<div class="col-lg-8">

    <div class="card shadow border-0">

        <div class="card-body p-4">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <h3 class="mb-4">Job Application Form</h3>

            <form action="{{ route('application.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="row">

                    <!-- Name -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               required>
                    </div>

                    <!-- Email -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email</label>
                        <input type="email"
                               name="email"
                               class="form-control"
                               required>
                    </div>

                </div>

                <!-- Phone -->
                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="text"
                           name="phone"
                           class="form-control">
                </div>

                <!-- Job -->
                <div class="mb-3">
                    <label class="form-label">Select Job</label>
                    <select name="job_id" class="form-select" required>

                        <option value="">Choose Job</option>

                        @foreach ($jobs as $job)
                            <option value="{{ $job->id }}">{{ $job->title }}</option>
                        @endforeach

                    </select>
                </div>

                <!-- Cover Letter -->
                <div class="mb-3">
                    <label class="form-label">Cover Letter</label>
                    <textarea name="cover_letter"
                              rows="5"
                              class="form-control"
                              placeholder="Write your cover letter here..."></textarea>
                </div>

                <!-- Resume -->
                <div class="mb-4">
                    <label class="form-label">Upload Resume</label>
                    <input type="file"
                           name="resume"
                           class="form-control">

                    <small class="text-muted">
                        PDF, DOC, DOCX only
                    </small>
                </div>
                

                <!-- Submit -->
                <button type="submit"
                        class="btn btn-success px-3 py-2">
                    Submit Application
                </button>

            </form>

        </div>

    </div>

</div>

    </div>

</div>

@endsection