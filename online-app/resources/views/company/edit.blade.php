@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow-sm">
        <div class="card-header bg-warning text-dark">
            <h4>Edit Company</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('company.update', $company->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Company Name</label>
                    <input type="text"
                           name="company_name"
                           class="form-control"
                           value="{{ old('company_name', $company->company_name) }}"
                           placeholder="Enter company name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           value="{{ old('email', $company->email) }}"
                           placeholder="Enter company email">
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text"
                           name="phone"
                           class="form-control"
                           value="{{ old('phone', $company->phone) }}"
                           placeholder="Enter phone number">
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea name="address"
                              class="form-control"
                              rows="3"
                              placeholder="Enter company address">{{ old('address', $company->address) }}</textarea>
                </div>

                <div class="text-end">
                    <a href="{{ route('company.index') }}"
                       class="btn btn-secondary">
                        Cancel
                    </a>

                    <button type="submit"
                            class="btn btn-warning">
                        Update Company
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection