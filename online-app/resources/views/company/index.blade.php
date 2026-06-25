@extends('layouts.sidebar')

@section('content')

<div class="card shadow-sm">

    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Company List</h4>

        <a href="{{ route('company.create') }}" class="btn btn-light btn-sm">
            + Add Company
        </a>
    </div>

    <div class="card-body">

        <table class="table table-striped table-hover align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Logo</th>
                    <th>Company Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th width="220">Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse($companies as $item)
                <tr>
                    <td>{{ $item->id }}</td>

                    {{-- LOGO --}}
                    <td>
                        @if($item->logo)
                            <img src="{{ asset('logos/'.$item->logo) }}"
                                 width="50"
                                 height="50"
                                 style="object-fit: cover; border-radius: 8px;">
                        @else
                            <span class="text-muted">No Logo</span>
                        @endif
                    </td>

                    <td>{{ $item->company_name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>

                    <td>
                        <a href="{{ route('company.edit', $item->id) }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('company.destroy', $item->id) }}"
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
                    <td colspan="6" class="text-center text-muted">
                        No companies found
                    </td>
                </tr>
                @endforelse
            </tbody>

        </table>

    </div>
</div>

@endsection