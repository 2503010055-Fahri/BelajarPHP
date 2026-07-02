<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'function.php';


// pagination
// konfigurasi
$jmlDataPerhalaman = 2;
$jmlData = count(query("SELECT * FROM mahasiswa"));
$jmlHalaman = ceil($jmlData / $jmlDataPerhalaman);
// halaman aktif
// operator ternary
$halAktif = ( isset($_GET["hal"]) ) ? $_GET["hal"] : 1;
$awalData = ( $jmlDataPerhalaman * $halAktif ) - $jmlDataPerhalaman;


$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jmlDataPerhalaman");


// tombol cari ditekan
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>

    <a href="logout.php">Logout</a>

    <h1>Daftar Mahasiswa</h1>

    <!-- tambah data mahasiswa -->
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br>
    <br>

    <!-- search -->
    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword penacarian..."
            autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>

    <!-- Navigasi -->
    <?php if( $halAktif > 1 ) : ?>
        <a href="?hal=<?= $halAktif - 1 ?>">&lt;</a>
    <?php endif; ?>

    <?php for( $i = 1; $i <= $jmlHalaman; $i++ ) : ?>
        <?php if( $i == $halAktif ) : ?>
            <a href="?hal=<?= $i ?>" style="font-weight: bold; color: blue;"><?= $i ?></a>
        <?php else : ?>
            <a href="?hal=<?= $i ?>"><?= $i ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if( $halAktif < $jmlHalaman ) : ?>
        <a href="?hal=<?= $halAktif + 1 ?>">&gt;</a>
    <?php endif; ?>

    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1 ?>
        <?php foreach ($mahasiswa as $row): ?>
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="update.php?id=<?= $row["id"] ?>">Edit</a> |
                    <a href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('yakin?');">Hapus</a>
                </td>
                <td><img src="../img/<?= $row["gambar"] ?>" height="50px" width="50px"></td>
                <td><?= $row["nim"] ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["jurusan"] ?></td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    </table>


</body>

</html>