<!-- Array multidimensi -->
<?php $mahasiswa = [["Fahri Rahmat Fauzi", "2503010055", "2503010055@unper.ac.id", "Teknik Informatika"]] ?>

<!-- Array Associative -->
 <!-- definisinya sama seperti array numerik, kecuali -->
  <!-- key-nya adalah string yang kita buat sendiri -->
<?php $Mahasiswa = [[
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
        "Nilai" => [70,80,90],
        "gambar" => "dosen7.png"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Associative Array</title>
    <style>
        h1 {
            text-align: center;
            color: white;
            background-color: green;
            border-radius: 5px;
            width: 50%;
            margin: 20px auto;
            transform: perspective(360deg);
        }

        h1:hover {
            background-color: navy;
            transition: 1s;
        }

        li {
            list-style: none;
            padding: 0;
            margin: 15px 0;
            text-align: center;
        }

        img {
            display: block;
            margin: 10px auto;
            width: 100px;
            height: 100px;
            transition: 1s;
        }

        img:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .card {
            width: 320px;
            margin: 20px auto;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,.15);
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- Tampilkan data yang dari array multidimensi -->
     <?php foreach( $mahasiswa as $mhs ) : ?>
     <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NIM : <?= $mhs[1]; ?></li>
        <li>Emial : <?= $mhs[2]; ?></li>
        <li>Jurusan : <?= $mhs[3]; ?></li>
     </ul>
     <?php endforeach; ?>

     <br>

        <!-- Tampilkan data yang dari array Associative -->
        <?php foreach ($Mahasiswa as $Mhs) : ?>
        <div class="card">
            <img src="../img/<?= $Mhs["gambar"] ?>" alt="Foto Mahasiswa">

            <ul>
                <li>Nama : <?= $Mhs["Nama"] ?></li>
                <li>NIM : <?= $Mhs["NIM"] ?></li>
                <li>Email : <?= $Mhs["Email"] ?></li>
                <li>Jurusan : <?= $Mhs["Jurusan"] ?></li>
            </ul>
        </div>
        <?php endforeach; ?>

</body>
</html>