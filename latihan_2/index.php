<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman 1</title>
</head>
<style>
   nav {
            background-color: #333; /* Warna latar belakang navbar */
            padding: 10px; /* Memberi jarak dalam pada navbar */
            text-align: center; /* Teks berada di tengah */
        }

        /* Styling untuk link dalam navbar */
        nav a {
            color: white; /* Warna teks link */
            text-decoration: none; /* Menghilangkan garis bawah pada link */
            margin: 0 15px; /* Memberi jarak horizontal antara link */
            padding: 10px 15px; /* Menambah padding pada link */
            border-radius: 5px; /* Membuat sudut link menjadi bulat */
            transition: background-color 0.3s; /* Animasi ketika hover */
        }

        /* Efek hover pada link */
        nav a:hover {
            background-color: #555; /* Warna saat link di-hover */
        }
</style>
<body >
    
    <nav>
        <a href="methodpost.php">Contoh dari Latihan Method Post</a>
        <a href="methodget.php">Contoh dari Latihan Method Get</a>
        <a href="login.php">Contoh dari Latihan Login</a>
        <a href="bandingNilai.php">Contoh dari Latihan Banding Nilai</a>
        <a href="peminjaman.php">Peminjaman</a>
    </nav>
</body>
</html>