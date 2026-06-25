@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Add Company</h5>
        </div>

        <div class="card-body">

            <form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label>Company Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control">
                </div>

                <div class="mb-3">
                    <label>City</label>
                    <input type="text" name="city" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Industry</label>
                    <input type="text" name="industry" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Logo</label>
                    <input type="file" name="logo" class="form-control">
                </div>

                <button class="btn btn-success">
                    Save Company
                </button>

            </form>

        </div>
    </div>

</div>

@endsection