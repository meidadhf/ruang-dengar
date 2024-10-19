<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Ruang Dengar')</title>
    <!-- Tambahkan CSS dan resource lainnya -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        @yield('content') <!-- Bagian ini akan diisi oleh konten dari setiap halaman -->
    </div>

    <!-- Tambahkan JS dan resource lainnya -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
