<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ruang Dengar - Admin Panel</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('template/rd.ico') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="{{ asset('template/css/styles.css') }}" rel="stylesheet" />

</head>
<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
            <div class="container px-5">
                <a class="navbar-brand" href="#"><span class="fw-bold text-primary">Ruang Dengar</span></a>
            </div>
        </nav>
        <section class="py-5 bg-gradient-primary-to-secondary text-white">
            <div class="container px-5">
                <h1 class="text-center">Tambahkan data guru ataupun siswa</h1>
            </div>
        </section>
        <div class="container mt-4">
            @yield('content')
        </div>
    </main>
    <footer class="bg-white py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto"><small>Copyright &copy; Ruang Dengar 2024</small></div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template/js/scripts.js') }}"></script>
    @section('scripts')
    <script>
        document.getElementById('type').addEventListener('change', function () {
            const type = this.value;
            document.getElementById('nisField').style.display = type === 'siswa' ? 'block' : 'none';
            document.getElementById('guruIdField').style.display = type === 'guru' ? 'block' : 'none';
        });
    </script>
@endsection

</body>
</html>
