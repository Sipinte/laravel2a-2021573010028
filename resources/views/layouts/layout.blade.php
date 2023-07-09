<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library System</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>
    .sidebar-link:hover {
        background-color: #f8f9fa;
        color: #007bff;
    }
    </style>

</head>

<body>
    <header>
        <!-- Tampilan header dengan kombinasi warna coklat, kuning, dan putih -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Library System</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Books</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        <!-- Tampilan footer dengan kombinasi warna coklat, kuning, dan putih -->
        <div class="footer bg-light text-center py-3">
            <p>&copy; 2023 Library System. All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ mix('js/app.js') }}" defer></script>
</body>

</html>