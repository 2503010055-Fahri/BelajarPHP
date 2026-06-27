<?php 
// Koneksi database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query table mahasiswa
// parameter ada dua
// 1. koneksi ke database
// 2. query nya mau apa?
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// jika mau ambil data (fetch) mahasiswa dari object result $mysqli_query
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object

// menggunakan assoc
// while( $mhs = mysqli_fetch_assoc($result) ){
//     var_dump($mhs);
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    

    <h1>Daftar Mahasiswa</h1>

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
        <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
        <tr>
            <td></td>
            <td>
                <a href="">Edit</a> |
                <a href="">Hapus</a>
            </td>
            <td><img src="../img/<?= $row["gambar"] ?>" height="50px" width="50px"></td>
            <td><?= $row["nim"] ?></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["jurusan"] ?></td>
        </tr>
        <?php endwhile; ?>
        <?php $i++ ?>
    </table>


</body>
</html>