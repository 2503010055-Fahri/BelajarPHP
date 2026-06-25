<?php 
    // Arraya adalah variebl yang dapat menampung banyak data
    // Element pada array boleh memiliki tipe data yang berbeda

    // cara membuat array
    // cara lama
    $nama = array("Fahri", "Samsul", "Ucup");

    // cara baru
    $hari = ["Senin", "Selasa", "Rabu"];
    $arr = [123, "teks", false];

    // Menampilkan array
    // var_dump, print_r
    var_dump($nama);
    echo "<br>";
    print_r($hari);
    echo "<br>";

    // Menampilkan 1 element pada array
    echo $nama[0];
    echo "<br>";
    echo $arr[0];

    echo "<br>";
    echo "<br>";

    // menambahkan element baru pada array
    var_dump($nama);
    $nama[] = "Denis";
    echo "<br>";
    var_dump($nama);
?>