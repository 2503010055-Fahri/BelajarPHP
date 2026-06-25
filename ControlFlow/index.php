<?php 
// Pengulangan
// 1. for
// 2. while
// 3. do...while
// 4. foreach : pengulangan khusus array


// for start
for( $i = 0; $i < 5; $i++ ){
    echo "Hello World <br>";
}
// for end

// while start (Jika kondisi awal false, blok kode tidak akan dijalankan sama sekali.)
$j = 0;
while( $j < 5 ){
    echo "Semangat belajar PHP nya <br>";
    $j++;
}
// while end

// do while start (Blok kode pasti dijalankan minimal satu kali, meskipun kondisi awal false.)
$a = 10;
do {
    echo "Jangan lupa istirahat <br>";
} while( $a < 5 );
// do while end
?>

<!-- Latian -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: blue;
        }

        .warna-kolom {
            background-color: green;
        }
    </style>
 </head>
 <body>
    <!-- cara pertama -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php 
            for( $baris = 1; $baris <= 5; $baris++ ){
                if( $baris % 2 == 1){
                    echo "<tr class='warna-baris'>";
                } else if( $baris % 2 == 0 ) {
                    echo "<tr class='warna-kolom'>";
                } else {
                    echo "</tr>";
                }

                for( $kolom = 1; $kolom <= 5; $kolom++ ){
                    echo "<td>$baris, $kolom</td>";
                    }
                    echo "</tr>";
            }
            echo "<br>";
        ?>
    </table>

    <br>

    <!-- cara kedua -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for( $colom = 1; $colom <= 5; $colom++ ){ ?>
        <tr>
            <?php if( $colom % 2 == 0 ){ ?>
                <tr class="warna-baris">
            <?php } else if( $colom % 2 == 1 ){ ?>
                <tr class="warna-kolom">
            <?php } else { ?>
            <?php } ?>

                <?php for( $line = 1; $line <= 5; $line++ ){ ?>
                    <td><?php echo "$colom, $line" ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>

 </body>
 </html>