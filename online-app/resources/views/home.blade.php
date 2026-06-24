@extends('layouts.app')
@section('content')
<style>
/* HERO SECTION */
.hero{
    background: linear-gradient(
        rgba(0,0,0,0.55),
        rgba(0,0,0,0.55)
    ),
    url('/images/job-bg.jpg');

    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

    min-height: 550px;
    display: flex;
    align-items: center;
    justify-content: center;

    text-align: center;
    color: white;
}

/* JOB & CATEGORY CARDS */
.job-card,
.cat-card{
    border: none;
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.3s ease;
}

.job-card:hover,
.cat-card:hover{
    transform: translateY(-6px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.12);
}

/* SECTION TITLE */
.section-title{
    font-weight: 700;
    margin-bottom: 25px;
}

/* STATS BOX */
.stats-box{
    background: #f8f9fa;
    border-radius: 12px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

/* JOB IMAGE */
.job-img{
    width: 100%;
    height: 180px;
    object-fit: cover;
}
</style>

<section class="hero">
    <div class="container text-center">

        <h1 class="display-3 fw-bold">
            Find Your Dream Job Today
        </h1>

        <p class="lead mb-4">
            Search, Apply & Get Hired from Top Companies
        </p>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="input-group shadow-lg">
                    <input type="text"
                           class="form-control"
                           placeholder="Search jobs, companies, keywords...">

                    <button class="btn btn-success px-4">
                        Search
                    </button>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- STATS -->
<section class="container py-5">
    <div class="row g-3 text-center">

        <div class="col-md-3">
            <div class="stats-box">
                <h3>1200+</h3>
                <p>Jobs Posted</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stats-box">
                <h3>800+</h3>
                <p>Companies</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stats-box">
                <h3>5000+</h3>
                <p>Active Users</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stats-box">
                <h3>95%</h3>
                <p>Success Rate</p>
            </div>
        </div>

    </div>
</section>

<!-- CATEGORIES -->
<section class="container py-4">
    <h2 class="text-center section-title">Popular Categories</h2>

    <div class="row g-4 text-center">

        <div class="col-md-3">
            <div class="cat-card p-4 border">
                <i class="bi bi-code-slash fs-1 text-primary"></i>
                <h5 class="mt-2">Development</h5>
            </div>
        </div>

        <div class="col-md-3">
            <div class="cat-card p-4 border">
                <i class="bi bi-palette fs-1 text-danger"></i>
                <h5 class="mt-2">Design</h5>
            </div>
        </div>

        <div class="col-md-3">
            <div class="cat-card p-4 border">
                <i class="bi bi-bar-chart fs-1 text-success"></i>
                <h5 class="mt-2">Marketing</h5>
            </div>
        </div>

        <div class="col-md-3">
            <div class="cat-card p-4 border">
                <i class="bi bi-briefcase fs-1 text-warning"></i>
                <h5 class="mt-2">Business</h5>
            </div>
        </div>

    </div>
</section>

<!-- JOBS SECTION -->
<section class="container py-5">

    <div class="row">

        <!-- POPULAR JOBS -->
        <div class="col-md-6">
            <h3 class="section-title">⭐ Popular Jobs</h3>

            <div class="card job-card mb-3">
                <img class="job-img" src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d">
                <div class="p-3">
                    <h5>Full Stack Developer</h5>
                    <p class="text-muted">Google • Remote</p>
                    <span class="badge bg-success">Full Time</span>
                </div>
            </div>

            <div class="card job-card mb-3">
                <img class="job-img" src="https://images.unsplash.com/photo-1551434678-e076c223a692">
                <div class="p-3">
                    <h5>UI/UX Designer</h5>
                    <p class="text-muted">Microsoft • Nepal</p>
                    <span class="badge bg-warning text-dark">Part Time</span>
                </div>
            </div>

            <div class="card job-card">
                <img class="job-img" src="https://images.unsplash.com/photo-1522071820081-009f0129c71c">
                <div class="p-3">
                    <h5>Laravel Developer</h5>
                    <p class="text-muted">Startup • Remote</p>
                    <span class="badge bg-primary">Remote</span>
                </div>
            </div>

        </div>

        <!-- TRENDING JOBS -->
        <div class="col-md-6">
            <h3 class="section-title">🔥 Trending Jobs</h3>

            <div class="card job-card mb-3">
                <img class="job-img" src="https://images.unsplash.com/photo-1551288049-bebda4e38f71">
                <div class="p-3">
                    <h5>Frontend Developer</h5>
                    <p class="text-muted">High Demand in Nepal</p>
                    <span class="badge bg-danger">Hot</span>
                </div>
            </div>

            <div class="card job-card mb-3">
                <img class="job-img" src="https://images.unsplash.com/photo-1553877522-43269d4ea984">
                <div class="p-3">
                    <h5>Data Analyst</h5>
                    <p class="text-muted">Trending worldwide</p>
                    <span class="badge bg-info text-dark">Trending</span>
                </div>
            </div>

            <div class="card job-card">
                <img class="job-img" src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f">
                <div class="p-3">
                    <h5>Digital Marketing</h5>
                    <p class="text-muted">Most applied job</p>
                    <span class="badge bg-secondary">Popular</span>
                </div>
            </div>

        </div>

    </div>

</section>


@endsection