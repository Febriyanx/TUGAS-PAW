<?php
include 'koneksi.php';

// Inisialisasi variabel kosong
$id            = "";
$nik           = "";
$nama_lengkap  = "";
$jenis_kelamin = "";
$tanggal_lahir = "";
$pekerjaan     = "";
$no_hp         = "";
$nama_darurat  = "";
$hp_darurat    = "";
$alamat        = "";
$nomor_kamar   = "";
$tanggal_sewa  = "";

// Cek apakah ada parameter 'id' di URL (artinya mode edit)
$is_edit = isset($_GET['id']);

if ($is_edit) {
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM penghuni WHERE id = '$id'");
    $d = mysqli_fetch_array($query);

    // Ambil data lama dari database
    $nik           = $d['nik'];
    $nama_lengkap  = $d['nama_lengkap'];
    $jenis_kelamin = $d['jenis_kelamin'];
    $tanggal_lahir = $d['tanggal_lahir'];
    $pekerjaan     = $d['pekerjaan'];
    $no_hp         = $d['no_hp'];
    $nama_darurat  = $d['nama_darurat'];
    $hp_darurat    = $d['hp_darurat'];
    $alamat        = $d['alamat'];
    $nomor_kamar   = $d['nomor_kamar'];
    $tanggal_sewa  = $d['tanggal_sewa'];
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $is_edit ? 'Edit Data' : 'Tambah'; ?> Penghuni - Case B</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Sistem Manajemen Kos — Modul Data Penghuni</h1>
            <h2><?= $is_edit ? 'Edit Data Penghuni' : 'Form Pendaftaran Penghuni'; ?></h2>
        </header>

        <form action="simpan.php" method="POST" class="form-card">
            <!-- ID untuk penanda saat update data (kosong jika tambah baru) -->
            <input type="hidden" name="id" value="<?= $id; ?>">

            <div class="form-row">
                <div class="form-group">
                    <label for="nik">Nomor KTP (NIK)</label>
                    <input type="text" id="nik" name="nik" placeholder="16 digit NIK" maxlength="16" value="<?= $nik; ?>" required>
                </div>
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama sesuai KTP" value="<?= $nama_lengkap; ?>" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="jenis_kelamin" value="Laki-laki" <?= ($jenis_kelamin == 'Laki-laki') ? 'checked' : ''; ?> required> Laki-laki
                        </label>
                        <label>
                            <input type="radio" name="jenis_kelamin" value="Perempuan" <?= ($jenis_kelamin == 'Perempuan') ? 'checked' : ''; ?>> Perempuan
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?= $tanggal_lahir; ?>" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" id="pekerjaan" name="pekerjaan" placeholder="Contoh: Mahasiswa / Karyawan" value="<?= $pekerjaan; ?>" required>
                </div>
                <div class="form-group">
                    <label for="no_hp">No. HP Penghuni</label>
                    <input type="text" id="no_hp" name="no_hp" placeholder="08xxxxxxxxxx" value="<?= $no_hp; ?>" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="nama_darurat">Nama Kontak Darurat</label>
                    <input type="text" id="nama_darurat" name="nama_darurat" placeholder="Nama orang tua/kerabat" value="<?= $nama_darurat; ?>" required>
                </div>
                <div class="form-group">
                    <label for="hp_darurat">No. HP Kontak Darurat</label>
                    <input type="text" id="hp_darurat" name="hp_darurat" placeholder="08xxxxxxxxxx" value="<?= $hp_darurat; ?>" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group full-width">
                    <label for="alamat">Alamat Asal</label>
                    <textarea id="alamat" name="alamat" rows="3" placeholder="Alamat lengkap sesuai KTP" required><?= $alamat; ?></textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="nomor_kamar">Nomor Kamar</label>
                    <input type="text" id="nomor_kamar" name="nomor_kamar" placeholder="Contoh: A-101" value="<?= $nomor_kamar; ?>" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_sewa">Tanggal Mulai Sewa</label>
                    <input type="date" id="tanggal_sewa" name="tanggal_sewa" value="<?= $tanggal_sewa; ?>" required>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary"><?= $is_edit ? 'Simpan Perubahan' : 'Simpan Data'; ?></button>
                <a href="data-penghuni.php" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
