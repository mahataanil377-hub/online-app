<!-- Bootstrap Icons -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
.footer{
    background: linear-gradient(135deg,#0f172a,#1e293b);
}

.footer-title{
    color:#fbbf24;
    font-weight:700;
    margin-bottom:20px;
}

.footer a{
    color:#cbd5e1;
    text-decoration:none;
    transition:.3s;
}

.footer a:hover{
    color:#fbbf24;
    padding-left:5px;
}

.social-icon{
    width:40px;
    height:40px;
    border-radius:50%;
    background:#334155;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    margin-right:8px;
    transition:.3s;
}

.social-icon:hover{
    background:#fbbf24;
    color:#000 !important;
    transform:translateY(-3px);
}

.newsletter-input{
    border:none;
    border-radius:50px;
    padding:10px 15px;
}

.subscribe-btn{
    border-radius:50px;
    font-weight:600;
}

.footer-bottom{
    border-top:1px solid rgba(255,255,255,.1);
    margin-top:30px;
    padding-top:20px;
}
</style>

<footer class="footer text-light pt-5 pb-3">

```
<div class="container">

    <div class="row gy-4">

        <!-- About -->
        <div class="col-lg-4 col-md-6">

            <h4 class="footer-title">
                <i class="bi bi-briefcase-fill"></i>
                JobFinder
            </h4>

            <p class="text-light-emphasis">
                JobFinder helps job seekers connect with top companies.
                Search jobs, apply instantly, and build your career with confidence.
            </p>

            <div class="mt-3">

                <a href="#" class="social-icon text-light">
                    <i class="bi bi-facebook"></i>
                </a>

                <a href="#" class="social-icon text-light">
                    <i class="bi bi-twitter-x"></i>
                </a>

                <a href="#" class="social-icon text-light">
                    <i class="bi bi-linkedin"></i>
                </a>

                <a href="#" class="social-icon text-light">
                    <i class="bi bi-instagram"></i>
                </a>

            </div>

        </div>

        <!-- Quick Links -->
        <div class="col-lg-2 col-md-6">

            <h5 class="footer-title">Quick Links</h5>

            <p><a href="/">Home</a></p>
            <p><a href="/jobs">Jobs</a></p>
            <p><a href="/companies">Companies</a></p>
            <p><a href="/about">About Us</a></p>
            <p><a href="/contact">Contact</a></p>

        </div>

        <!-- Popular Jobs -->
        <div class="col-lg-3 col-md-6">

            <h5 class="footer-title">Popular Jobs</h5>

            <p><a href="#">Web Developer</a></p>
            <p><a href="#">UI/UX Designer</a></p>
            <p><a href="#">Laravel Developer</a></p>
            <p><a href="#">Data Analyst</a></p>
            <p><a href="#">Marketing Manager</a></p>

        </div>

        <!-- Contact + Newsletter -->
        <div class="col-lg-3 col-md-6">

            <h5 class="footer-title">Get In Touch</h5>

            <p>
                <i class="bi bi-geo-alt-fill text-warning"></i>
                Kathmandu, Nepal
            </p>

            <p>
                <i class="bi bi-envelope-fill text-warning"></i>
                support@jobfinder.com
            </p>

            <p>
                <i class="bi bi-telephone-fill text-warning"></i>
                +977 9800000000
            </p>

            <form class="mt-3">

                <input type="email"
                       class="form-control newsletter-input mb-2"
                       placeholder="Enter your email">

                <button class="btn btn-warning subscribe-btn w-100">
                    Subscribe Now
                </button>

            </form>

        </div>

    </div>

    <!-- Bottom -->
    <div class="footer-bottom">

        <div class="row align-items-center">

            <div class="col-md-6">
                <p class="mb-0">
                    © 2026 JobFinder. All Rights Reserved.
                </p>
            </div>

            <div class="col-md-6 text-md-end">
                <p class="mb-0">
                    Designed & Developed by
                    <span class="text-warning fw-bold">
                        JobFinder Team
                    </span>
                </p>
            </div>

        </div>

    </div>

</div>
```

</footer>
