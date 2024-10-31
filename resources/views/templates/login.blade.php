<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ruang Dengar - Login</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('template/rd.ico') }}" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="{{ asset('template/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <section class="py-5">
                            <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                                <div class="text-center mb-5">
                                    <h1 class="fw-bolder">Login</h1>
                                    <p class="lead fw-normal text-muted mb-0">Silakan masuk dengan ID dan Password Anda</p>
                                </div>
                                <form id="formLogin" action="{{ route('login.submit') }}" method="POST">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="user_id" name="user_id" type="text" placeholder="Enter your ID..." required />
                                        <label for="user_id">ID</label>
                                    </div>
                                    <div class="form-floating mb-3 position-relative">
                                        <input class="form-control" id="password" name="password" type="password" placeholder="Enter your password..." required />
                                        <label for="password">Password</label>
                                        <span id="togglePasswordIcon" onclick="togglePassword()" style="cursor: pointer; position: absolute; right: 10px; top: 20px;" class="bi bi-eye"></span>
                                    </div>
                                    <div class="d-grid">
                                        <button class="btn btn-primary btn-lg" type="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('template/js/scripts.js') }}"></script>
        <script>
            function togglePassword() {
                const passwordInput = document.getElementById('password');
                const toggleIcon = document.getElementById('togglePasswordIcon');

                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    toggleIcon.classList.remove('bi-eye');
                    toggleIcon.classList.add('bi-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    toggleIcon.classList.remove('bi-eye-slash');
                    toggleIcon.classList.add('bi-eye');
                }
            }
        </script>
    </body>
</html>
