<?php
// dipakai function
require 'function.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["tambah"])){
    //cek apakah data berhasil ditambah atau tidak
    if (tambah($_POST) > 0){
        echo"
        <script>
        alert('data telah berhasil ditambah!');
        document.localtion.href = 'index.php';
        </script>
        ";
    } else {
        echo"
        <script>
        alert('data telah gagal ditambah!');
        document.localtion.href = 'index.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h1>Tambah Data Siswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nim">NIM:</label>
                <input type="text" name="nim" id="nim" required>                
            </li>
            <li>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="Jurusan">Jurusan:</label>
                <input type="text" name="Jurusan" id="Jurusan" required>
            </li>
            <li>
                <label for="gambar">Gambar:</label>
                <input type="file" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="tambah">Tambah data</button>
            </li>
        </ul>
    </form>
</body>
</html>