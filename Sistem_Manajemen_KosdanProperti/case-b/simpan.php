<?php
include 'koneksi.php';

// Menangkap data dari form yang dikirim lewat metode POST
$id            = $_POST['id'];
$nik           = $_POST['nik'];
$nama_lengkap  = $_POST['nama_lengkap'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$pekerjaan     = $_POST['pekerjaan'];
$no_hp         = $_POST['no_hp'];
$nama_darurat  = $_POST['nama_darurat'];
$hp_darurat    = $_POST['hp_darurat'];
$alamat        = $_POST['alamat'];
$nomor_kamar   = $_POST['nomor_kamar'];
$tanggal_sewa  = $_POST['tanggal_sewa'];

// Jika id kosong, berarti aksi TAMBAH data baru
if (empty($id)) {
    mysqli_query($koneksi, "INSERT INTO penghuni (nik, nama_lengkap, jenis_kelamin, tanggal_lahir, pekerjaan, no_hp, nama_darurat, hp_darurat, alamat, nomor_kamar, tanggal_sewa) 
                            VALUES ('$nik', '$nama_lengkap', '$jenis_kelamin', '$tanggal_lahir', '$pekerjaan', '$no_hp', '$nama_darurat', '$hp_darurat', '$alamat', '$nomor_kamar', '$tanggal_sewa')");
} else {
    // Jika id tidak kosong, berarti aksi UPDATE data lama
    mysqli_query($koneksi, "UPDATE penghuni SET 
                                nik           = '$nik',
                                nama_lengkap  = '$nama_lengkap',
                                jenis_kelamin = '$jenis_kelamin',
                                tanggal_lahir = '$tanggal_lahir',
                                pekerjaan     = '$pekerjaan',
                                no_hp         = '$no_hp',
                                nama_darurat  = '$nama_darurat',
                                hp_darurat    = '$hp_darurat',
                                alamat        = '$alamat',
                                nomor_kamar   = '$nomor_kamar',
                                tanggal_sewa  = '$tanggal_sewa'
                            WHERE id = '$id'");
}

// Alihkan halaman kembali ke daftar data penghuni
header("location: data-penghuni.php");
?>
