<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Job Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body{
            background-color: #f4f6f9;
        }

        .sidebar{
            min-height: 100vh;
        }

        .card-hover{
            transition: 0.3s;
        }

        .card-hover:hover{
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .icon-size{
            font-size: 40px;
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 bg-dark text-white p-3 sidebar">

            <h3 class="text-center mb-4">JobAdmin</h3>

            <ul class="nav flex-column">

                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-white">
                        <i class="bi bi-speedometer2"></i> Dashboard
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-light">
                        <i class="bi bi-people"></i> Users
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-light">
                        <i class="bi bi-briefcase"></i> Blogs
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-light">
                        <i class="bi bi-tags"></i> Categories
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link text-light">
                        <i class="bi bi-gear"></i> Settings
                    </a>
                </li>
                
              <li class="nav-item">
                    <a href="#" class="nav-link text-light">
                        <i class="bi bi-box-arrow-right"></i> logout
                    </a>
                </li>
                
            </ul>

        </div>

        <!-- Content -->
        <div class="col-md-10 p-4">
            @yield('content')
        </div>

    </div>
</div>

</body>
</html>