@extends('layouts.sidebar')

@section('content')

<div class="container-fluid py-4">

    <div class="row g-4">

        <!-- Jobs -->
        <div class="col-md-3">
            <div class="card text-white bg-primary shadow border-0 rounded-4">
                <div class="card-body text-center">
                    <h6>Total Jobs</h6>
                    <h2>{{ $jobs }}</h2>
                    <i class="bi bi-briefcase fs-1"></i>
                </div>
            </div>
        </div>

        <!-- Users -->
        <div class="col-md-3">
            <div class="card text-white bg-success shadow border-0 rounded-4">
                <div class="card-body text-center">
                    <h6>Total Users</h6>
                    <h2>{{ $users }}</h2>
                    <i class="bi bi-people fs-1"></i>
                </div>
            </div>
        </div>

        <!-- Categories -->
        <div class="col-md-3">
            <div class="card text-white bg-info shadow border-0 rounded-4">
                <div class="card-body text-center">
                    <h6>Categories</h6>
                    <h2>{{ $categories }}</h2>
                    <i class="bi bi-tags fs-1"></i>
                </div>
            </div>
        </div>

        <!-- Applications -->
        <div class="col-md-3">
            <div class="card text-dark bg-warning shadow border-0 rounded-4">
                <div class="card-body text-center">
                    <h6>Applications</h6>
                    <h2>{{ $application }}</h2>
                    <i class="bi bi-file-earmark-text fs-1"></i>
                </div>
            </div>
        </div>

        <!-- Companies (NEW FIXED CARD) -->
        <div class="col-md-3">
            <div class="card text-white bg-danger shadow border-0 rounded-4">
                <div class="card-body text-center">
                    <h6>Total Companies</h6>
                    <h2>{{ $companies }}</h2>
                    <i class="bi bi-building fs-1"></i>
                </div>
            </div>
        </div>

    </div>
    

</div>

@endsection