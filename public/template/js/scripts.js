/*!
* Start Bootstrap - Personal v1.0.1 (https://startbootstrap.com/template-overviews/personal)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-personal/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

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
        window.location.href = "balasan.html";
    }
}

// Fungsi untuk toggle tampilan password pada form guru
function toggleGuruPassword() {
    var passwordField = document.getElementById("password");
    var toggleIcon = document.getElementById("togglePasswordIconGuru");
    if (passwordField.type === "password") {
        passwordField.type = "text";
        toggleIcon.innerHTML = "🙈"; // Icon untuk sembunyikan
    } else {
        passwordField.type = "password";
        toggleIcon.innerHTML = "👁"; // Icon untuk tampilkan
    }
}

// Fungsi untuk validasi form guru
function validateGuruForm(event) {
    event.preventDefault();

    var id = document.getElementById("idguru").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    // Cek jika semua field diisi
    if (id === "" || email === "" || password === "") {
        alert("Semua field harus diisi!");
    } else {
        // Jika valid, arahkan ke pesan.html
        window.location.href = "pesan.html";
    }
}
