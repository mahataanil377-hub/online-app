@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow border-0">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Apply for Job</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('application.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Applicant Name</label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               value="{{ old('name') }}"
                               required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email</label>
                        <input type="email"
                               name="email"
                               class="form-control"
                               value="{{ old('email') }}"
                               required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text"
                               name="phone"
                               class="form-control"
                               value="{{ old('phone') }}"
                               required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Company</label>
                        <input type="text"
                               name="company"
                               class="form-control"
                               value="{{ old('company') }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Position</label>
                        <input type="text"
                               name="position"
                               class="form-control"
                               value="{{ old('position') }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Skills</label>
                        <input type="text"
                               name="skills"
                               class="form-control"
                               value="{{ old('skills') }}"
                               placeholder="Laravel, PHP, JavaScript">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Upload Resume</label>
                        <input type="file"
                               name="resume"
                               class="form-control">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Cover Letter</label>
                        <textarea name="cover_letter"
                                  class="form-control"
                                  rows="5">{{ old('cover_letter') }}</textarea>
                    </div>

                </div>

                <button type="submit" class="btn btn-success">
                    Submit Application
                </button>

                <a href="{{ route('application.index') }}"
                   class="btn btn-secondary">
                    Cancel
                </a>

            </form>

        </div>

    </div>

</div>

@endsection