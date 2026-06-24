@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow border-0">

        <!-- Header -->
        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Add New User</h4>
            <a href="{{ route('users.index') }}" class="btn btn-light btn-sm">Back</a>
        </div>

        <div class="card-body">

            <form action="{{ route('users.store') }}" 
                  method="POST" 
                  enctype="multipart/form-data">

                @csrf

                <div class="row">

                    <!-- Image -->
                    <div class="col-md-12 mb-3">
                        <label class="form-label fw-bold">Profile Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <!-- Name -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Name</label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               placeholder="Enter full name"
                               required>
                    </div>

                    <!-- Email -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email"
                               name="email"
                               class="form-control"
                               placeholder="Enter email"
                               required>
                    </div>

                    

                    <!-- Password -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Password</label>
                        <input type="password"
                               name="password"
                               class="form-control"
                               placeholder="Create password"
                               required>
                    </div>

                </div>

                <!-- Buttons -->
                <div class="d-flex gap-2 mt-3">

                    <button type="submit" class="btn btn-success">
                        Save User
                    </button>

                    <a href="{{ route('users.index') }}" class="btn btn-secondary">
                        Cancel
                    </a>

                </div>

            </form>

        </div>
    </div>

</div>

@endsection