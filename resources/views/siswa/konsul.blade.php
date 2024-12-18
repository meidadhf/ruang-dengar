<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ruang Dengar - Ayo Konseling Tanpa Diketahui!</title>
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
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="{{ url('/') }}"><span class="fw-bolder text-primary">Ruang Dengar</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('daftarguru') }}">Daftar Guru</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('konsul') }}">Konseling</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Ruang Dengar</h1>
                            <p class="lead fw-normal text-muted mb-0">Ayo konseling tanpa diketahui!</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <form id="contactForm" method="POST" action="{{ route('pesan.kirim') }}">
                                    @csrf
                                    <!-- Nama Guru (Hidden Input) -->
                                    <input type="hidden" name="guru_id" value="{{ $guru_id }}">
                                    <input type="hidden" name="nama_guru" value="{{ $nama_guru }}">

                                    <!-- Tampilkan nama guru secara terbuka -->
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="name" value="{{ $nama_guru }}" readonly>
                                        <label for="name">Nama Guru</label>
                                    </div>

                                    <!-- Pesan input -->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="message" name="pesan" placeholder="Ketik pesanmu di sini..." style="height: 20rem" required></textarea>
                                        <label for="message">Pesan</label>
                                        <div class="invalid-feedback">Pesan diperlukan.</div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="d-grid">
                                        <button class="btn btn-primary btn-lg" type="submit">Kirim Pesan</button>
                                    </div>
                                    <div class="d-none" id="submitSuccessMessage">
                                        <div class="text-center mb-3">
                                            <div class="fw-bolder">Pesan Berhasil Terkirim</div>
                                            Tunggu Guru Untuk Merespon Pesan!
                                            <br />
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; Pasukan Bismillah Jalan 2024</div></div>
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
