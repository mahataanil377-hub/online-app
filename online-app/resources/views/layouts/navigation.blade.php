<style>
/* ================= TOP BAR ================= */
.top-bar{
    background:white;
    color: white;
    font-size: 14px;
    padding: 6px 0;
}

.top-bar a{
    color: #fff;
    text-decoration: none;
    margin-left: 10px;
}

.top-bar a:hover{
    color: #ffd700;
}

/* ================= MAIN NAVBAR ================= */
.navbar{
    background: linear-gradient(to right, rgb(25, 117, 84), rgb(20, 108, 67)) !important;
    box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
    padding: 12px 0;
}

/* Brand */  
.navbar-brand{
    font-weight: bold;
    font-size: 26px;
    color: white !important;
}

/* Nav links */
.nav-link{
    color: white !important;
    margin-right: 10px;
    position: relative;
    transition: 0.3s;
}

.nav-link:hover{
    color: #ffd700 !important;
}

/* underline effect */
.nav-link::after{
    content: "";
    position: absolute;
    width: 0%;
    height: 2px;
    background: #ffd700;
    left: 0;
    bottom: 0;
    transition: 0.3s;
}

.nav-link:hover::after{
    width: 100%;
}

/* Login button */
.login-btn{
    background: white;
    color: #198754 !important;
    padding: 6px 14px;
    border-radius: 20px;
    font-weight: bold;
    text-decoration: none;
    transition: 0.3s;
}

.login-btn:hover{
    background: #ffd700;
    color: black !important;
}
</style>

<!-- ================= TOP NAVBAR ================= -->
<div class="top-bar">
    
       

        <div>
            <div class="container d-flex justify-content-between">
        <div>
            📧 support@onlinejob.com | 📞 +977-9800000000
        </div>
        </div>
    </div>
</div>

<!-- ================= MAIN NAVBAR ================= -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="#">
            💼 OnlineJob.com
        </a>

        <!-- Mobile toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto align-items-center">

                <li class="nav-item">
                    <a class="nav-link active" href="/home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/apply">Apply</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>

                <!-- Login Button -->
                <li class="nav-item">
                    <a class="login-btn ms-3" href="/login">
                        Login
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>