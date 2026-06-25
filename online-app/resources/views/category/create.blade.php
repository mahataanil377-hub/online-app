@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-success text-white">
            <h5>Add Category</h5>
        </div>

        <div class="card-body">

            <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- NAME --}}
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                {{-- ICON UPLOAD --}}
                <div class="mb-3">
                    <label>Icon (Image)</label>
                    <input type="file" name="icon" class="form-control">
                </div>

                {{-- STATUS --}}
                <div class="mb-3">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>

                <button class="btn btn-success w-100">
                    Save Category
                </button>

            </form>

        </div>

    </div>

</div>

@endsection