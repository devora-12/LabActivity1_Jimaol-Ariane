<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('contenttitle')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device=width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Lab Activity 1</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About the Author</a></li>
                <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="/signup">Signup</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container p-4">
    @yield('content')
</div>

<footer class="text-center text-muted py-3">
    <small>Copyright - ARIANE JIMAOL 2025: BSCS-2C. All rights reserved!</small>
</footer>

</body>
</html>