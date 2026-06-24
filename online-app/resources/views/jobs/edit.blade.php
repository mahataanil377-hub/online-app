@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-warning text-dark">
                    <h5 class="mb-0">Edit Job</h5>
                </div>

                <div class="card-body">

                    <form action="{{ route('jobs.update', $job->id) }}" method="POST">
                        @csrf
                        @method('')

                        <div class="mb-3">
                            <label class="form-label">Job Title</label>
                            <input type="text" name="title" value="{{ $job->title }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Company Name</label>
                            <input type="text" name="company_name" value="{{ $job->company_name }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Location</label>
                            <input type="text" name="location" value="{{ $job->location }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-select">
                                <option value="active" {{ $job->status == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ $job->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-success w-100">
                                Update
                            </button>
                            <a href="{{ route('jobs.index') }}" class="btn btn-secondary w-100">
                                Cancel
                            </a>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection