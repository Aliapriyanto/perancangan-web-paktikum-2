<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method Get</title>
</head>
<body>
    <form action="" method="get">
        Nama : <input type="text" name="nama" > <br>
        Kelas : <input type="text" name="kelas"> <br>
        <input type="submit" name="simpan" value="Simpan">

    </form>
</body>
</html>


<?php 
// proses get dalam 1 file form
if (isset($_GET['simpan'])) {
    $nama = $_GET['nama'];
    $kelas = $_GET['kelas'];

    echo "Saya $nama, kelas $kelas";
}



?>