<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mahata Jobs</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>

    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }

    body{
        background:#f4f6f9;
        font-family:'Segoe UI',sans-serif;
        overflow-x:hidden;
    }

    /* Sidebar */

    .sidebar{
        width:270px;
        min-height:100vh;
        background:linear-gradient(180deg,#0f172a,#1e293b);
        position:fixed;
        left:0;
        top:0;
        overflow-y:auto;
        box-shadow:0 0 25px rgba(0,0,0,.15);
    }

    .logo{
        padding:30px;
        text-align:center;
        color:#fff;
        border-bottom:1px solid rgba(255,255,255,.1);
    }

    .logo i{
        font-size:40px;
        color:#22c55e;
    }

    .logo h3{
        margin-top:10px;
        font-weight:bold;
    }

    .menu{
        padding:20px 15px;
    }

    .menu .nav-link{
        color:#cbd5e1;
        border-radius:12px;
        margin-bottom:8px;
        padding:12px 18px;
        transition:.3s;
        display:flex;
        align-items:center;
    }

    .menu .nav-link i{
        margin-right:10px;
        font-size:18px;
    }

    .menu .nav-link:hover{
        background:#22c55e;
        color:white;
        transform:translateX(5px);
    }

    .menu .active{
        background:#22c55e;
        color:white;
    }

    /* Topbar */

    .topbar{
        margin-left:270px;
        height:70px;
        background:white;
        box-shadow:0 3px 10px rgba(0,0,0,.08);
        display:flex;
        justify-content:space-between;
        align-items:center;
        padding:0 30px;
    }

    .topbar h4{
        margin:0;
        font-weight:bold;
    }

    .profile img{
        width:42px;
        height:42px;
        border-radius:50%;
    }

    /* Content */

    .content{
        margin-left:270px;
        padding:30px;
    }

    .logout{
        margin:20px;
    }

    .logout button{
        width:100%;
        border-radius:12px;
    }

    .badge-new{
        background:red;
        font-size:10px;
    }

    </style>

</head>

<body>

<!-- Sidebar -->

<div class="sidebar">

 <div class="logo text-center py-4">

    <img src="{{ asset('images/logo.png') }}"
         class="img-fluid"
         style="width:180px;">

</div>

    <div class="menu">

        <a href="{{ route('dashboard') }}" class="nav-link active">
            <i class="bi bi-speedometer2"></i>
            Dashboard
        </a>
        
          <a href="{{ route('application.index') }}" class="nav-link">
            <i class="bi bi-file-earmark-text"></i>
            Applications
        </a>
       
         
         <a href="{{ route('company.index') }}" class="nav-link">
            <i class="bi bi-building"></i>
            Companies
        </a>

        <a class="nav-link"
           data-bs-toggle="collapse"
           href="#blogMenu">

            <i class="bi bi-journal-text"></i>

            Blog

            <i class="bi bi-chevron-down ms-auto"></i>

        </a>

        <div class="collapse" id="blogMenu">

            <a href="{{ route('jobs.index') }}" class="nav-link ms-3">
                Jobs
            </a>

            <a href="{{ route('category.index') }}" class="nav-link ms-3">
                Categories
            </a>

        </div>
          
               <a href="{{ route('users.index') }}" class="nav-link">
            <i class="bi bi-people-fill"></i>
            Users
        </a>
       
        <a href="{{ route('messages.index') }}"
           class="nav-link d-flex justify-content-between align-items-center">

            <span>

                <i class="bi bi-envelope-fill"></i>

                Messages

            </span>


        </a>

        <a href="#" class="nav-link">
            <i class="bi bi-gear-fill"></i>
            Settings

        </a>

    </div>

    <div class="logout">

        <form action="{{ route('logout') }}" method="POST">

            @csrf

            <button class="btn btn-success">

                <i class="bi bi-box-arrow-right"></i>

                Logout

            </button>

        </form>

    </div>

</div>

<!-- Topbar -->

<div class="topbar">

    <!-- Welcome -->
    <h4 class="fw-bold">
        Welcome {{ auth()->user()->name }}
    </h4>

    <div class="d-flex align-items-center gap-3">

        <!-- Search -->
        <form action="{{ route('search') }}" method="GET" class="d-flex">
            <input type="text"
                   name="search"
                   class="form-control"
                   placeholder="Search..."
                   style="width:220px;">

            <button class="btn btn-success ms-2">
                <i class="bi bi-search"></i>
            </button>
        </form>

        <!-- Notification -->
        <div class="dropdown">

            <button class="btn btn-light position-relative"
                    data-bs-toggle="dropdown">

                <i class="bi bi-bell fs-4"></i>

             <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                       0
                  </span>

            </button>

           <ul class="dropdown-menu dropdown-menu-end">
        <li>
        <span class="dropdown-item text-muted">
            No Notifications
        </span>
        </li>
         </ul>

        </div>

        <!-- Profile -->
        <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center"
             style="width:42px;height:42px;font-weight:bold;">

            {{ strtoupper(substr(auth()->user()->name,0,1)) }}

        </div>

    </div>

</div>

<!-- Main Content -->

<div class="content">

    @yield('content')

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>