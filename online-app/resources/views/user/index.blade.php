@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow border-0">

        <!-- HEADER -->
        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">

            <h4 class="mb-0">User List</h4>

            <a href="{{ route('users.create') }}" class="btn btn-light">
                + Add User
            </a>

        </div>

        <!-- BODY -->
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
                            <th>Created</th>
                            <th class="text-center" width="200">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($users as $user)

                        <tr>

                            <!-- ID -->
                            <td>{{ $user->id }}</td>

                            <!-- NAME -->
                            <td>
                                <i class="bi bi-person-circle text-success me-1"></i>
                                {{ $user->name }}
                            </td>

                            <!-- EMAIL -->
                            <td>
                                <i class="bi bi-envelope text-muted me-1"></i>
                                {{ $user->email }}
                            </td>

                            <!-- CREATED -->
                            <td>
                                {{ $user->created_at->format('d M Y') }}
                            </td>

                            <!-- ACTION -->
                            <td>
                                <div class="d-flex gap-1">

                                    <a href="{{ route('users.show', $user->id) }}"
                                       class="btn btn-info btn-sm">
                                        Show
                                    </a>

                                    <a href="{{ route('users.edit', $user->id) }}"
                                       class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form action="{{ route('users.destroy', $user->id) }}"
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
                            <td colspan="5" class="text-center text-muted py-4">
                                No Users Found
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