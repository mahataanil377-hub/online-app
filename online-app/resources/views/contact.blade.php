@extends('layouts.app')
@section('content')
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<section class="py-5 bg-light">
    <div class="container">

        <!-- Heading -->
        <div class="text-center mb-5">
            <h1 class="fw-bold">Contact Us</h1>
            <p class="text-muted">Have questions? Get in touch with our team.</p>
        </div>

        <div class="row g-4">

            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-5">

                        <h3 class="mb-4">Send a Message</h3>

                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text"
                                           class="form-control mb-3"
                                           placeholder="Full Name">
                                </div>

                                <div class="col-md-6">
                                    <input type="email"
                                           class="form-control mb-3"
                                           placeholder="Email Address">
                                </div>
                            </div>

                            <input type="text"
                                   class="form-control mb-3"
                                   placeholder="Subject">

                            <textarea class="form-control mb-3"
                                      rows="6"
                                      placeholder="Write your message"></textarea>

                            <button class="btn btn-success px-4">
                                Send Message
                            </button>
                        </form>

                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="col-lg-5">

                <div class="card border-0 shadow-lg mb-4">
                    <div class="card-body">

                        <h3 class="mb-4">Contact Information</h3>

                        <p>
                            <strong>📍 Address:</strong><br>
                            New Baneshwor, Kathmandu, Nepal
                        </p>

                        <p>
                            <strong>📞 Phone:</strong><br>
                            +977-9800000000
                        </p>

                        <p>
                            <strong>📧 Email:</strong><br>
                            support@onlinejob.com
                        </p>

                        <p>
                            <strong>🕒 Office Hours:</strong><br>
                            Sunday - Friday: 9:00 AM - 6:00 PM
                        </p>

                    </div>
                </div>

            </div>

        </div>

        <!-- Google Map -->
        <div class="row mt-5">
            <div class="col-12">

                <div class="card border-0 shadow-lg">
                    <div class="card-body p-0">

                        <iframe
                            src="https://maps.google.com/maps?q=Kathmandu%20Nepal&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            width="100%"
                            height="400"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy">
                        </iframe>

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
@endsection