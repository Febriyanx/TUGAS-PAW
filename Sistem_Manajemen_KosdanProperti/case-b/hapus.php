<?php
include 'koneksi.php';

// Menangkap id yang dikirim melalui URL
$id = $_GET['id'];

// Menghapus data dari database sesuai id
mysqli_query($koneksi, "DELETE FROM penghuni WHERE id = '$id'");

// Mengalihkan halaman kembali ke data-penghuni.php
header("location: data-penghuni.php");
?>
