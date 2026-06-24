@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow">

        <!-- Header -->
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">Create Category</h5>
        </div>

        <div class="card-body">

            <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Category Name --}}
                <div class="mb-3">
                    <label class="form-label">Category Name</label>
                    <input type="text"
                           name="name"
                           class="form-control"
                           placeholder="Enter category name"
                           required>
                </div>

                {{-- Icon --}}
                <div class="mb-3">
                    <label class="form-label">Category Icon</label>
                    <input type="file"
                           name="icon"
                           class="form-control">
                </div>

                {{-- Status --}}
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>

                {{-- Buttons --}}
                <button type="submit" class="btn btn-success">
                    Save Category
                </button>

                <a href="{{ route('category.index') }}" class="btn btn-secondary">
                    Cancel
                </a>

            </form>

        </div>
    </div>

</div>

@endsection