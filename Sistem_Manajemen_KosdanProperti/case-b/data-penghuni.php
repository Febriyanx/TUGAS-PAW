<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penghuni Kos - Case B</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Sistem Manajemen Kos — Modul Data Penghuni</h1>
</header>

<div class="container">
    <div class="top-bar">
        <h2>Daftar Penghuni</h2>
        <div class="btn-group">
            <a href="form-penghuni.php" class="btn btn-primary">+ Tambah Penghuni</a>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama Lengkap</th>
                <th>JK</th>
                <th>Pekerjaan</th>
                <th>No. HP</th>
                <th>Kamar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($koneksi, "SELECT * FROM penghuni ORDER BY id ASC");

            // Jika belum ada data
            if (mysqli_num_rows($query) == 0) {
                echo '<tr><td colspan="8" class="empty">Belum ada data penghuni.</td></tr>';
            } else {
                // Looping menampilkan data dari database
                while ($d = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td data-label="No"><?= $no++; ?></td>
                <td data-label="NIK"><?= $d['nik']; ?></td>
                <td data-label="Nama"><?= $d['nama_lengkap']; ?></td>
                <td data-label="JK">
                    <?php if ($d['jenis_kelamin'] == 'Laki-laki') { ?>
                        <span class="badge badge-l">L</span>
                    <?php } else { ?>
                        <span class="badge badge-p">P</span>
                    <?php } ?>
                </td>
                <td data-label="Pekerjaan"><?= $d['pekerjaan']; ?></td>
                <td data-label="No. HP"><?= $d['no_hp']; ?></td>
                <td data-label="Kamar"><?= $d['nomor_kamar']; ?></td>
                <td data-label="Aksi">
                    <a href="form-penghuni.php?id=<?= $d['id']; ?>" class="edit">Edit</a>
                    <a href="hapus.php?id=<?= $d['id']; ?>" class="delete" onclick="return confirm('Yakin ingin menghapus data <?= $d['nama_lengkap']; ?>?');">Hapus</a>
                </td>
            </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
