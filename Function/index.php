<?php 
    // Date untuk menampilkan tanggal dengan format tertentu
    echo date("l, d-M-Y");

    echo "<br>";

    // Time
    // UNIX Timestamp
    // detik yang sudah berlalu sejak 1 januari 1970
    echo date("d-M-Y", time() + (60*60*24*100));

    echo "<br>";

    // mktime
    // membuat detik sendiri
    // jam, menit, detik, bulan, tanggal, tahun
    echo date("l, d-M-Y", mktime(0,0,0,9,8,2006));

    echo "<br>";

    // strtotime
    echo date("l", strtotime("08 Sep 2006"));
?>