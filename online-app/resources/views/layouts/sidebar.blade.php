<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahata</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        .sidebar {
            width: 250px;
            height: 100vh;
            background: #212529;
            padding: 20px;
            position: fixed;
            left: 0;
            top: 0;
            overflow-y: auto;
        }

        .sidebar h4 {
            color:black;
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar .nav-link {
            color: white !important;
            padding: 12px;
            display: flex;
            align-items: center;
            border-radius: 8px;
            text-decoration: none;
        }

        .sidebar .nav-link i {
            margin-right: 10px;
        }

        .sidebar .nav-link:hover {
            background: #343a40;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            background: #f8f9fa;
            min-height: 100vh;
        }
    </style>
</head>

<body>

<div class="sidebar">

    <h4>Job Portal</h4>

    <ul class="list-unstyled">

        <li>
            <a href="{{ route('dashboard') }}" class="nav-link">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
        </li>

        <li>
            <a href="{{ route('users.index') }}" class="nav-link">
                <i class="bi bi-people-fill"></i> Users
            </a>
        </li>

        <!-- JOBS DROPDOWN -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-briefcase-fill"></i> Jobs
            </a>

            <ul class="dropdown-menu">

                <li>
                    <a class="dropdown-item" href="{{ route('jobs.index') }}">
                    Jobs list
                    </a>
                </li>

                <li><hr class="dropdown-divider"></li>
                 <a class="dropdown-item" href="{{ route('category.index') }}">Categories</a>
            </ul>
        </li>

        <li>
            <a href="{{ route('application.index') }}" class="nav-link">
                <i class="bi bi-file-earmark-text-fill"></i> Applications
            </a>
        </li>

        <li>
            <a href="{{ route('company.index') }}" class="nav-link">
                <i class="bi bi-building"></i> Companies
            </a>
        </li>

        <li>
            <a href="#" class="nav-link">
                <i class="bi bi-gear-fill"></i> Settings
            </a>
        </li>

        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-light w-100 mt-3">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </form>
        </li>

    </ul>
</div>

<div class="content">
    @yield('content')
</div>

</body>
</html>