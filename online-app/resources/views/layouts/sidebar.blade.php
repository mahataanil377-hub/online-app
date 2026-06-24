<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahata</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* SIDEBAR */
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
            color: #fff;
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar .nav-link {
            color: white !important;
            display: flex;
            align-items: center;
            padding: 12px 15px;
            border-radius: 8px;
            transition: 0.3s;
            text-decoration: none;
        }

        .sidebar .nav-link i {
            margin-right: 10px;
            font-size: 18px;
        }

        .sidebar .nav-link:hover {
            background: #343a40;
        }

        .logout-btn {
            margin-top: 20px;
        }

        /* CONTENT AREA */
        .content {
            margin-left: 250px;
            padding: 20px;
            min-height: 100vh;
            background: #f8f9fa;
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">

    <h4>Job Portal</h4>

    <ul>

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

        <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-briefcase-fill"></i> Jobs
    </a>

    <ul class="dropdown-menu">
        <li>
            <a class="dropdown-item" href="{{ route('jobs.index') }}">
                All Jobs
            </a>
        </li>

        <li>
            <a class="dropdown-item" href="{{ route('category.index') }}">
                Categories
            </a>
        </li>
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
                <i class="bi bi-envelope-fill"></i> Messages
            </a>
        </li>

        <li>
            <a href="#" class="nav-link">
                <i class="bi bi-bar-chart-fill"></i> Reports
            </a>
        </li>

        <li>
            <a href="#" class="nav-link">
                <i class="bi bi-gear-fill"></i> Settings
            </a>
        </li>

       <li class="logout-btn">
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button type="submit" class="btn btn-light w-100">
            <i class="bi bi-box-arrow-right"></i> Logout
        </button>
    </form>
    </li>

    </ul>
  </div>

  <!-- CONTENT AREA (FIXED) -->
    <div class="content">
    @yield('content')
</div>

</body>
</html>