<?php
// Konfigurasi database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_kos_properti";

// Menghubungkan ke database MySQL
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek apakah koneksi berhasil atau gagal
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
