@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-warning">
            <h5 class="mb-0">Edit Job</h5>
        </div>

        <div class="card-body">

            <form action="{{ route('jobs.update', $job->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- TITLE -->
                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="title" value="{{ $job->title }}" class="form-control" required>
                </div>

                <!-- COMPANY -->
                <div class="mb-3">
                    <label>Company</label>
                    <select name="company_id" class="form-control">
                        @foreach($companies as $company)
                            <option value="{{ $company->id }}"
                                {{ $job->company_id == $company->id ? 'selected' : '' }}>
                                {{ $company->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- LOCATION -->
                <div class="mb-3">
                    <label>Location</label>
                    <input type="text" name="location" value="{{ $job->location }}" class="form-control">
                </div>

                <!-- JOB TYPE -->
                <div class="mb-3">
                    <label>Job Type</label>
                    <input type="text" name="job_type" value="{{ $job->job_type }}" class="form-control">
                </div>

                <!-- POSITION -->
                <div class="mb-3">
                    <label>Position</label>
                    <input type="text" name="position" value="{{ $job->position }}" class="form-control">
                </div>

                <!-- STARTUP -->
                <div class="mb-3">
                    <label>Startup</label>
                    <input type="text" name="startup" value="{{ $job->startup }}" class="form-control">
                </div>

                <!-- EXPERIENCE -->
                <div class="mb-3">
                    <label>Experience</label>
                    <input type="text" name="experience" value="{{ $job->experience }}" class="form-control">
                </div>

                <!-- DESCRIPTION -->
                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control">{{ $job->description }}</textarea>
                </div>

                <!-- CATEGORIES -->
                <div class="mb-3">
                    <label>Categories</label><br>

                    @foreach($categories as $cat)
                        <label class="me-2">
                            <input type="checkbox" name="categories[]" value="{{ $cat->id }}"
                                {{ in_array($cat->id, $job->categories->pluck('id')->toArray()) ? 'checked' : '' }}>
                            {{ $cat->name }}
                        </label>
                    @endforeach
                </div>

                <button class="btn btn-primary">
                    Update Job
                </button>

            </form>

        </div>
    </div>

</div>

@endsection