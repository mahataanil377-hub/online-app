<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- ================= NAVBAR ================= -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm text-uppercase w-100">

    <div class="container-fluid">

        <!-- LEFT: Brand -->
        <a class="navbar-brand fw-bold fs-4 text-white" href="#">
            Mahata Jobs
        </a>

        <!-- Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENU AREA -->
        <div class="collapse navbar-collapse" id="nav">

            <div class="d-flex w-100 align-items-center">

                <!-- CENTER MENU -->
                <ul class="navbar-nav mx-auto d-flex flex-row gap-4">

                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('home.index') }}">
                            {{ __('message.Home') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('apply.index') }}">
                            {{ __('message.Apply') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('about.index') }}">
                            {{ __('message.About') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('contact.index') }}">
                            {{ __('message.Contact') }}
                        </a>
                    </li>

                </ul>

                <!-- RIGHT SIDE -->
                <div class="d-flex align-items-center gap-3">

                    <!-- LANGUAGE -->
                    <select class="form-select form-select-sm w-auto"
                        onchange="changeLang(this.value)">

                        <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>
                            English
                        </option>

                        <option value="np" {{ app()->getLocale() == 'np' ? 'selected' : '' }}>
                            नेपाली
                        </option>

                    </select>

                    <!-- LOGIN -->
                    <a href="/login"
                       class="btn btn-light text-success fw-semibold rounded-pill px-3">
                        {{ __('message.Login') }}
                    </a>

                </div>

            </div>
        </div>

    </div>
</nav>

<!-- LANGUAGE SCRIPT -->
<script>
function changeLang(lang) {
    window.location.href = "{{ url('lang') }}/" + lang;
}
</script>