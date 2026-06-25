@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-primary text-white d-flex justify-content-between">
            <h5>Categories List</h5>

            <a href="{{ route('category.create') }}" class="btn btn-light btn-sm">
                +Add Category
            </a>
        </div>

        <div class="card-body">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Icon</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($categories as $item)
                        <tr>
                            <td>{{ $item->id }}</td>

                            {{-- NAME --}}
                            <td>{{ $item->name }}</td>

                            {{-- ICON IMAGE --}}
                             <td>
                        @if(!empty($item->icon))
                             <img src="{{ asset('storage/'.$item->icon) }}" width="40" alt="Icon">
                                      @else
                                            -
                                        @endif
                                     </td>
                            {{-- STATUS --}}
                            <td>
                                @if($item->status)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>

                            {{-- ACTION --}}
                            <td>
                                <a href="{{ route('category.edit', $item->id) }}"
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('category.destroy', $item->id) }}"
                                      method="POST"
                                      style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Delete this category?')">
                                        Delete
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">
                                No Categories Found
                            </td>
                        </tr>
                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection