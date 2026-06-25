@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Create Job</h5>
        </div>

        <div class="card-body">

            <form action="{{ route('jobs.store') }}" method="POST">
                @csrf

                <!-- TITLE -->
                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                <!-- COMPANY -->
                <div class="mb-3">
                    <label>Company</label>
                    <select name="company_id" class="form-control" required>
                        <option value="">Select Company</option>
                        @foreach($companies as $company)
                            <option value="{{ $company->id }}">
                                {{ $company->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- LOCATION -->
                <div class="mb-3">
                    <label>Location</label>
                    <input type="text" name="location" class="form-control">
                </div>

                <!-- JOB TYPE -->
                <div class="mb-3">
                    <label>Job Type</label>
                    <input type="text" name="job_type" class="form-control">
                </div>

                <!-- POSITION -->
                <div class="mb-3">
                    <label>Position</label>
                    <input type="text" name="position" class="form-control">
                </div>

                <!-- STARTUP -->
                <div class="mb-3">
                    <label>Startup</label>
                    <input type="text" name="startup" class="form-control">
                </div>

                <!-- EXPERIENCE -->
                <div class="mb-3">
                    <label>Experience</label>
                    <input type="text" name="experience" class="form-control">
                </div>

                <!-- DESCRIPTION -->
                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>

                <!-- CATEGORIES (MANY TO MANY) -->
                <div class="mb-3">
                    <label>Categories</label><br>

                    @foreach($categories as $cat)
                        <label class="me-2">
                            <input type="checkbox" name="categories[]" value="{{ $cat->id }}">
                            {{ $cat->name }}
                        </label>
                    @endforeach
                </div>

                <button class="btn btn-success">
                    Save Job
                </button>

            </form>

        </div>
    </div>

</div>

@endsection