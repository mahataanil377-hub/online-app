@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow border-0">

        <!-- HEADER -->
        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">

            <h4 class="mb-0">Job List</h4>

            <a href="{{ route('jobs.create') }}" class="btn btn-light">
                + Add Job
            </a>

        </div>

        <!-- BODY -->
        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover table-bordered align-middle">

                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Company</th>
                            <th>Location</th>
                            <th>Type</th>
                            <th>Position</th>
                            <th>Startup</th>
                            <th>Experience</th>
                            <th>Description</th>
                            <th>Categories</th>
                            <th class="text-center" width="200">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($jobs as $job)

                        <tr>

                            <!-- ID -->
                            <td>{{ $job->id }}</td>

                            <!-- TITLE -->
                            <td>
                                <i class="bi bi-briefcase text-success me-1"></i>
                                {{ $job->title }}
                            </td>

                            <!-- COMPANY -->
                            <td>
                                {{ $job->company->name ?? 'N/A' }}
                            </td>

                            <!-- LOCATION -->
                            <td>
                                <i class="bi bi-geo-alt text-muted me-1"></i>
                                {{ $job->location ?? '-' }}
                            </td>

                            <!-- TYPE -->
                            <td>
                                <span class="badge bg-primary">
                                    {{ $job->job_type ?? '-' }}
                                </span>
                            </td>

                            <!-- POSITION -->
                            <td>{{ $job->position ?? '-' }}</td>

                            <!-- STARTUP -->
                            <td>
                                @if($job->startup)
                                    <span class="badge bg-warning text-dark">Yes</span>
                                @else
                                    <span class="badge bg-secondary">No</span>
                                @endif
                            </td>

                            <!-- EXPERIENCE -->
                            <td>{{ $job->experience ?? '-' }}</td>

                            <!-- DESCRIPTION -->
                            <td>
                                {{ \Illuminate\Support\Str::limit($job->description ?? '', 40) }}
                            </td>

                            <!-- CATEGORIES -->
                            <td>
                                @forelse($job->categories as $category)
                                    <span class="badge bg-success me-1 mb-1">
                                        {{ $category->name }}
                                    </span>
                                @empty
                                    <span class="text-muted">-</span>
                                @endforelse
                            </td>

                            <!-- ACTION -->
                            <td>
                                <div class="d-flex gap-1">

                                    <a href="{{ route('jobs.show', $job->id) }}"
                                       class="btn btn-info btn-sm">
                                        View
                                    </a>

                                    <a href="{{ route('jobs.edit', $job->id) }}"
                                       class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form action="{{ route('jobs.destroy', $job->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Are you sure?')">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-danger btn-sm">
                                            Delete
                                        </button>

                                    </form>

                                </div>
                            </td>

                        </tr>

                        @empty

                        <tr>
                            <td colspan="11" class="text-center text-muted py-4">
                                No Jobs Found
                            </td>
                        </tr>

                        @endforelse

                    </tbody>

                </table>
          {{ $jobs->links() }}
            </div>

        </div>

    </div>

</div>

@endsection