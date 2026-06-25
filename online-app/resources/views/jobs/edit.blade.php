@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-warning text-dark">
            <h5 class="mb-0">Edit Job</h5>
        </div>

        <div class="card-body">

            <form action="{{ route('jobs.update', $job->id) }}" method="POST">
                @csrf
                @method('PUT')

                {{-- TITLE --}}
                <div class="mb-3">
                    <label>Job Title</label>
                    <input type="text" name="title" class="form-control"
                           value="{{ $job->title }}" required>
                </div>

                {{-- COMPANY NAME --}}
                <div class="mb-3">
                    <label>Company Name</label>
                    <input type="text" name="company_name" class="form-control"
                           value="{{ $job->company_name }}" required>
                </div>

                {{-- LOCATION --}}
                <div class="mb-3">
                    <label>Location</label>
                    <input type="text" name="location" class="form-control"
                           value="{{ $job->location }}" required>
                </div>

                {{-- JOB TYPE --}}
                <div class="mb-3">
                    <label>Job Type</label>
                    <select name="job_type" class="form-control">

                        <option value="full-time"
                            {{ $job->job_type == 'full-time' ? 'selected' : '' }}>
                            Full Time
                        </option>

                        <option value="part-time"
                            {{ $job->job_type == 'part-time' ? 'selected' : '' }}>
                            Part Time
                        </option>

                        <option value="remote"
                            {{ $job->job_type == 'remote' ? 'selected' : '' }}>
                            Remote
                        </option>

                    </select>
                </div>

                {{-- DESCRIPTION --}}
                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="4">
                        {{ $job->description }}
                    </textarea>
                </div>

                {{-- STATUS --}}
                <div class="mb-3">
                    <label>Status</label>
                    <select name="status" class="form-control">

                        <option value="active"
                            {{ $job->status == 'active' ? 'selected' : '' }}>
                            Active
                        </option>

                        <option value="inactive"
                            {{ $job->status == 'inactive' ? 'selected' : '' }}>
                            Inactive
                        </option>

                    </select>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Update Job
                </button>

            </form>

        </div>

    </div>

</div>

@endsection