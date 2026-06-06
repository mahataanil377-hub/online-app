<style>

/* FOOTER BLUE THEME */
.footer {
    background: rgb(13, 110, 253);
    color: #f1f1f1;
}

/* LINKS */
.footer a {
    color: #e6e6e6;
    text-decoration: none;
    transition: 0.3s;
}

.footer a:hover {
    color: #ffd700;
    padding-left: 5px;
}

/* HEADINGS */
.footer h5 {
    color: #fff;
    font-weight: bold;
    margin-bottom: 15px;
}

/* SOCIAL ICONS */
.social a {
    font-size: 18px;
    margin-right: 10px;
    color: #e6e6e6;
    transition: 0.3s;
}

.social a:hover {
    color: #ffd700;
    transform: translateY(-3px);
}

/* NEWSLETTER */
.newsletter input {
    border: none;
    padding: 8px;
    width: 70%;
    border-radius: 5px 0 0 5px;
    outline: none;
}

.newsletter button {
    border: none;
    padding: 8px 12px;
    background: #ffc107;
    color: black;
    font-weight: bold;
    border-radius: 0 5px 5px 0;
}
</style>

<footer class="footer pt-5 pb-3 mt-5">

    <div class="container">
        <div class="row">

            <!-- ABOUT -->
            <div class="col-md-4 mb-4">
                <h5>💼 JobPortal</h5>
                <p>
                    Find your dream job easily.
                    Connect with top companies and apply in seconds.
                </p>

                <!-- SOCIAL -->
                <div class="social mt-3">
                    <a href="#">👍</a>
                    <a href="#">📘</a>
                    <a href="#">🐦</a>
                    <a href="#">📸</a>
                </div>
            </div>

            <!-- QUICK LINKS -->
            <div class="col-md-2 mb-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><a href="/jobs">Jobs</a></li>
                    <li><a href="/companies">Companies</a></li>
                    <li><a href="/about">About</a></li>
                </ul>
            </div>

            <!-- EMPLOYERS -->
            <div class="col-md-3 mb-4">
                <h5>For Employers</h5>
                <ul class="list-unstyled">
                    <li><a href="/post-job">Post Job</a></li>
                    <li><a href="/candidates">Search Candidates</a></li>
                    <li><a href="/pricing">Pricing</a></li>
                </ul>
            </div>

            <!-- NEWSLETTER -->
            <div class="col-md-3 mb-4">
                <h5>Newsletter</h5>
                <p>Subscribe for latest job updates.</p>

                <div class="newsletter d-flex">
                    <input type="email" placeholder="Your email">
                    <button>Join</button>
                </div>

                <p class="mt-3">📧 support@jobportal.com</p>
                <p>📞 +977-9800000000</p>
            </div>

        </div>

        <hr class="border-light">

        <div class="text-center">
            <p class="mb-0">
                © {{ date('Y') }} <strong>JobPortal</strong>. All Rights Reserved.
            </p>
        </div>
    </div>

</footer>