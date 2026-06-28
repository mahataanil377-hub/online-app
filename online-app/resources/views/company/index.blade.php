@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow border-0">

        <!-- HEADER -->
        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">

            <h4 class="mb-0">Company List</h4>

            <a href="{{ route('company.create') }}" class="btn btn-light">
                + Add Company
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
                            <th>Logo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Industry</th>
                            <th class="text-center" width="150">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($companies as $company)

                        <tr>

                            <!-- ID -->
                            <td>{{ $company->id }}</td>

                            <!-- LOGO -->
                            <td>
                                @if(!empty($company->logo))
                                    <img src="{{ asset('storage/'.$company->logo) }}"
                                         width="40"
                                         height="40"
                                         class="rounded border"
                                         style="object-fit:cover;">
                                @else
                                    <span class="text-muted">No Logo</span>
                                @endif
                            </td>

                            <!-- NAME -->
                            <td>{{ $company->name }}</td>

                            <!-- EMAIL -->
                            <td>{{ $company->email }}</td>

                            <!-- PHONE -->
                            <td>{{ $company->phone }}</td>

                            <!-- CITY -->
                            <td>{{ $company->city }}</td>

                            <!-- INDUSTRY -->
                            <td>
                                <span class="badge bg-secondary">
                                    {{ $company->industry }}
                                </span>
                            </td>

                            <!-- ACTION -->
                            <td>
                                <div class="d-flex gap-1">

                                    <a href="{{ route('company.edit', $company->id) }}"
                                       class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form action="{{ route('company.destroy', $company->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Are you sure you want to delete this company?')">

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
                            <td colspan="8" class="text-center text-muted py-4">
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