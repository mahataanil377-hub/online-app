@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-warning text-dark">
            <h5>Edit Category</h5>
        </div>

        <div class="card-body">

            <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control"
                           value="{{ $category->name }}" required>
                </div>

                {{-- CURRENT ICON --}}
                @if($category->icon)
                    <div class="mb-3">
                        <label>Current Icon</label><br>
                        <img src="{{ asset('uploads/category/'.$category->icon) }}"
                             width="60" height="60">
                    </div>
                @endif

                {{-- NEW ICON UPLOAD --}}
                <div class="mb-3">
                    <label>Change Icon</label>
                    <input type="file" name="icon" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Status</label>
                    <select name="status" class="form-control">

                        <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>
                            Active
                        </option>

                        <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>
                            Inactive
                        </option>

                    </select>
                </div>

                <button class="btn btn-primary w-100">
                    Update Category
                </button>

            </form>

        </div>

    </div>

</div>

@endsection