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
                

                <thead class="table-light ">
                    <tr>
                        <th>ID</th>
                        <th class="text-center">Applicant Name</th>
                        <th class="text-center">Applied Date</th>
                        <th class="text-center">Email</th>
                        <th class="">Phone</th>
                        <th class="text-center">Company</th>
                        <th class="text-center">Position</th>
                        <th class="text-center">Skills</th>
                        <th class="text-center">Resume</th>
                        <th width="150" class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($applications as $application)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $application->name }}</td>

                        <td>
                            {{ $application->created_at ? $application->created_at->format('d M Y') : '-' }}
                        </td>

                        <td>{{ $application->email }}</td>

                        <td>{{ $application->phone }}</td>

                        <td>{{ $application->company }}</td>

                        <td>{{ $application->position }}</td>

                        <td>
                            <span class="badge  text-dark">
                                {{ $application->skills ?? 'N/A' }}
                            </span>
                        </td>

                        <td>
                            @if($application->resume)
                                <a href="{{ asset('storage/' . $application->resume) }}"
                                   target="_blank"
                                   class="btn btn-secondary btn-sm">
                                    View Resume
                                </a>
                            @else
                                <span class="text-muted">No Resume</span>
                            @endif
                        </td>

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
