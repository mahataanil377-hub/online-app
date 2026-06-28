@extends('layouts.app')

@section('content')


<style>
/* HERO */
.hero-section {
    background: linear-gradient(135deg, #0b1220, #00008b);
    color: white;
    padding: 80px 0;
}

/* CARD HOVER */
.job-card, .category-card, .company-card {
    transition: .3s ease;
}

.job-card:hover,
.category-card:hover,
.company-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
}

/* SECTION SPACING */
section {
    padding: 60px 0;
}
.job-card{
    transition:.35s;
    overflow:hidden;
}

.job-card:hover{
    transform:translateY(-10px);
    box-shadow:0 20px 40px rgba(0,0,0,.15)!important;
}

.job-card h4{
    color:#14532d;
}

.btn-success{
    background:#166534;
    border:none;
}

.btn-success:hover{
    background:#14532d;
}

.badge{
    font-size:13px;
    letter-spacing:.5px;
} 
.category-card{
    transition:.35s;
    cursor:pointer;
}

.category-card:hover{
    transform:translateY(-10px);
    box-shadow:0 18px 35px rgba(0,0,0,.15)!important;
}

.category-icon{
    width:80px;
    height:80px;
    margin:auto;
    background:#e8f5e9;
    border-radius:50%;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:35px;
}

.category-card h5{
    color:#14532d;
} 
.company-card{
    transition:.35s;
    cursor:pointer;
}

.company-card:hover{
    transform:translateY(-10px);
    box-shadow:0 18px 40px rgba(0,0,0,.15)!important;
}

.company-logo{
    width:90px;
    height:90px;
    object-fit:cover;
    border-radius:50%;
    border:4px solid #198754;
    padding:4px;
    background:#fff;
}

.company-card h5{
    color:#14532d;
}

.company-card .btn{
    transition:.3s;
}

.company-card .btn:hover{
    transform:scale(1.05);
} 
</style>

<div class="container-fluid p-0">

<!-- ================= HERO ================= -->
<div class="hero-section">

    <div class="container">
        <div class="row align-items-center">

            <!-- LEFT -->
            <div class="col-lg-6">

                <span class="badge bg-warning text-dark mb-3 px-3 py-2">
                    🔥 Best Job Platform
                </span>

                <h1 class="fw-bold display-4">
                    Find Your <span class="text-warning">Dream Job</span>
                </h1>

                <p class="text-light mt-3">
                    Discover thousands of job opportunities from top companies and build your career.
                </p>

                <!-- SEARCH -->
                <div class="input-group mt-4">
                    <input type="text" class="form-control p-3"
                        placeholder="Search jobs, companies, skills...">

                    <button class="btn btn-warning fw-bold px-4">
                        Search
                    </button>
                </div>

            </div>

            <!-- RIGHT -->
            <div class="col-lg-6 text-center mt-4 mt-lg-0">
                <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d"
                     class="img-fluid rounded-4 shadow"
                     style="max-height:450px; object-fit:cover;">
            </div>

        </div>
    </div>

</div>

<!-- ================= LATEST JOBS ================= -->
 <div>
<section class="py-5 bg-light">

<div class="container">
         
    <div class="d-flex justify-content-between align-items-center mb-5">
        <a href="#" class="btn btn-success rounded-pill px-4">
            View All
        </a>

    </div>
          <div class="text-center mb-5">
        <h2 class="fw-bold text-success">Latest Jobs</h2>
        <p class="text-muted">
            Discover the newest opportunities from top companies.
        </p>
    </div>

    <div class="row g-4">

        @forelse($jobs as $job)

        <div class="col-lg-4 col-md-6">

            <div class="card border-0 shadow h-100 rounded-4 job-card">

                <div class="card-body p-4">

                    <div class="d-flex justify-content-between">

                        <span class="badge bg-success px-3 py-2 rounded-pill">
                            {{ $job->job_type }}
                        </span>

                        <span class="badge bg-warning text-dark px-3 py-2 rounded-pill">
                            Active
                        </span>

                    </div>

                    <h4 class="fw-bold mt-4">
                        {{ $job->title }}
                    </h4>

                    <p class="text-muted mb-2">
                        🏢 {{ $job->company->name ?? 'Company Name' }}
                    </p>

                    <p class="text-muted mb-3">
                        📍 {{ $job->location }}
                    </p>

                    @if(isset($job->salary))
                    <h5 class="text-success fw-bold">
                        Rs. {{ number_format($job->salary) }}
                    </h5>
                    @endif

                    <hr>

                    <a href="{{ route('job.details',$job->id) }}"
                       class="btn btn-success w-100 rounded-pill">

                        View Details →

                    </a>

                </div>

            </div>

        </div>

        @empty

        <div class="col-12 text-center">
            <h5 class="text-muted">
                No jobs available
            </h5>
        </div>

        @endforelse

    </div>

</div>

</section>
<!-- ================= JOB CATEGORIES ================= -->
<section class="py-5">

<div class="container">

    <div class="text-center mb-5">
        <h2 class="fw-bold text-success">Job Categories</h2>
        <p class="text-muted">
            Explore jobs by category
        </p>
    </div>

    <div class="row g-4">

        @forelse($categories as $category)

        <div class="col-lg-3 col-md-6">

            <div class="card category-card border-0 shadow-sm rounded-4 h-100">

                <div class="card-body text-center py-5">

                    <div class="category-icon mb-3">
                        💼
                    </div>

                    <h5 class="fw-bold">
                        {{ $category->name }}
                    </h5>

                    <span class="badge bg-success rounded-pill px-3 py-2 mt-2">
                        {{ $category->jobs_count ?? 0 }} Jobs
                    </span>

                </div>

            </div>

        </div>

        @empty

        <div class="col-12 text-center">
            <h5 class="text-muted">No Categories Found</h5>
        </div>

        @endforelse

    </div>

</div>

</section>
<!-- ================= TOP COMPANIES ================= -->
<section class="py-5 bg-light">

<div class="container">

    <div class="text-center mb-5">
        <h2 class="fw-bold text-success">Top Companies</h2>
        <p class="text-muted">
            Trusted companies hiring talented people
        </p>
    </div>

    <div class="row g-4">

        @forelse($companies as $company)

        <div class="col-lg-3 col-md-6">

            <div class="card company-card border-0 shadow-sm rounded-4 h-100">

                <div class="card-body text-center p-4">

                    @if($company->logo)

                        <img src="{{ asset('storage/'.$company->logo) }}"
                             class="company-logo mb-3"
                             alt="{{ $company->name }}">

                    @else

                        <img src="https://via.placeholder.com/90"
                             class="company-logo mb-3"
                             alt="Company">

                    @endif

                    <h5 class="fw-bold">
                        {{ $company->name }}
                    </h5>

                    <p class="text-muted mb-2">
                        📍 {{ $company->city }}
                    </p>

                    <span class="badge bg-success rounded-pill px-3 py-2">
                        {{ $company->industry }}
                    </span>

                    <div class="mt-4">

                        <a href="#"
                           class="btn btn-success rounded-pill px-4">
                            View Company
                        </a>

                    </div>

                </div>

            </div>

        </div>

        @empty

        <div class="col-12 text-center">

            <h5 class="text-muted">
                No Companies Found
            </h5>

        </div>

        @endforelse

    </div>

</div>

</section>
</div>
@endsection