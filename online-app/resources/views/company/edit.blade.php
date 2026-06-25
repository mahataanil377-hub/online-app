@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-warning text-dark">
            <h5 class="mb-0">Edit Company</h5>
        </div>

        <div class="card-body">

            <form action="{{ route('company.update', $company->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Company Name</label>
                    <input type="text" name="name" value="{{ $company->name }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ $company->email }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Phone</label>
                    <input type="text" name="phone" value="{{ $company->phone }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>City</label>
                    <input type="text" name="city" value="{{ $company->city }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Industry</label>
                    <input type="text" name="industry" value="{{ $company->industry }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Current Logo</label><br>

                    @if($company->logo)
                        <img src="{{ asset('storage/'.$company->logo) }}" width="80">
                    @else
                        N/A
                    @endif
                </div>

                <div class="mb-3">
                    <label>Change Logo</label>
                    <input type="file" name="logo" class="form-control">
                </div>

                <button class="btn btn-primary">
                    Update Company
                </button>

            </form>

        </div>
    </div>

</div>

@endsection