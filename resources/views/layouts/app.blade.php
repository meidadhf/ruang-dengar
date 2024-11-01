<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Dengar - Sign in</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('template/rd.ico') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="{{ asset('template/css/styles.css') }}" rel="stylesheet" />
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-5">
            <a class="navbar-brand" href="{{ url('/') }}">
                <span class="fw-bolder text-primary">Ruang Dengar</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <div class="container my-5">
        @yield('content') <!-- Area untuk konten dari halaman lain -->
    </div>

    <!-- Footer -->
    <footer class="bg-light py-4">
        <div class="container px-5">
            <div class="text-center">
                <p class="m-0">Copyright &copy; Pasukan Bismillah Jalan, 2024</p>
                <a class="small" href="#!">Privacy</a>
                <span class="mx-1">&middot;</span>
                <a class="small" href="#!">Terms</a>
                <span class="mx-1">&middot;</span>
                <a class="small" href="#!">Contact</a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts') <!-- Tempat untuk JavaScript tambahan -->
</body>
</html>
