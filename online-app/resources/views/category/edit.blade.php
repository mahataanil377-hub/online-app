@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow">

        <!-- Header -->
        <div class="card-header bg-warning text-dark">
            <h5 class="mb-0">Edit Category</h5>
        </div>

        <div class="card-body">

            <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Category Name --}}
                <div class="mb-3">
                    <label class="form-label">Category Name</label>
                    <input type="text"
                           name="name"
                           class="form-control"
                           value="{{ $category->name }}"
                           required>
                </div>

                {{-- Current Icon --}}
                <div class="mb-3">
                    <label class="form-label">Current Icon</label><br>

                    @if($category->icon)
                        <img src="{{ asset('uploads/category/'.$category->icon) }}"
                             width="60"
                             height="60"
                             alt="icon">
                    @else
                        <span class="text-muted">No icon uploaded</span>
                    @endif
                </div>

                {{-- Change Icon --}}
                <div class="mb-3">
                    <label class="form-label">Change Icon</label>
                    <input type="file"
                           name="icon"
                           class="form-control">
                </div>

                {{-- Status --}}
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-control">

                        <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>
                            Active
                        </option>

                        <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>
                            Inactive
                        </option>

                    </select>
                </div>

                {{-- Buttons --}}
                <button type="submit" class="btn btn-warning">
                    Update Category
                </button>

                <a href="{{ route('category.index') }}" class="btn btn-secondary">
                    Cancel
                </a>

            </form>

        </div>
    </div>

</div>

@endsection