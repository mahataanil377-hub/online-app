<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<style>
    body{
        overflow-x: hidden;
        overflow-y :scroll;
    }
</style>
</head>
<body>
    <header>
        @include('layouts.navigation')
</header>
<main>
    @yield('content')
</main>
<main>
    <div>
    @yield('title')
    </div>
    </main>
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>