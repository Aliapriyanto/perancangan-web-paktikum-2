<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Barang</title>
</head>
<body>
    <h3>Peminjaman Barang</h3>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama Peminjam</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Kelas Peminjam</td>
                <td>:</td>
                <td><input type="text" name="kelas" required></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><select name="barang" required>
                    <option value="">--Pilih Barang--</option>
                    <option value="Meja">Meja</option>
                    <option value="Komputer">Komputer</option>
                    <option value="Penggaris">Penggaris</option>
                </select></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td><input type="number" name="jumlah" ></td>
            </tr>
            <tr>
                <td>Tanggal Pinjam</td>
                <td>:</td>
                <td><input type="date" name="tanggal" ></td>
            </tr>
            <tr>
                <td>Keperluan</td>
                <td>:</td>
                <td><textarea name="keperluan" ></textarea></td>
            </tr>
            <tr>
                <td colspan="3"><button type="submit" name="pinjam" width="100">Pinjam</button></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php 

if (isset($_POST['pinjam'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $barang = $_POST['barang'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];
    $keperluan = $_POST['keperluan'];

    echo "Nama : $nama <br> Kelas : $kelas <br> Meminjam : $barang <br> Jumlah : $jumlah <br> Tanggal Pinjam : $tanggal <br> Keperluan : $keperluan";
}

?>