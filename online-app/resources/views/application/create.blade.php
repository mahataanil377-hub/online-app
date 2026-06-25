@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Apply for Job</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('application.store') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <!-- NAME -->
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <!-- EMAIL -->
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <!-- PHONE -->
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control">
                </div>

                <!-- JOB SELECT -->
                <div class="mb-3">
                    <label class="form-label">Select Job</label>
                    <select name="job_id" class="form-control" required>
                        <option value="">-- Select Job --</option>

                        @foreach($jobs as $job)
                            <option value="{{ $job->id }}">
                                {{ $job->title }}
                            </option>
                        @endforeach

                    </select>
                </div>

                <!-- COVER LETTER -->
                <div class="mb-3">
                    <label class="form-label">Cover Letter</label>
                    <textarea name="cover_letter" class="form-control" rows="4"></textarea>
                </div>

                <!-- RESUME -->
                <div class="mb-3">
                    <label class="form-label">Resume (PDF)</label>
                    <input type="file" name="resume" class="form-control">
                </div>

                <!-- BUTTON -->
                <button type="submit" class="btn btn-success">
                    Submit Application
                </button>

            </form>

        </div>

    </div>

</div>

@endsection