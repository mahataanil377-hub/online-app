@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-success text-white">
            <h5 class="mb-0">Add Job</h5>
        </div>

        <div class="card-body">

            <form action="{{ route('jobs.store') }}" method="POST">
                @csrf

                {{-- TITLE --}}
                <div class="mb-3">
                    <label>Job Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                {{-- COMPANY NAME --}}
                <div class="mb-3">
                    <label>Company Name</label>
                    <input type="text" name="company_name" class="form-control" required>
                </div>

                {{-- LOCATION --}}
                <div class="mb-3">
                    <label>Location</label>
                    <input type="text" name="location" class="form-control" required>
                </div>

                {{-- JOB TYPE --}}
                <div class="mb-3">
                    <label>Job Type</label>
                    <select name="job_type" class="form-control">
                        <option value="full-time">Full Time</option>
                        <option value="part-time">Part Time</option>
                        <option value="remote">Remote</option>
                    </select>
                </div>

                {{-- DESCRIPTION --}}
                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="4"></textarea>
                </div>

                {{-- STATUS --}}
                <div class="mb-3">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success w-100">
                    Save Job
                </button>

            </form>

        </div>

    </div>

</div>

@endsection