@extends('layouts.app')
@section('content')
 <div>
   <style>
.hero {
    background: linear-gradient(to right, #0d6efd, #0a58ca);
    color: white;
    padding: 80px 0;
}

.hero img {
    max-width: 100%;
    border-radius: 15px;
}

/* JOB CARD */
.job-card {
    transition: 0.3s;
}

.job-card:hover {
    transform: translateY(-5px);
    box-shadow: 0px 5px 15px rgba(0,0,0,0.2);
}

/* CATEGORY */
.category {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    transition: 0.3s;
}

.category:hover {
    background: #0d6efd;
    color: white;
}

/* COMPANY LOGO */
.company img {
    width: 100px;
    filter: grayscale(100%);
    transition: 0.3s;
}

.company img:hover {
    filter: grayscale(0%);
    transform: scale(1.1);
}

</style>

<section class="hero">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-6">
                <h1 class="fw-bold">Find Your Dream Job</h1>
                <p>Apply to thousands of jobs in Nepal & Worldwide</p>

                <!-- SEARCH -->
                <div class="input-group mt-3">
                    <input type="text" class="form-control" placeholder="Search jobs...">
                    <button class="btn btn-warning">Search</button>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d"
                     alt="Job Image">
            </div>

        </div>
    </div>
</section>

<!-- ================= CATEGORIES ================= -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Job Categories</h2>

        <div class="row g-3">

            <div class="col-md-3">
                <div class="category">IT Jobs</div>
            </div>

            <div class="col-md-3">
                <div class="category">Marketing</div>
            </div>

            <div class="col-md-3">
                <div class="category">Design</div>
            </div>

            <div class="col-md-3">
                <div class="category">Finance</div>
            </div>

        </div>
    </div>
</section>

<!-- ================= FEATURED JOBS ================= -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Featured Jobs</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card job-card p-3">
                    <h5>Frontend Developer</h5>
                    <p>Company: Google</p>
                    <p>Location: Remote</p>
                    <a href="#" class="btn btn-primary btn-sm">Apply Now</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card job-card p-3">
                    <h5>Backend Developer</h5>
                    <p>Company: Microsoft</p>
                    <p>Location: USA</p>
                    <a href="#" class="btn btn-primary btn-sm">Apply Now</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card job-card p-3">
                    <h5>UI/UX Designer</h5>
                    <p>Company: Adobe</p>
                    <p>Location: Remote</p>
                    <a href="#" class="btn btn-primary btn-sm">Apply Now</a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ================= COMPANIES ================= -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="mb-4">Top Companies</h2>

        <div class="row company align-items-center">

            <div class="col-md-3">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg">
            </div>

            <div class="col-md-3">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg">
            </div>

            <div class="col-md-3">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg">
            </div>

            <div class="col-md-3">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/31/Adobe_Corporate_Logo.png">
            </div>

        </div>
    </div>
</section>
</div>
@endsection