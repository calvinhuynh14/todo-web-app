<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>To-Do List App</title>
</head>

<body>
    <header>
        <h1 class="bg-primary text-white p-4">To-Do List App</h1>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Login</a>
                </li>
                <li class="nav-item">
                    <a href="/register" class="nav-link {{ request()->is('register') ? 'active' : '' }}">Register</a>
                </li>
                <li class="nav-item">
                    <a href="/manage" class="nav-link {{ request()->is('manage') ? 'active' : '' }}">Manage</a>
                </li>
            </ul>
        </nav>
    </header>
    <main style="padding-bottom: 80px;">
        @yield('content')

    </main>
    <footer class="bg-primary text-white text-center fixed-bottom">
        <p>&copy; To-Do List App 2025</p>
    </footer>
</body>
</html>