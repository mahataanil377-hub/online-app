@extends('layouts.app')

@section('content')

<style>
body{
    background:#f5f5f5;
}

/* Card */
.contact-card{
    border:none;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 15px 35px rgba(0,0,0,.1);
}

/* Left Side */
.left-side{
    background:linear-gradient(135deg,#166534,#14532d);
    color:white;
    padding:50px 40px;
    height:100%;
}

.left-side i{
    font-size:22px;
    width:40px;
}

.left-side h2{
    font-weight:700;
    margin-bottom:20px;
}

/* Form */
.form-control{
    border-radius:12px;
    padding:12px;
}

.form-control:focus{
    border-color:#166534;
    box-shadow:0 0 0 .2rem rgba(22,101,52,.25);
}

textarea.form-control{
    resize:none;
}

/* Button */
.btn-send{
    background:#166534;
    color:#fff;
    border:none;
    border-radius:12px;
    padding:12px 35px;
    transition:.3s;
}

.btn-send:hover{
    background:#14532d;
    color:#fff;
    transform:translateY(-2px);
}

/* Title */
.contact-title{
    font-weight:700;
    color:#166534;
}
</style>

<div class="container py-5">

    <div class="card contact-card">

        <div class="row g-0">

            <!-- LEFT -->
            <div class="col-lg-5">

                <div class="left-side">

                    <h2>Contact Us</h2>

                    <p class="mb-5">
                        We'd love to hear from you. Send us your questions,
                        suggestions or feedback anytime.
                    </p>

                    <div class="mb-4 d-flex">
                        <i class="bi bi-geo-alt-fill"></i>
                        <div>
                            <strong>Address</strong><br>
                            Dhangadhi, Nepal
                        </div>
                    </div>

                    <div class="mb-4 d-flex">
                        <i class="bi bi-telephone-fill"></i>
                        <div>
                            <strong>Phone</strong><br>
                            +977-9744295353
                        </div>
                    </div>

                    <div class="mb-4 d-flex">
                        <i class="bi bi-envelope-fill"></i>
                        <div>
                            <strong>Email</strong><br>
                            mahataanil377@gmail.com
                        </div>
                    </div>

                    <div class="mt-5">

                        <a href="#" class="text-white me-3 fs-4">
                            <i class="bi bi-facebook"></i>
                        </a>

                        <a href="#" class="text-white me-3 fs-4">
                            <i class="bi bi-instagram"></i>
                        </a>

                        <a href="#" class="text-white me-3 fs-4">
                            <i class="bi bi-linkedin"></i>
                        </a>

                    </div>

                </div>

            </div>

            <!-- RIGHT -->
            <div class="col-lg-7">

                <div class="p-5">

                    <h2 class="contact-title mb-4">
                        Send us a Message
                    </h2>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST">

                        @csrf

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label class="fw-bold">Full Name</label>
                                <input type="text"
                                       name="name"
                                       class="form-control"
                                       value="{{ old('name') }}"
                                       placeholder="John Doe">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="fw-bold">Phone</label>
                                <input type="text"
                                       name="phone"
                                       class="form-control"
                                       value="{{ old('phone') }}"
                                       placeholder="98XXXXXXXX">
                            </div>

                        </div>

                        <div class="mb-3">
                            <label class="fw-bold">Email Address</label>
                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   value="{{ old('email') }}"
                                   placeholder="example@gmail.com">
                        </div>

                        <div class="mb-4">
                            <label class="fw-bold">Message</label>
                            <textarea name="message"
                                      rows="6"
                                      class="form-control"
                                      placeholder="Write your message...">{{ old('message') }}</textarea>
                        </div>

                        <button class="btn btn-send">
                            <i class="bi bi-send-fill"></i>
                            Send Message
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection