@extends('layouts.app')

@section('content')

<div class="container mt-5">
    
    <div class="row justify-content-center">
        
        <div class="col-md-5">
            
            <div class="card shadow-lg border-0 rounded-4">

                <div class="card-body p-5">

                    <h2 class="text-center mb-4">
                        Login Form
                    </h2>

                    <form action="" method="POST">

                        @csrf

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">
                                Email Address
                            </label>

                            <input 
                                type="email" 
                                name="email"
                                class="form-control"
                                placeholder="Enter your email"
                                required
                            >
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label">
                                Password
                            </label>

                            <input 
                                type="password" 
                                name="password"
                                class="form-control"
                                placeholder="Enter your password"
                                required
                            >
                        </div>

                        <!-- Remember Me -->
                        <div class="form-check mb-3">
                            <input 
                                class="form-check-input" 
                                type="checkbox" 
                                id="remember"
                            >

                            <label class="form-check-label" for="remember">
                                Remember Me
                            </label>
                        </div>

                        <!-- Login Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>
                        </div>

                    </form>

                    <!-- Register Link -->
                    <div class="text-center mt-3">
                        <small>
                            Don't have an account?
                            <a href="/register">Register</a>
                        </small>    
                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

@endsection