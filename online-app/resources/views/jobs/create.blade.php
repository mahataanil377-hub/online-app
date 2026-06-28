@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow border-0">

        <!-- Header -->
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Add New Job</h4>
        </div>

        <!-- Body -->
        <div class="card-body">

            <form action="{{ route('jobs.store') }}" method="POST">
                @csrf

                <!-- Title -->
                <div class="mb-3">
                    <label class="form-label">Job Title</label>
                    <input type="text" name="title" class="form-control"
                        value="{{ old('title') }}" required>
                </div>

                <!-- Company -->
                <div class="mb-3">
                    <label class="form-label">Company</label>

                    <select name="company_id" class="form-select" required>
                        <option value="">Select Company</option>

                        @foreach($companies as $company)
                            <option value="{{ $company->id }}">
                                {{ $company->name }}
                            </option>
                        @endforeach

                    </select>
                </div>

                <!-- Location -->
                <div class="mb-3">
                    <label class="form-label">Location</label>
                    <input type="text" name="location"
                        class="form-control"
                        value="{{ old('location') }}">
                </div>

                <!-- Job Type -->
                <div class="mb-3">
                    <label class="form-label">Job Type</label>

                    <select name="job_type" class="form-select">
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Internship">Internship</option>
                        <option value="Remote">Remote</option>
                    </select>

                </div>

                <!-- Position -->
                <div class="mb-3">
                    <label class="form-label">Position</label>
                    <input type="text" name="position"
                        class="form-control"
                        value="{{ old('position') }}">
                </div>

                <!-- Startup -->
                <div class="mb-3">
                    <label class="form-label">Startup</label>

                    <select name="startup" class="form-select">
                        <option value="1">Yes</option>
                        <option value="0" selected>No</option>
                    </select>

                </div>

                <!-- Experience -->
                <div class="mb-3">
                    <label class="form-label">Experience</label>

                    <input type="text"
                        name="experience"
                        class="form-control"
                        placeholder="Eg: 2 Years">
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label class="form-label">Description</label>

                    <textarea
                        name="description"
                        rows="5"
                        class="form-control">{{ old('description') }}</textarea>
                </div>

                <!-- Categories -->
                <div class="mb-3">
                    <label class="form-label">Categories</label>

                    <select name="categories[]" class="form-select" multiple>

                        @foreach($categories as $category)

                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>

                        @endforeach

                    </select>

                    <small class="text-muted">
                        Hold Ctrl to select multiple categories.
                    </small>
                </div>

                <!-- Buttons -->
                <div class="text-end">

                    <a href="{{ route('jobs.index') }}"
                        class="btn btn-secondary">
                        Cancel
                    </a>

                    <button type="submit"
                        class="btn btn-success">
                        Save Job
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection