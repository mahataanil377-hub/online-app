@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="bg-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <h1 class="display-4 fw-bold">About JobPortal</h1>
                <p class="lead">
                    We connect talented professionals with top employers
                    and help companies find the best candidates.
                </p>

                <a href="#" class="btn btn-light btn-lg mt-3">
                    Explore Jobs
                </a>
            </div>

            <div class="col-lg-6 text-center">
                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=800"
                     class="img-fluid rounded shadow-lg"
                     alt="Job Portal">
            </div>

        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-5">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=800"
                     class="img-fluid rounded shadow"
                     alt="Our Team">
            </div>

            <div class="col-lg-6">
                <h2 class="fw-bold mb-3">Who We Are</h2>

                <p class="text-muted">
                    JobPortal is a leading online recruitment platform
                    that helps job seekers find their dream jobs and
                    employers hire qualified candidates quickly.
                </p>

                <p class="text-muted">
                    Our mission is to simplify hiring and make career
                    opportunities accessible to everyone.
                </p>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">✔ Easy Job Search</li>
                    <li class="list-group-item">✔ Verified Companies</li>
                    <li class="list-group-item">✔ Secure Applications</li>
                    <li class="list-group-item">✔ Career Growth Support</li>
                </ul>
            </div>

        </div>

    </div>
</section>

<!-- Statistics -->
<section class="bg-light py-5">
    <div class="container">

        <div class="row text-center">

            <div class="col-md-3 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h1 class="text-primary">500+</h1>
                        <h5>Companies</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h1 class="text-success">10K+</h1>
                        <h5>Jobs Posted</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h1 class="text-danger">25K+</h1>
                        <h5>Applicants</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h1 class="text-warning">98%</h1>
                        <h5>Success Rate</h5>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Team Section -->
<section class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Meet Our Team</h2>
            <p class="text-muted">
                Dedicated professionals working to build your future.
            </p>
        </div>

        <div class="row">

            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow text-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg"
                         class="card-img-top"
                         alt="">
                    <div class="card-body">
                        <h5>John Smith</h5>
                        <p class="text-muted">CEO & Founder</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow text-center">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg"
                         class="card-img-top"
                         alt="">
                    <div class="card-body">
                        <h5>Sarah Johnson</h5>
                        <p class="text-muted">HR Manager</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow text-center">
                    <img src="https://randomuser.me/api/portraits/men/67.jpg"
                         class="card-img-top"
                         alt="">
                    <div class="card-body">
                        <h5>Michael Brown</h5>
                        <p class="text-muted">Recruitment Lead</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>



@endsection