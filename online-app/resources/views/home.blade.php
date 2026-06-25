@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

/* HERO SECTION */
.hero{
    min-height:700px;
    background:
    linear-gradient(
        rgba(15,23,42,.75),
        rgba(15,23,42,.75)
    ),
    url('/images/job-bg.jpg');

    background-size:cover;
    background-position:center;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
    color:#fff;
}

.search-box{
    background:rgba(255,255,255,.15);
    backdrop-filter:blur(10px);
    padding:15px;
    border-radius:20px;
}

/* SECTION TITLE */
.section-title{
    font-size:2rem;
    font-weight:700;
    margin-bottom:40px;
}

/* STATS */
.stats-box{
    background:#fff;
    padding:30px;
    border-radius:20px;
    text-align:center;
    transition:.3s;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.stats-box:hover{
    transform:translateY(-8px);
}

.stats-box h3{
    color:#198754;
    font-weight:700;
}

/* CATEGORY */
.cat-card{
    background:#fff;
    padding:35px;
    border-radius:20px;
    text-align:center;
    transition:.3s;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.cat-card:hover{
    transform:translateY(-10px);
}

.cat-card i{
    font-size:50px;
}

/* JOB CARD */
.job-card{
    border:none;
    border-radius:20px;
    overflow:hidden;
    transition:.3s;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.job-card:hover{
    transform:translateY(-10px);
}

.job-img{
    width:100%;
    height:220px;
    object-fit:cover;
}

.job-card .card-body{
    padding:20px;
}

/* CTA */
.cta-section{
    background:linear-gradient(135deg,#198754,#20c997);
    border-radius:25px;
    padding:60px 30px;
    color:#fff;
    text-align:center;
}

</style>

<!-- HERO -->

<!-- HERO SECTION -->
<section
    class="vh-100 d-flex align-items-center text-white"
    style="
        background:
        linear-gradient(rgba(0,0,0,.65), rgba(0,0,0,.65)),
        url('{{ asset('images/job-bg.jpg') }}');
        background-size: cover;
        background-position: center;
    "
>

<div class="container">

    <div class="row justify-content-center">

        <div class="col-lg-8 text-center">

            <span class="badge bg-success px-4 py-2 fs-6 mb-3">
                🚀 #1 Online Job Portal
            </span>

            <h1 class="display-1 fw-bold mb-3">
                Find Your
                <span class="text-warning">
                    Dream Job
                </span>
                Today
            </h1>

            <p class="lead mb-5">
                Discover thousands of opportunities from top companies.
                Search jobs, apply instantly and grow your career.
            </p>

            <!-- Search Box -->
            <div class="card border-0 shadow-lg p-3 bg-white">

                <div class="row g-2">

                    <div class="col-md-5">
                        <input type="text"
                               class="form-control form-control-lg"
                               placeholder="Job title or keyword">
                    </div>

                    <div class="col-md-4">
                        <input type="text"
                               class="form-control form-control-lg"
                               placeholder="Location">
                    </div>

                    <div class="col-md-3">
                        <button class="btn btn-success btn-lg w-100">
                            <i class="bi bi-search"></i>
                            Search
                        </button>
                    </div>

                </div>

            </div>

            <!-- Buttons -->
            <div class="mt-4">

                <a href="#"
                   class="btn btn-warning btn-lg px-4 me-2">
                    Browse Jobs
                </a>

                <a href="#"
                   class="btn btn-outline-light btn-lg px-4">
                    Post a Job
                </a>

            </div>
        </div>

    </div>

</div>

</section>



<!-- STATS -->

<section class="container py-5">

<div class="row g-4">

    <div class="col-md-3">
        <div class="stats-box">
            <h3>1200+</h3>
            <p class="mb-0">Jobs Posted</p>
        </div>
    </div>

    <div class="col-md-3">
        <div class="stats-box">
            <h3>800+</h3>
            <p class="mb-0">Companies</p>
        </div>
    </div>

    <div class="col-md-3">
        <div class="stats-box">
            <h3>5000+</h3>
            <p class="mb-0">Active Users</p>
        </div>
    </div>

    <div class="col-md-3">
        <div class="stats-box">
            <h3>95%</h3>
            <p class="mb-0">Success Rate</p>
        </div>
    </div>

</div>

</section>

<!-- CATEGORIES -->

<section class="container py-5">
<h2 class="text-center section-title">
    Popular Categories
</h2>

<div class="row g-4">

    <div class="col-md-3">
        <div class="cat-card">
            <i class="bi bi-code-slash text-primary"></i>
            <h5 class="mt-3">Development</h5>
        </div>
    </div>

    <div class="col-md-3">
        <div class="cat-card">
            <i class="bi bi-palette text-danger"></i>
            <h5 class="mt-3">Design</h5>
        </div>
    </div>

    <div class="col-md-3">
        <div class="cat-card">
            <i class="bi bi-bar-chart text-success"></i>
            <h5 class="mt-3">Marketing</h5>
        </div>
    </div>

    <div class="col-md-3">
        <div class="cat-card">
            <i class="bi bi-briefcase text-warning"></i>
            <h5 class="mt-3">Business</h5>
        </div>
    </div>

</div>

</section>

<!-- FEATURED JOBS -->

<section class="container py-5">

<h2 class="text-center section-title">
    Featured Jobs
</h2>

<div class="row g-4">

    <div class="col-md-4">

        <div class="card job-card">

            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d"
                 class="job-img">

            <div class="card-body">

                <h5>Full Stack Developer</h5>

                <p class="text-muted">
                    Google • Remote
                </p>

                <span class="badge bg-success">
                    Full Time
                </span>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card job-card">

            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692"
                 class="job-img">

            <div class="card-body">

                <h5>UI/UX Designer</h5>

                <p class="text-muted">
                    Microsoft • Nepal
                </p>

                <span class="badge bg-warning text-dark">
                    Part Time
                </span>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card job-card">

            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c"
                 class="job-img">

            <div class="card-body">

                <h5>Laravel Developer</h5>

                <p class="text-muted">
                    Startup • Remote
                </p>

                <span class="badge bg-primary">
                    Remote
                </span>

            </div>

        </div>

    </div>

</div>


</section>

<!-- TRENDING JOBS -->

<section class="container py-5">
<h2 class="text-center section-title">
    Trending Jobs
</h2>

<div class="row g-4">

    <div class="col-md-4">

        <div class="card job-card">

            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71"
                 class="job-img">

            <div class="card-body">

                <h5>Frontend Developer</h5>

                <p class="text-muted">
                    High Demand in Nepal
                </p>

                <span class="badge bg-danger">
                    Hot
                </span>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card job-card">

            <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984"
                 class="job-img">

            <div class="card-body">

                <h5>Data Analyst</h5>

                <p class="text-muted">
                    Trending Worldwide
                </p>

                <span class="badge bg-info text-dark">
                    Trending
                </span>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card job-card">

            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f"
                 class="job-img">

            <div class="card-body">

                <h5>Digital Marketing</h5>

                <p class="text-muted">
                    Most Applied Job
                </p>

                <span class="badge bg-secondary">
                    Popular
                </span>

            </div>

        </div>

    </div>

</div>

</section>

<!-- CTA -->

<section class="container py-5">
<div class="cta-section">

    <h2 class="fw-bold">
        Ready To Find Your Dream Job?
    </h2>

    <p class="lead mb-4">
        Join thousands of job seekers and connect with top companies today.
    </p>

    <a href="#" class="btn btn-light btn-lg px-5">
        Browse Jobs
    </a>

</div>

</section>

@endsection
