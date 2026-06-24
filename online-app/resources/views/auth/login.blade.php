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

                    <form action="{{ route('login') }}" method="POST">

                        @csrf

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   placeholder="Enter your email"
                                   required>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   placeholder="Enter your password"
                                   required>
                        </div>

                        <!-- Remember Me -->
                        <div class="form-check mb-3">
                            <input class="form-check-input"
                                   type="checkbox"
                                   name="remember"
                                   id="remember">

                            <label class="form-check-label" for="remember">
                                Remember Me
                            </label>
                        </div>

                        <!-- Login Button + Forgot Password -->
                        <div class="d-flex justify-content-between align-items-center">

                            <button type="submit" class="btn btn-primary px-4">
                                Login
                            </button>

                            <a href="{{ route('password.request') }}"
                               class="text-decoration-none">
                                Forgot Password?
                            </a>

                        </div>

                    </form>

                    <!-- Register Link -->
                    <div class="text-center mt-4">
                        <small>
                            Don't have an account?
                            <a href="{{ route('register') }}">
                                Register
                            </a>
                        </small>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection