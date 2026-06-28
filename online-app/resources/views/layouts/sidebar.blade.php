<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Job Portal</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light">

<!-- SIDEBAR -->
<div class="d-flex">

    <!-- LEFT SIDEBAR -->
    <div class="bg-white border-end vh-100 p-3" style="width:260px;">

        <!-- LOGO -->
        <h4 class="text-success fw-bold text-center mb-4">
            <i class="bi bi-briefcase-fill"></i> Job Portal
        </h4>

        <!-- MENU -->
        <ul class="nav flex-column gap-1">

            <li class="nav-item">
                <a class="nav-link text-dark rounded px-3 py-2 d-flex align-items-center gap-2 active bg-success text-white"
                   href="{{ route('dashboard') }}">
                    <i class="bi bi-speedometer2"></i> Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark rounded px-3 py-2 d-flex align-items-center gap-2"
                   href="{{ route('users.index') }}">
                    <i class="bi bi-people-fill"></i> Users
                </a>
            </li>

            <!-- JOBS COLLAPSE -->
            <li class="nav-item">
                <a class="nav-link text-dark rounded px-3 py-2 d-flex align-items-center gap-2"
                   data-bs-toggle="collapse" href="#jobsMenu">
                    <i class="bi bi-briefcase"></i> Blog
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>

                <div class="collapse ps-4" id="jobsMenu">

                    <a class="nav-link text-secondary py-1"
                       href="{{ route('jobs.index') }}">
                        Jobs List
                    </a>

                    <a class="nav-link text-secondary py-1"
                       href="{{ route('category.index') }}">
                        Categories
                    </a>

                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark rounded px-3 py-2 d-flex align-items-center gap-2"
                   href="{{ route('application.index') }}">
                    <i class="bi bi-file-earmark-text-fill"></i> Applications
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark rounded px-3 py-2 d-flex align-items-center gap-2"
                   href="{{ route('company.index') }}">
                    <i class="bi bi-building"></i> Companies
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark rounded px-3 py-2 d-flex align-items-center gap-2"
                   href="#">
                    <i class="bi bi-gear-fill"></i> Settings
                </a>
            </li>

        </ul>

        <!-- LOGOUT -->
        <form method="POST" action="{{ route('logout') }}" class="mt-4">
            @csrf
            <button class="btn btn-danger w-100 rounded">
                <i class="bi bi-box-arrow-right"></i> Logout
            </button>
        </form>

    </div>

    <!-- CONTENT -->
    <div class="flex-grow-1 p-4">
        @yield('content')
    </div>

</div>

</body>
</html>