<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ruang Dengar - Ayo Konseling Tanpa Diketahui!</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="public/template/rd.ico" />
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
                    <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">Ruang Dengar</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    </div>
                </div>
            </nav>
            <!-- Page Content-->
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Login Siswa</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Experience Section-->
                        <section class="py-5">
                            <div class="container px-5">
                                <!-- Contact form-->
                                <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                                    <div class="text-center mb-5">
                                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                                        <h1 class="fw-bolder">Ruang Dengar</h1>
                                        <p class="lead fw-normal text-muted mb-0">Ayo konsultasi untuk meringankan pikiranmu tanpa harus diketahui siapa dirimu!</p>
                                    </div>
                                    <div class="row gx-5 justify-content-center">
                                        <div class="col-lg-8 col-xl-6">
                                            <!-- Form login guru-->
                                            <form id="formSiswa" onsubmit="validateSiswaForm(event)">
                                                <!-- Username input-->
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="nis" type="text" placeholder="Enter your NIS..." required />
                                                    <label for="nis">NIS</label>
                                                </div>
                                                <!-- Password input-->
                                                <div class="form-floating mb-3 position-relative">
                                                    <input class="form-control" id="passwords" type="password" placeholder="Enter your password..." required />
                                                    <label for="passwords">Password</label>
                                                    <span id="togglePasswordIconSiswa" onclick="toggleSiswaPassword()" style="cursor: pointer; position: absolute; right: 10px; top: 20px;">👁</span>
                                                </div>
                                                <!-- Submit Button-->
                                                <div class="d-grid">
                                                    <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; Pasukan Bismillah Jalan, 2024</div></div>
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
        <script>
        // Fungsi untuk toggle tampilan password pada form siswa
        function toggleSiswaPassword() {
        var passwordField = document.getElementById("passwords");
        var toggleIcon = document.getElementById("togglePasswordIconSiswa");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleIcon.innerHTML = "🙈"; // Icon untuk sembunyikan
            } else {
                passwordField.type = "password";
                toggleIcon.innerHTML = "👁"; // Icon untuk tampilkan
            }
        }

        // Fungsi untuk validasi form siswa
        function validateSiswaForm(event) {
            event.preventDefault();

            var nis = document.getElementById("nis").value;
            var passwords = document.getElementById("passwords").value;

                // Cek jika semua field diisi
                if (nis === "" || passwords === "") {
                    alert("Semua field harus diisi!");
                } else {
                    // Jika valid, arahkan ke balasan.html
                    window.location.href = "{{ route('siswa.dashboard') }}";
                }
            }
        </script>
    </body>
</html>
