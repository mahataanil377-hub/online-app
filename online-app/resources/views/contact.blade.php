@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
.hero-section{
    background-image: url(https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80);
}

.contact-card{
    transition: .3s;
}

.contact-card:hover{
    transform: translateY(-5px);
}

.info-icon{
    width: 45px;
    height: 45px;
    background: #198754;
    color: #fff;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-right: 10px;
}
</style>

<!-- Hero Section -->

<section class="hero-section text-white py-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">Contact Us</h1>
        <p class="lead mb-0">
            We'd love to hear from you. Send us a message anytime.
        </p>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
    <div class="row g-4">

        <!-- Contact Form -->
        <div class="col-lg-7">

            <div class="card border-0 shadow-lg contact-card">
                <div class="card-body p-5">

                    <h3 class="fw-bold mb-4">
                        <i class="bi bi-chat-dots-fill text-success"></i>
                        Send a Message
                    </h3>

                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <div class="col-md-6">
                                <input type="text"
                                       name="name"
                                       class="form-control rounded-3 mb-3"
                                       placeholder="Full Name"
                                       required>
                            </div>

                            <div class="col-md-6">
                                <input type="email"
                                       name="email"
                                       class="form-control rounded-3 mb-3"
                                       placeholder="Email Address"
                                       required>
                            </div>

                        </div>

                        <input type="text"
                               name="subject"
                               class="form-control rounded-3 mb-3"
                               placeholder="Subject"
                               required>

                        <textarea name="message"
                                  rows="6"
                                  class="form-control rounded-3 mb-3"
                                  placeholder="Write your message..."
                                  required></textarea>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">
                                Upload Image
                            </label>

                            <input type="file"
                                   name="image"
                                   class="form-control rounded-3"
                                   accept="image/*">
                        </div>

                        <button type="submit"
                                class="btn btn-success btn-lg w-100 rounded-pill">
                            <i class="bi bi-send-fill"></i>
                            Send Message
                        </button>

                    </form>

                </div>
            </div>

        </div>

        <!-- Contact Information -->
        <div class="col-lg-5">

            <div class="card border-0 shadow-lg contact-card">

                <img src="{{ asset('images/contact.jpg') }}"
                     class="card-img-top"
                     alt="Contact Image"
                     style="height:300px; object-fit:cover;">

                <div class="card-body p-4">

                    <h3 class="fw-bold mb-4">
                        Contact Information
                    </h3>

                    <div class="mb-4">
                        <span class="info-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </span>

                        <strong>Address</strong>
                        <br>
                        New Baneshwor, Kathmandu, Nepal
                    </div>

                    <div class="mb-4">
                        <span class="info-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </span>

                        <strong>Phone</strong>
                        <br>
                        +977-9800000000
                    </div>

                    <div class="mb-4">
                        <span class="info-icon">
                            <i class="bi bi-envelope-fill"></i>
                        </span>

                        <strong>Email</strong>
                        <br>
                        support@onlinejob.com
                    </div>

                    <div>
                        <span class="info-icon">
                            <i class="bi bi-clock-fill"></i>
                        </span>

                        <strong>Office Hours</strong>
                        <br>
                        Sunday - Friday
                        <br>
                        9:00 AM - 6:00 PM
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Statistics -->
    <div class="row text-center my-5">

        <div class="col-md-4">
            <div class="card border-0 shadow-sm py-4">
                <h2 class="fw-bold text-success">500+</h2>
                <p class="mb-0">Jobs Posted</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm py-4">
                <h2 class="fw-bold text-success">200+</h2>
                <p class="mb-0">Companies</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm py-4">
                <h2 class="fw-bold text-success">1000+</h2>
                <p class="mb-0">Applicants</p>
            </div>
        </div>

    </div>

    <!-- Google Map -->
    <div class="card border-0 shadow-lg">
        <div class="card-body p-0">

            <iframe
                src="https://maps.google.com/maps?q=Kathmandu%20Nepal&t=&z=13&ie=UTF8&iwloc=&output=embed"
                width="100%"
                height="450"
                style="border:0;border-radius:15px;"
                allowfullscreen
                loading="lazy">
            </iframe>

        </div>
    </div>

</div>
```

</section>

@endsection
