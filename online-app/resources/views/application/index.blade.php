@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">
<div class="card shadow border-0">

    <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Application List</h4>

        <a href="{{ route('application.create') }}" class="btn btn-light">
            + Add Application
        </a>
    </div>

    <div class="card-body">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">

            <table class="table table-hover table-bordered align-middle">

                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Job</th>
                        <th>Applied Date</th>
                        <th>Cover Letter</th>
                        <th>Resume</th>
                        <th>Status</th>
                        <th width="150" class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($applications as $application)

                    <tr>

                        <!-- ID -->
                        <td>{{ $application->id }}</td>

                        <!-- NAME -->
                        <td>{{ $application->name }}</td>

                        <!-- EMAIL -->
                        <td>{{ $application->email }}</td>

                        <!-- PHONE -->
                        <td>{{ $application->phone ?? '-' }}</td>

                        <!-- JOB -->
                        <td>{{ $application->job->title ?? 'N/A' }}</td>

                        <!-- DATE -->
                        <td>
                            {{ $application->created_at ? $application->created_at->format('d M Y') : '-' }}
                        </td>

                        <!-- COVER LETTER -->
                        <td>
                            {{ \Illuminate\Support\Str::limit($application->cover_letter, 30) ?? '-' }}
                        </td>

                        <!-- RESUME -->
                        <td>
                            @if($application->resume)
                                <a href="{{ asset('storage/'.$application->resume) }}"
                                   target="_blank"
                                   class="btn btn-secondary btn-sm">
                                    View CV
                                </a>
                            @else
                                <span class="text-muted">No CV</span>
                            @endif
                        </td>

                        <!-- STATUS -->
                        <td>
                            @if($application->status == 'pending')
                                <span class="badge bg-warning text-dark">Pending</span>
                            @elseif($application->status == 'accepted')
                                <span class="badge bg-success">Accepted</span>
                            @else
                                <span class="badge bg-danger">Rejected</span>
                            @endif
                        </td>

                        <!-- ACTION -->
                        <td>
                            <div class="d-flex gap-1">

                                <a href="{{ route('application.show', $application->id) }}"
                                   class="btn btn-info btn-sm">
                                    View
                                </a>

                                <form action="{{ route('application.destroy', $application->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Are you sure you want to delete this application?')">

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
                        <td colspan="10" class="text-center text-muted py-4">
                            No Applications Found
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