<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ruang Dengar - Beri Solusi!</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('template/rd.ico') }}" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('template/css/styles.css') }}" rel="stylesheet" />
</head>
<body class="d-flex flex-column h-100 bg-light">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
            <div class="container px-5">
                <a class="navbar-brand" href="{{ route('guru.dashboard') }}"><span class="fw-bolder text-primary">Ruang Dengar</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="nav-link" href="{{ route('guru.pesan') }}">Daftar Pesan</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">Log-out</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Projects Section-->
        <section class="py-5">
            <div class="container px-5 mb-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Halo! Selamat datang di Ruang Dengar!</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <h3>Pesan Konsultasi:</h3>

                        @if($pesans->isEmpty())
                            <p>Tidak ada pesan yang diterima.</p>
                        @else
                            @foreach($pesans as $pesan)
                                <div class="card overflow-hidden shadow rounded-4 border-0 mb-4">
                                    <div class="card-body p-4">
                                        <h2 class="fw-bolder">Seorang murid telah mengirimkan pesan!</h2>
                                        <p><strong>Pesan:</strong> {{ $pesan->pesan }}</p>
                                        <p><strong>Dikirim pada:</strong> {{ $pesan->created_at->format('d M Y H:i') }}</p>
                                        <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="modal" data-bs-target="#balasModal{{ $pesan->id }}">Balas Pesan</button>

                                        <!-- Modal untuk Balas Pesan -->
                                        <div class="modal fade" id="balasModal{{ $pesan->id }}" tabindex="-1" aria-labelledby="balasModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="balasModalLabel">Balas Pesan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('pesan.balas', $pesan->id) }}" method="POST">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="balasan" class="form-label">Balasan</label>
                                                                <textarea class="form-control" id="balasan" name="balasan" rows="3" required></textarea>
                                                            </div>
                                                            <input type="hidden" name="guru_id" value="{{ auth()->user()->id }}">
                                                            <button type="submit" class="btn btn-primary">Kirim Balasan</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="bg-white py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto"><div class="small m-0">Copyright &copy; pasukan Bismillah 2024</div></div>
                <div class="col-auto">
                    <a class="small" href="#!">Privacy</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="#!">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="#!">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('template/js/scripts.js') }}"></script>
</body>
</html>
