@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow-sm">

        <div class="card-header bg-success text-white">
            <h4>Add New Company</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- COMPANY NAME --}}
                <div class="mb-3">
                    <label>Company Name</label>
                    <input type="text" name="company_name" class="form-control" required>
                </div>

                {{-- EMAIL --}}
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                {{-- PHONE --}}
                <div class="mb-3">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control">
                </div>

                {{-- LOCATION --}}
                <div class="mb-3">
                    <label>Address</label>
                    <textarea name="location" class="form-control"></textarea>
                </div>

                {{-- LOGO --}}
                <div class="mb-3">
                    <label>Company Logo</label>
                    <input type="file" name="logo" class="form-control" accept="image/*">
                </div>

                <button type="submit" class="btn btn-success">
                    Save Company
                </button>

            </form>

        </div>
    </div>

</div>

@endsection