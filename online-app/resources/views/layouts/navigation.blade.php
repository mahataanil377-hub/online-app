<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- ================= TOP BAR ================= -->
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="bg-white border-bottom py-3 small shadow-sm">
    <div class="container d-flex justify-content-between align-items-center flex-wrap">

        <!-- LEFT: Logo -->
        <div class="d-flex align-items-center gap-2 fw-bold text-success fs-5">
            💼 Mahata Jobs
        </div>

        <!-- CENTER: Contact Info -->
        <div class="d-flex gap-3 text-muted flex-wrap justify-content-center">
            📧 support@onlinejob.com
            <span>|</span>
            📞 +977-9800000000
        </div>

        <!-- RIGHT: Social Icons -->
        <div class="d-flex gap-3 fs-5">

            <!-- Facebook -->
            <a href="#" class="text-primary">
                <i class="bi bi-facebook"></i>
            </a>

            <!-- Instagram -->
            <a href="#" class="text-danger">
                <i class="bi bi-instagram"></i>
            </a>

            <!-- WhatsApp -->
            <a href="#" class="text-success">
                <i class="bi bi-whatsapp"></i>
            </a>

        </div>

    </div>
</div>
<!-- ================= NAVBAR ================= -->
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm text-uppercase">

    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand fw-bold fs-4 text-white" href="#">
            Mahata
        </a>

        <!-- Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="nav">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link text-white px-2 active" href="{{ route('home.index') }}">
                        {{ __('message.Home') }}
                    </a>
                </li>

                <!-- Apply -->
                <li class="nav-item">
                    <a class="nav-link text-white px-2" href="{{ route('apply.index') }}">
                        {{ __('message.Apply') }}
                    </a>
                </li>

                <!-- About -->
                <li class="nav-item">
                    <a class="nav-link text-white px-2" href="{{ route('about.index') }}">
                        {{ __('message.About') }}
                    </a>
                </li>

                <!-- Contact -->
                <li class="nav-item">
                    <a class="nav-link text-white px-2" href="{{ route('contact.index') }}">
                        {{ __('message.Contact') }}
                    </a>
                </li>

       <!-- Language Select -->
<li class="nav-item ms-lg-3 mt-2 mt-lg-0">
    <form action="" method="GET">
        <select class="form-select form-select-sm" onchange="changeLang(this.value)">
            <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>
                English
            </option>
            <option value="np" {{ app()->getLocale() == 'np' ? 'selected' : '' }}>
                नेपाली
            </option>
        </select>
    </form>
</li>

<script>
    function changeLang(lang) {
        if (lang) {
            window.location.href = "{{ url('lang') }}/" + lang;
        }
    }
</script>

                <!-- Login Button -->
                <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                    <a href="/login"
                       class="btn btn-light text-success fw-semibold rounded-pill px-3">
                        {{ __('message.Login') }}
                    </a>
                </li>

            </ul>

        </div>

    </div>
</nav>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>