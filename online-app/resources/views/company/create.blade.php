@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow-sm">
        <div class="card-header bg-success text-white">
            <h4>Add New Company</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('company.store') }}"
                  method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Company Name</label>
                    <input type="text"
                           name="company_name"
                           class="form-control"
                           placeholder="Enter company name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           placeholder="Enter company email">
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text"
                           name="phone"
                           class="form-control"
                           placeholder="Enter phone number">
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea name="address"
                              class="form-control"
                              rows="3"
                              placeholder="Enter company address"></textarea>
                </div>

                <div class="text-end">
                    <a href="#"
                       class="btn btn-secondary">
                        Cancel
                    </a>

                    <button type="submit"
                            class="btn btn-success">
                        Save Company
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection