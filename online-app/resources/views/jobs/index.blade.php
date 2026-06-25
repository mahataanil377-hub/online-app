@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Job List</h5>

            <a href="{{ route('jobs.create') }}" class="btn btn-light btn-sm">
                + Add Job
            </a>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-striped table-hover align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Company</th>
                            <th>Location</th>
                            <th>Job Type</th>
                            <th>Position</th>
                            <th>Startup</th>
                            <th>Experience</th>
                            <th>Description</th>
                            <th>Categories</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($jobs as $job)

                        <tr>

                            <td>{{ $job->id }}</td>

                            <td>{{ $job->title }}</td>

                            <td>{{ $job->company->name ?? 'N/A' }}</td>

                            <td>{{ $job->location ?? '-' }}</td>

                            <td>{{ $job->job_type ?? '-' }}</td>

                            <td>{{ $job->position ?? '-' }}</td>

                            <td>{{ $job->startup ?? '-' }}</td>

                            <td>{{ $job->experience ?? '-' }}</td>

                            <td>
                                {{ \Illuminate\Support\Str::limit($job->description ?? '', 30) }}
                            </td>

                            <!-- ✅ CATEGORIES ADDED -->
                         <td>
    @foreach($job->categories as $category)
        <span class="badge bg-primary me-1">
            {{ $category->name }}
        </span>
    @endforeach
</td>
                              
                              

                            <td class="d-flex gap-1">

                                <a href="{{ route('jobs.show', $job->id) }}" class="btn btn-primary btn-sm">
                                    View
                                </a>

                                <a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('jobs.destroy', $job->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this job?')">
                                        Delete
                                    </button>

                                </form>

                            </td>

                        </tr>

                        @empty
                        <tr>
                            <td colspan="11" class="text-center text-muted">
                                No jobs found
                            </td>
                        </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection