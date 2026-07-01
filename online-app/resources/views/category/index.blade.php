@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow border-0">

        <!-- HEADER -->
        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">

            <h4 class="mb-0">Categories List</h4>

            <a href="{{ route('category.create') }}" class="btn btn-light">
                + Add Category
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
                            <th>Icon</th>
                            <th>Status</th>
                            <th class="text-center" width="150">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($categories as $item)

                        <tr>

                            <!-- ID -->
                            <td>{{ $item->id }}</td>

                            <!-- NAME -->
                            <td>
                                <i class="bi bi-tag-fill text-success me-1"></i>
                                {{ $item->name }}
                            </td>

                            <!-- ICON -->
                            <td>
                                @if(!empty($item->icon))
                                    <img src="{{ asset('storage/'.$item->icon) }}"
                                         width="40"
                                         height="40"
                                         class="rounded border"
                                         style="object-fit:cover;">
                                @else
                                    <span class="text-muted">No Icon</span>
                                @endif
                            </td>

                            <!-- STATUS -->
                            <td>
                                @if($item->status)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>

                            <!-- ACTION -->
                            <td>
                                <div class="d-flex gap-1">

                                    <a href="{{ route('category.edit', $item->id) }}"
                                       class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form action="{{ route('category.destroy', $item->id) }}"
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
                                No Categories Found
                            </td>
                        </tr>

                        @endforelse

                    </tbody>

                </table>
           {{ $categories->links() }}
            </div>

        </div>

    </div>

</div>

@endsection