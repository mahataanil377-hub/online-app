@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow-sm">

        <div class="card-header bg-warning text-dark">
            <h4>Edit Company</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('company.update', $company->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                {{-- COMPANY NAME --}}
                <div class="mb-3">
                    <label class="form-label">Company Name</label>
                    <input type="text"
                           name="company_name"
                           value="{{ $company->company_name }}"
                           class="form-control"
                           required>
                </div>

                {{-- EMAIL --}}
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email"
                           name="email"
                           value="{{ $company->email }}"
                           class="form-control">
                </div>

                {{-- PHONE --}}
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text"
                           name="phone"
                           value="{{ $company->phone }}"
                           class="form-control">
                </div>

                {{-- ADDRESS --}}
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea name="location"
                              class="form-control"
                              rows="3">{{ $company->location }}</textarea>
                </div>

                {{-- CURRENT LOGO --}}
                <div class="mb-3">
                    <label class="form-label">Current Logo</label><br>

                    @if($company->logo)
                        <img src="{{ asset('logos/'.$company->logo) }}"
                             width="80"
                             height="80"
                             style="object-fit: cover; border-radius: 10px;">
                    @else
                        <span class="text-muted">No Logo</span>
                    @endif
                </div>

                {{-- NEW LOGO --}}
                <div class="mb-3">
                    <label class="form-label">Change Logo</label>
                    <input type="file"
                           name="logo"
                           class="form-control"
                           accept="image/*">
                </div>

                <div class="text-end">

                    <a href="{{ route('company.index') }}"
                       class="btn btn-secondary">
                        Cancel
                    </a>

                    <button type="submit"
                            class="btn btn-success">
                        Update Company
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>

@endsection