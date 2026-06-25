@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

<div class="card shadow">

    <div class="card-header bg-info text-white">
        <h5 class="mb-0">User Details</h5>
    </div>

    <div class="card-body">

        <table class="table table-bordered">

            <tr>
                <th width="200">ID</th>
                <td>{{ $user->id }}</td>
            </tr>

            <tr>
                <th>Name</th>
                <td>{{ $user->name }}</td>
            </tr>

            <tr>
                <th>Email</th>
                <td>{{ $user->email }}</td>
            </tr>

            <tr>
                <th>Phone</th>
                <td>{{ $user->phone }}</td>
            </tr>

            <tr>
                <th>Created At</th>
                <td>{{ $user->created_at->format('d M Y h:i A') }}</td>
            </tr>

            <tr>
                <th>Updated At</th>
                <td>{{ $user->updated_at->format('d M Y h:i A') }}</td>
            </tr>

        </table>

        <a href="{{ route('users.edit', $user->id) }}"
           class="btn btn-warning">
            Edit
        </a>

        <a href="{{ route('users.index') }}"
           class="btn btn-secondary">
            Back
        </a>

    </div>

</div>

</div>

@endsection
