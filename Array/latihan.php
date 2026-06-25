<?php
// pengulangan pada array
// for / foreach
$anka = [23, 45, 63, 34, 78, 43, 63, 90];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latiha Array</title>
    <style>
        .kotak {
            height: 50px;
            width: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }

        ;
    </style>
</head>

<body>
    <!-- for -->
    <!-- count untuk data array bertambah  -->
    <?php for ($i = 0; $i < count($anka); $i++) { ?>
        <div class="kotak"><?php echo $anka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>
    <!-- foreach -->
    <!-- digunakan untuk mengambil dan menampilkan setiap data yang ada di dalam array satu per satu tanpa harus menghitung jumlah data atau membuat indeks seperti pada for. -->
    <?php foreach ($anka as $a) { ?>
        <div class="kotak"><?php echo ($a); ?></div>
    <?php } ?>

    <div class="clear"></div>
    <!-- cara penulisan lebih ringkas -->
     <?php foreach( $anka as $a ) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>

</body>

</html>