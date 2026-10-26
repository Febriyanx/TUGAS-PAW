# Cara Menjalankan Modul Case B (Data Penghuni)

### 1. Nyalakan Web Server
- Buka **Laragon**

### 2. Import Database
- Buka browser ke: `http://localhost/phpmyadmin`
- Klik menu **Import** di bagian atas.
- Pilih file `database.sql` (ada di dalam folder `case-b`).
- Klik tombol **Kirim / Go** di bagian bawah.
- Database `db_kos_properti` dan tabel `penghuni` otomatis terbuat beserta 2 data contoh.

### 3. Akses Melalui Browser
- Buka link: `http://localhost/Sistem_Manajemen_KosdanProperti/case-b/`

---

## Penjelasan Singkat Struktur File (Sederhana untuk Praktikum)

| File | Penjelasan Alur |
|---|---|
| `koneksi.php` | Menghubungkan PHP ke database MySQL (`mysqli_connect`) |
| `index.php` | Halaman menu awal modul Case B |
| `data-penghuni.php` | Menampilkan data tabel dengan query `SELECT * FROM penghuni` dan perulangan `while` |
| `form-penghuni.php` | Formulir untuk input data baru atau edit data lama (jika ada `?id=...`) |
| `simpan.php` | Memproses simpan: `INSERT INTO` (jika data baru) atau `UPDATE` (jika edit) |
| `hapus.php` | Menghapus baris data berdasarkan ID dengan `DELETE FROM` |
| `database.sql` | Perintah SQL untuk membuat database dan tabel |
| `style.css` | Tampilan styling form dan tabel |
