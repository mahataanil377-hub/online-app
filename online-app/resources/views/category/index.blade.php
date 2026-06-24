@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow">

        <!-- Header -->
        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Category List</h5>

            <a href="{{ route('category.create') }}" class="btn btn-light btn-sm">
                + Add Category
            </a>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-striped table-hover align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Icon</th>
                            <th>Status</th>
                            <th style="width: 180px;">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($categories as $cat)

                        <tr>

                            <td>{{ $cat->id }}</td>

                            <td class="fw-semibold">
                                {{ $cat->name }}
                            </td>

                            {{-- ICON --}}
                            <td>
                                @if($cat->icon)
                                    <img src="{{ asset('uploads/category/'.$cat->icon) }}"
                                         width="45"
                                         height="45"
                                         alt="icon">
                                @else
                                    N/A
                                @endif
                            </td>

                            {{-- STATUS --}}
                            <td>
                                @if($cat->status == 1)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>

                            {{-- ACTION --}}
                            <td class="d-flex gap-1">

                                <a href="{{ route('category.edit', $cat->id) }}"
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('category.destroy', $cat->id) }}"
                                      method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this category?')">
                                        Delete
                                    </button>

                                </form>

                            </td>

                        </tr>

                        @empty

                        <tr>
                            <td colspan="5" class="text-center text-muted py-3">
                                No categories found
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