<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ruang Dengar - Ayo Konseling Tanpa Diketahui!</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/rd.ico') }}" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
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
                <a class="navbar-brand" href="{{ url('/') }}"><span class="fw-bolder text-primary">Ruang Dengar</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('loginguru') }}">Login Guru</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('daftarguru') }}">Daftar Guru</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('konsul') }}">Konseling</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Projects Section-->
        <section class="py-5">
            <div class="container px-5 mb-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Daftar Guru</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Project Card 1-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Dra. Endang Dwi Winarti</h2>
                                        <h5>00504122001</h5>
                                        <p>Merupakan guru BP/BK yang bertugas di jurusan Teknik Komputer dan Jaringan (TKJ)</p>
                                    </div>
                                    <img class="img-fluid square-image" src="{{ asset('assets/kosongan2.png') }}" alt="..." style="width: 300px; height: 300px; object-fit: cover;" />
                                </div>
                            </div>
                        </div>

                        <!-- Project Card 2 -->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-4">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Ayu Lea Lailatussa'diyah, S.Pd.</h2>
                                        <h5>00504122002</h5>
                                        <p>Merupakan guru BP/BK yang bertugas di jurusan Teknik Pemesinan (TP)</p>
                                    </div>
                                    <img class="img-fluid square-image" src="{{ asset('assets/kosongan2.png') }}" alt="..." style="width: 300px; height: 300px; object-fit: cover;" />
                                </div>
                            </div>
                        </div>

                        <!-- Project Card 3 -->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-4">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Raden Dewi Noviyanti, S.Pd.</h2>
                                        <h5>00504122003</h5>
                                        <p>Merupakan guru BP/BK yang bertugas di jurusan Teknik Elektronika Industri (TEI)</p>
                                    </div>
                                    <img class="img-fluid square-image" src="{{ asset('assets/kosongan2.png') }}" alt="..." style="width: 300px; height: 300px; object-fit: cover;" />
                                </div>
                            </div>
                        </div>

                        <!-- Project Card 4 -->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-4">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Arfiansyah, S.Pd.</h2>
                                        <h5>00504122004</h5>
                                        <p>Merupakan guru BP/BK yang bertugas di dua jurusan, yaitu Teknik Pengelasan dan Fabrikasi Logam (TPFL) dan Teknik Fabrikasi Logam dan Manufaktur (TFLM)</p>
                                    </div>
                                    <img class="img-fluid square-image" src="{{ asset('assets/kosongan1.png') }}" alt="..." style="width: 300px; height: 300px; object-fit: cover;" />
                                </div>
                            </div>
                        </div>

                        <!-- Project Card 5 -->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-4">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Agus Dian Kusdiana, S.Pd.</h2>
                                        <h5>00504122005</h5>
                                        <p>Merupakan guru BP/BK yang bertugas di dua jurusan, yaitu Desain Gambar Mesin (DGM) dan Teknik Kendaraan Ringan (TKR)</p>
                                    </div>
                                    <img class="img-fluid square-image" src="{{ asset('assets/kosongan1.png') }}" alt="..." style="width: 300px; height: 300px; object-fit: cover;" />
                                </div>
                            </div>
                        </div>

                        <!-- Project Card 6 -->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-4">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Dede Badru Zaman, S.Sos.</h2>
                                        <h5>00504122006</h5>
                                        <p>Merupakan guru BP/BK yang bertugas di dua jurusan, yaitu Teknik dan Bisnis Sepeda Motor (TBSM) dan Teknik Instalasi Tenaga Listrik (TITL)</p>
                                    </div>
                                    <img class="img-fluid square-image" src="{{ asset('assets/kosongan1.png') }}" alt="..." style="width: 300px; height: 300px; object-fit: cover;" />
                                </div>
                            </div>
                        </div>

                        <!-- Project Card 7 -->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-4">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Putri Mardatila, S.Psi.</h2>
                                        <h5>00504122007</h5>
                                        <p>Merupakan guru BP/BK yang bertugas di dua jurusan, yaitu Desain Komunikasi Visual (DKV) dan Teknik Komputer dan Jaringan (TKJ)</p>
                                    </div>
                                    <img class="img-fluid square-image" src="{{ asset('assets/kosongan1.png') }}" alt="..." style="width: 300px; height: 300px; object-fit: cover;" />
                                </div>
                            </div>
                        </div>

                        <!-- Project Card 8 -->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-4">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Yoseph Andrean, S.Pd.</h2>
                                        <h5>00504122008</h5>
                                        <p>Merupakan guru BP/BK yang bertugas di dua jurusan, yaitu Teknik Komputer dan Jaringan (TKJ) dan Rekayasa Perangkat Lunak (RPL)</p>
                                    </div>
                                    <img class="img-fluid square-image" src="{{ asset('assets/kosongan1.png') }}" alt="..." style="width: 300px; height: 300px; object-fit: cover;" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="py-4 bg-light mt-auto">
        <div class="container px-5"><div class="text-center">Copyright © 2024 - SMK Negeri 1 Karawang</div></div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('template/js/scripts.js') }}"></script>
</body>
</html>
