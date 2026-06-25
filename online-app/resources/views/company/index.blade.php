@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between mb-3">
        <h4>Company List</h4>
        <a href="{{ route('company.create') }}" class="btn btn-primary">
            + Add Company
        </a>
    </div>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Logo</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th>Industry</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($companies as $company)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>
                            @if($company->logo)
                                <a href="{{ route('company.logo', $company->id) }}">
                                    <img src="{{ Storage::url($company->logo) }}" width="50">
                                </a>
                            @else
                                N/A
                            @endif
                        </td>

                        <td>{{ $company->name }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->phone }}</td>
                        <td>{{ $company->city }}</td>
                        <td>{{ $company->industry }}</td>

                        <td>
                            <a href="{{ route('company.edit', $company->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('company.destroy', $company->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>

</div>

@endsection