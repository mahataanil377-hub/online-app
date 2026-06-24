@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card shadow-lg border-0 rounded-4">

                <div class="card-body p-5">

                    <h2 class="text-center mb-4">
                        Registration Form
                    </h2>

                    <form action="{{ route('register') }}" method="POST">

                        @csrf

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input 
                                type="text" 
                                name="name"
                                class="form-control"
                                placeholder="Enter your name"
                                required
                            >
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input 
                                type="email" 
                                name="email"
                                class="form-control"
                                placeholder="Enter your email"
                                required
                            >
                        </div>
                        <!-- Phone Number -->
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input
                                type="text" 
                                name="phone"    
                                class="form-control"
                                placeholder="Enter your phone number"
                                required
                            >
                        </div>
                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input 
                                type="password" 
                                name="password"
                                class="form-control"
                                placeholder="Enter password"
                                required
                            >
                        </div>  
                        <!-- Confirm Password -->
                             <div class="mb-3">
                                 <label class="form-label">Confirm Password</label>
                                 <input 
                                type="password" 
                                name="password_confirmation"
                                class="form-control"
                                placeholder="Confirm password"
                                required>
                        </div>

                        <!-- Register Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">
                                Register
                            </button>
                        </div>

                    </form>

                    <!-- Login Link -->
                    <div class="text-center mt-3">
                        <small>
                            Already have an account?
                            <a href="/login">Login</a>
                        </small>    
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection