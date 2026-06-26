<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
    <style>
        .kotak {
            height: 30px;
            width: 30px;
            line-height: 30px;
            text-align: center;
            background-color: salmon;
            transition: 1s;
            margin: 3px;
            float: left;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<!-- data Array multidimensi -->
<?php $angka = [[1,2,3],[4,5,6],[7,8,9]] ?>
    
<!-- looping Array multidimensi -->
<?php foreach( $angka as $x ) : ?>
    <?php foreach( $x as $y ) : ?>
        <div class="kotak"><?= $y; ?></div>
    <?php endforeach; ?>
    <!-- supaya membuat gari baru -->
     <div class="clear"></div>
<?php endforeach; ?>

</body>
</html>