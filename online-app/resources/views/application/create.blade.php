@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">
    <div class="card shadow border-0">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Create Application</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('application.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- USER --}}
                <div class="mb-3">
                    <label>User</label>
                    <select name="user_id" class="form-control" required>
                        <option value="">Select User</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- JOB --}}
                <div class="mb-3">
                    <label>Job</label>
                    <select name="job_id" class="form-control" required>
                        <option value="">Select Job</option>
                        @foreach($jobs as $job)
                            <option value="{{ $job->id }}">{{ $job->title ?? $job->name }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- COVER LETTER --}}
                <div class="mb-3">
                    <label>Cover Letter</label>
                    <textarea name="cover_letter" class="form-control" rows="4"></textarea>
                </div>

                {{-- CV UPLOAD --}}
                <div class="mb-3">
                    <label>CV (PDF)</label>
                    <input type="file" name="cv" class="form-control">
                </div>

                {{-- STATUS (optional) --}}
                <div class="mb-3">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="pending">Pending</option>
                        <option value="accepted">Accepted</option>
                        <option value="rejected">Rejected</option>
                    </select>
                </div>

                <button class="btn btn-success">
                    Save Application
                </button>

            </form>

        </div>

    </div>
</div>

@endsection