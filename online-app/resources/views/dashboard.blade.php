@extends('layouts.sidebar')

@section('content')

<div class="container-fluid py-4">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold">Dashboard</h2>
            <p class="text-muted mb-0">Welcome to Mahata Job Portal</p>
        </div>
    </div>

    <div class="row g-4">

        <!-- Total Jobs -->
        <div class="col-lg-4 col-md-6">
            <div class="card shadow border-0 rounded-4 h-100 dashboard-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">

                        <div class="icon-box me-3">
                            <i class="bi bi-briefcase fs-2"></i>
                        </div>

                        <div>
                            <small class="text-muted">Total Jobs</small>
                            <h2 class="fw-bold mb-0">{{ $jobs }}</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Total Users -->
        <div class="col-lg-4 col-md-6">
            <div class="card shadow border-0 rounded-4 h-100 dashboard-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">

                        <div class="icon-box me-3">
                            <i class="bi bi-people fs-2"></i>
                        </div>

                        <div>
                            <small class="text-muted">Total Users</small>
                            <h2 class="fw-bold mb-0">{{ $users }}</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Categories -->
        <div class="col-lg-4 col-md-6">
            <div class="card shadow border-0 rounded-4 h-100 dashboard-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">

                        <div class="icon-box me-3">
                            <i class="bi bi-tags fs-2"></i>
                        </div>

                        <div>
                            <small class="text-muted">Categories</small>
                            <h2 class="fw-bold mb-0">{{ $categories }}</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Applications -->
        <div class="col-lg-4 col-md-6">
            <div class="card shadow border-0 rounded-4 h-100 dashboard-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">

                        <div class="icon-box me-3">
                            <i class="bi bi-file-earmark-text fs-2"></i>
                        </div>

                        <div>
                            <small class="text-muted">Applications</small>
                            <h2 class="fw-bold mb-0">{{ $application }}</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Companies -->
        <div class="col-lg-4 col-md-6">
            <div class="card shadow border-0 rounded-4 h-100 dashboard-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">

                        <div class="icon-box me-3">
                            <i class="bi bi-building fs-2"></i>
                        </div>

                        <div>
                            <small class="text-muted">Companies</small>
                            <h2 class="fw-bold mb-0">{{ $companies }}</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Admin -->
        <div class="col-lg-4 col-md-6">
            <div class="card shadow border-0 rounded-4 h-100 dashboard-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">

                        <div class="icon-box me-3">
                            <i class="bi bi-person-badge fs-2"></i>
                        </div>

                        <div>
                            <small class="text-muted">Administrator</small>
                            <h2 class="fw-bold mb-0">1</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<style>
.dashboard-card{
    transition: all .3s ease;
    cursor: pointer;
}

.dashboard-card:hover{
    transform: translateY(-6px);
    box-shadow: 0 1rem 2rem rgba(0,0,0,.15)!important;
}

.icon-box{
    width:70px;
    height:70px;
    display:flex;
    justify-content:center;
    align-items:center;
    background:#f8f9fa;
    border-radius:50%;
    border:1px solid #dee2e6;
}
</style>

@endsection