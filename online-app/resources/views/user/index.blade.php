@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">User List</h5>

            <a href="{{ route('users.create') }}" class="btn btn-light btn-sm">
                + Add User
            </a>
        </div>

        <div class="card-body">

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert">
                    </button>
                </div>
            @endif

            <div class="table-responsive">

                <table class="table table-striped table-hover align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th class="text-center">Email</th>
                            <th style="width:180px;"class="text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($users as $user)

                        <tr>

                            <td>{{ $user->id }}</td>

                            <td>
                                @if($user->image)
                                    <img src="{{ asset('storage/'.$user->image) }}"
                                         width="50"
                                         height="50"
                                         class="rounded-circle border">
                                @else
                                    <span class="text-muted">
                                        No Image
                                    </span>
                                @endif
                            </td>

                            <td>{{ $user->name }}</td>

                            <td>{{ $user->email }}</td>

                            <td class="d-flex gap-1">

                                <a href="{{ route('users.edit',$user->id) }}"
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('users.destroy',$user->id) }}"
                                      method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this user?')">
                                        Delete
                                    </button>

                                </form>

                            </td>

                        </tr>

                        @empty

                        <tr>
                            <td colspan="5" class="text-center text-muted">
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