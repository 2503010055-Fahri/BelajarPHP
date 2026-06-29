<?php
require("function.php");
// konek database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// cek apakah tobol submit sudah di tekan?
if( isset($_POST["submit"]) ){

    // cek apakah data berhasil ditambah atau tidak
    if (tambah($_POST) > 0){
        echo "<script>
                alert('data berhasil ditambahkan')
                document.location.href = 'index.php'
            </script>";
    } else {
        echo "<script>
                alert('data gagal ditambahkan')
                documnet.location.href = 'index.php'
            </script>";;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="email" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="file" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Simpan</button>
            </li>
            <li>
                <a href="index.php">Kembali ke daftar mahasiswa</a>
            </li>
        </ul>
    </form>

</body>
</html>