@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">

    <div class="col-md-5">

        <div class="card shadow border-0 rounded-4">

            <div class="card-body p-5">

                <h2 class="text-center fw-bold mb-4">
                    Login
                </h2>

                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Email Address
                        </label>

                        <input type="email"
                               name="email"
                               class="form-control form-control-lg"
                               placeholder="Enter email"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Password
                        </label>

                        <input type="password"
                               name="password"
                               class="form-control form-control-lg"
                               placeholder="Enter password"
                               required>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input"
                               type="checkbox"
                               name="remember"
                               id="remember">

                        <label class="form-check-label" for="remember">
                            Remember Me
                        </label>
                    </div>

                    <div class="d-grid">
                        <button type="submit"
                                class="btn btn-primary btn-lg">
                            Login
                        </button>
                    </div>

                    <div class="text-center mt-3">
                        <a href="{{ route('password.request') }}">
                            Forgot Password?
                        </a>
                    </div>

                </form>

                <hr>

                <div class="text-center">
                    Don't have an account?
                    <a href="{{ route('register') }}">
                        Register
                    </a>
                </div>

            </div>

        </div>

    </div>

</div>

</div>

@endsection
