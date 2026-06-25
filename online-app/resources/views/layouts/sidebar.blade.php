<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Job Portal</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
.sidebar{
    width:250px;
    height:100vh;
    position:fixed;
    top:0;
    left:0;
    background:#fff;
    border-right:1px solid #dee2e6;
    padding:20px;
}

.sidebar h4{
    text-align:center;
    color:#0d6efd;
    font-weight:bold;
    margin-bottom:30px;
}

.sidebar .nav-link{
    color:#333 !important;
    padding:12px;
    border-radius:8px;
    display:flex;
    align-items:center;
}

.sidebar .nav-link i{
    margin-right:10px;
}

.sidebar .nav-link:hover{
    background:#0d6efd;
    color:#fff !important;
}

.content{
    margin-left:250px;
    padding:20px;
    background:#f8f9fa;
    min-height:100vh;
}
</style>
</head>

<body>

<div class="sidebar">

<h4>Job Portal</h4>

<ul class="list-unstyled">

<li><a href="{{ route('dashboard') }}" class="nav-link"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
<li><a href="{{ route('users.index') }}" class="nav-link"><i class="bi bi-people-fill"></i> Users</a></li>

<li>
<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
<i class="bi bi-briefcase-fill"></i> Jobs
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="{{ route('jobs.index') }}">Jobs List</a></li>
<li><a class="dropdown-item" href="{{ route('category.index') }}">Categories</a></li>
</ul>
</li>

<li><a href="{{ route('application.index') }}" class="nav-link"><i class="bi bi-file-earmark-text-fill"></i> Applications</a></li>
<li><a href="{{ route('company.index') }}" class="nav-link"><i class="bi bi-building"></i> Companies</a></li>

<li><a href="#" class="nav-link"><i class="bi bi-gear-fill"></i> Settings</a></li>

<li>
<form method="POST" action="{{ route('logout') }}">
@csrf
<button class="btn btn-danger w-100 mt-3">
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