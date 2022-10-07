<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query buku berdasarkan id
$b = query("SELECT * FROM buku WHERE id_buku = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Buku</title>
</head>

<body>
  <h3>Detail buku</h3>
  <ul>
    <li><img src="img/<?= $b['gambar_buku']; ?>" alt="" width="60"></li>
    <li>Judul Buku : <?= $b['judul_buku']; ?></li>
    <li>Penerbit Buku : <?= $b['penerbit_buku']; ?></li>
    <li>Tahun Penerbit : <?= $b['tahun_penerbit']; ?></li>
    <li><a href="ubah.php?id=<?= $b['id_buku']; ?>">ubah</a> | <a href="hapus.php?id=<?= $b['id_buku']; ?>" onclick="return confirm('apakah anda yakin?');">hapus</a></li>
    <li><a href="index.php">Kembali ke daftar buku</a></li>
  </ul>
</body>

</html>