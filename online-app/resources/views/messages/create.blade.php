@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow border-0">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Add New Message</h4>
        </div>

        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('messages.store') }}" method="POST">

                @csrf

                <!-- Name -->
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text"
                           name="name"
                           class="form-control"
                           value="{{ old('name') }}"
                           placeholder="Enter Full Name">
                </div>

                <!-- Phone -->
                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="text"
                           name="phone"
                           class="form-control"
                           value="{{ old('phone') }}"
                           placeholder="Enter Phone Number">
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           value="{{ old('email') }}"
                           placeholder="Enter Email">
                </div>

                <!-- Message -->
                <div class="mb-3">
                    <label class="form-label">Message</label>
                    <textarea name="message"
                              rows="5"
                              class="form-control"
                              placeholder="Write your message">{{ old('message') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    Save Message
                </button>

                <a href="{{ route('messages.index') }}" class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>

    </div>

</div>

@endsection