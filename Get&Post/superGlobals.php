<?php
// SUPERGLOBALS
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV
// variabel global milik PHP
// merupakan array associative

// 1. implementasi $_GET
$Mahasiswa = [
    [
        "Nama" => "Fahri Rahmat Fauzi",
        "NIM" => "2503010055",
        "Email" => "2503010055@unper.ac.id",
        "Jurusan" => "Teknik Infotmatika",
        "gambar" => "gambar_user.png"
    ],
    [
        // bisa juga dibagian key-nya menambahkan array, contoh di bagian nilai pada ucup
        "Nama" => "Ucup marucup",
        "NIM" => "2503010000",
        "Email" => "2503010000@unper.ac.id",
        "Jurusan" => "Teknik Mesin",
        "Nilai" => [70, 80, 90],
        "gambar" => "dosen7.png"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach ($Mahasiswa as $mhs): ?>
            <li>
                <a href="detailMahasiswa.php?Nama=<?= $mhs["Nama"]; ?>&Nim=<?= $mhs["NIM"] ?>
                &Email=<?= $mhs["Email"] ?>&Jurusan=<?= $mhs["Jurusan"] ?>
                &gambar=<?= $mhs["gambar"] ?>"><?= $mhs["Nama"] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>