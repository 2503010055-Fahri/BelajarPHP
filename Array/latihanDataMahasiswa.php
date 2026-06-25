<?php 
    $mahasiswa = ["Fahri Rahmat Fauzi", "2503010055", "Teknik Informatika", "Kelas C"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Data Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- cara menggunakan looping -->
     <ul>
        <?php foreach( $mahasiswa as $mhs ) : ?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>
     </ul>

     <br>

     <!-- cara echo array -->
      <ul>
        <li>Nama : <?= $mahasiswa[0]; ?></li>
        <li>NIM : <?= $mahasiswa[1]; ?></li>
        <li>Jurusan : <?= $mahasiswa[2]; ?></li>
        <li>Kelas : <?= $mahasiswa[3]; ?></li>
      </ul>
</body>
</html>