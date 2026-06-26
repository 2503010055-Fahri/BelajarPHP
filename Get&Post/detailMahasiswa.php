<?php 
    // cek apakah tidak ada data di $_GET
    if( !isset($_GET["Nama"]) || 
        !isset($_GET["Nim"]) || 
        !isset($_GET["Email"]) || 
        !isset($_GET["Jurusan"]) || 
        !isset($_GET["gambar"])){
        // redirect
        header("Location: superGlobals.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>

<body>

    <ul>
        <li><img src="../img/<?= $_GET["gambar"] ?>" height="50px" width="50px"></li>
        <li><?= $_GET["Nama"] ?></li>
        <li><?= $_GET["Nim"] ?></li>
        <li><?= $_GET["Email"] ?></li>
        <li><?= $_GET["Jurusan"] ?></li>
    </ul>

    <a href="superGlobals.php">Kembalik ke daftar Mahasiswa</a>

</body>

</html>