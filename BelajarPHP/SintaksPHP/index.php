<?php
    // Sintaks dasar PHP

    /*
    Standar Output
    1. echo
    2. print
    3. print_r (untuk array)
    4. var_dump (untuk melihat isi variabel) -> biasa untuk debuging
    */

    echo("Fahri Rahma F <br>");
    print("Tasikmalaya <br>");
    print_r("Singaparna <br>");
    var_dump("Jawa Barat <br> <br>");

    /*
    Penulisan sintaks PHP
    1. PHP didalam HTML
    2. HTML didalam PHP
    */

    // Variabel dan TipeData
    // 1. Variabel
    // tidak boleh diawali angka, tapi boleh mengandung angka
    $nama = "Fahri";

    // Operator aritmatika
    // + - / * %
    $x = 10;
    $y = 20;
    echo $x * $y;
    echo "<br>";
    // Penggabung string / concat
    // .
    $namaDepan = "Fahri";
    $namaBelakang = "Rahmat F";
    echo $namaDepan . " " . $namaBelakang;

    echo "<br>";
    // Operator Assignment
    // =, +=, -=, *=, /=, %/, .=
    $z = 2;
    $z += 3;
    echo $z;

    echo "<br>";
    // Perbandingan
    // <, >, <=, >=, ==, !=
    var_dump(1 <= 5);

    echo "<br>";

    // Identitas
    // ===, !==
    var_dump(1 === "1");

    echo "<br>";

    // Operator Logika
    // &&, ||, !

    $a = 30;
    var_dump($a < 20 || $a % 2 == 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
    <p> <?php echo "Ini adalah paragraf"; ?></p>

    <?php
        echo "<h2> Semangat belajar PHP </h2>";
    ?>

</body>
</html>