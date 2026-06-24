@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow border-0">

        <!-- Header -->
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Edit User</h4>
            <a href="{{ route('users.index') }}" class="btn btn-light btn-sm">Back</a>
        </div>

        <div class="card-body">

            <form action="{{ route('users.update', $user->id) }}" 
                  method="POST" 
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="row">

                    <!-- Current Image -->
                    <div class="col-md-12 mb-3">
                        <label class="form-label fw-bold">Current Image</label><br>

                        @if($user->image)
                            <img src="{{ asset('uploads/users/' . $user->image) }}" 
                                 width="100" 
                                 height="100"
                                 class="rounded-circle border shadow-sm">
                        @else
                            <p class="text-muted">No image uploaded</p>
                        @endif
                    </div>

                    <!-- Upload Image -->
                    <div class="col-md-12 mb-3">
                        <label class="form-label fw-bold">Change Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <!-- Name -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Name</label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               value="{{ $user->name }}"
                               required>
                    </div>

                    <!-- Email -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email"
                               name="email"
                               class="form-control"
                               value="{{ $user->email }}"
                               required>
                    </div>

                  

                    <!-- Password -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Password</label>
                        <input type="password"
                               name="password"
                               class="form-control"
                               placeholder="Leave blank if not changing">
                        <small class="text-muted">Only fill if you want to change password</small>
                    </div>

                </div>

                <!-- Buttons -->
                <div class="d-flex gap-2 mt-3">

                    <button type="submit" class="btn btn-success">
                        Update User
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