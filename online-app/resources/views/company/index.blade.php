@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">Company List</h4>

    <a href="{{ route('company.create') }}" class="btn btn-primary">
        + Add Company
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card shadow">
    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Logo</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th>Industry</th>
                        <th width="170">Action</th>
                    </tr>
                </thead>

                <tbody>

                @forelse($companies as $company)

                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>
                            @if($company->logo)
                                <img
                                    src="{{ asset('storage/'.$company->logo) }}"
                                    alt="Logo"
                                    width="60"
                                    height="60"
                                    style="object-fit:cover;border-radius:8px;border:1px solid #ddd;">
                            @else
                                <span class="text-muted">No Logo</span>
                            @endif
                        </td>

                        <td>{{ $company->name }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->phone }}</td>
                        <td>{{ $company->city }}</td>
                        <td>{{ $company->industry }}</td>

                        <td>
                            <a href="{{ route('company.edit', $company->id) }}"
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('company.destroy', $company->id) }}"
                                  method="POST"
                                  class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure?')">
                                    Delete
                                </button>

                            </form>
                        </td>
                    </tr>

                @empty

                    <tr>
                        <td colspan="8" class="text-center">
                            No Companies Found
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
