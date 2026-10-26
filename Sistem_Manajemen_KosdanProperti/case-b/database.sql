-- 1. Buat database (jika belum ada)
CREATE DATABASE IF NOT EXISTS db_kos_properti;
USE db_kos_properti;

-- 2. Buat tabel penghuni
CREATE TABLE IF NOT EXISTS penghuni (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nik VARCHAR(16) NOT NULL,
    nama_lengkap VARCHAR(100) NOT NULL,
    jenis_kelamin ENUM('Laki-laki', 'Perempuan') NOT NULL,
    tanggal_lahir DATE NOT NULL,
    pekerjaan VARCHAR(50) NOT NULL,
    no_hp VARCHAR(15) NOT NULL,
    nama_darurat VARCHAR(100) NOT NULL,
    hp_darurat VARCHAR(15) NOT NULL,
    alamat TEXT NOT NULL,
    nomor_kamar VARCHAR(10) NOT NULL,
    tanggal_sewa DATE NOT NULL
);

-- 3. Data contoh / dummy
INSERT INTO penghuni (nik, nama_lengkap, jenis_kelamin, tanggal_lahir, pekerjaan, no_hp, nama_darurat, hp_darurat, alamat, nomor_kamar, tanggal_sewa) VALUES
('3273010101010001', 'Budi Santoso', 'Laki-laki', '2001-01-01', 'Mahasiswa', '081234567890', 'Slamet Santoso', '081100000001', 'Bandung', 'A-101', '2026-01-01'),
('3273020202020002', 'Siti Aminah', 'Perempuan', '2002-02-02', 'Karyawan', '081311112222', 'Aminah Sr.', '081100000002', 'Cimahi', 'B-205', '2026-02-01');
