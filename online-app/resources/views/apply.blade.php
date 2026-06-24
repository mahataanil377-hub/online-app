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
                            <ul>
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
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                        </div>

                        <div class="row">

                            <!-- Phone -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>

                            <!-- Company -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Company</label>
                                <input type="text" name="company" class="form-control" required>
                            </div>

                        </div>

                        <!-- Address -->
                        <div class="mb-3">
                            <label class="form-label">position</label>
                            <input type="text" name="position" class="form-control">
                        </div>

                        <!-- Skills -->
                        <div class="mb-3">
                            <label class="form-label">Skills</label>
                            <input type="text"
                                   name="skills"
                                   class="form-control"
                                   placeholder="Laravel, PHP, Bootstrap">
                        </div>

                        <!-- Resume -->
                        <div class="mb-3">
                            <label class="form-label">Resume</label>
                            <input type="file" name="resume" class="form-control">
                        </div>

                        <!-- Cover Letter -->
                        <div class="mb-3">
                            <label class="form-label">Cover Letter</label>
                            <textarea name="cover_letter"
                                      rows="5"
                                      class="form-control">write to latter</textarea>
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-success w-10 align-items-center d-flex justify-content-center">
                            Submmit
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection