<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$buku = query("SELECT * FROM buku");

// ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $buku = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Buku</title>
</head>

<body>
  <a href="logout.php">Logout</a>
  <h1>Daftar Buku</h1>

  <a href="tambah.php">Tambah Data Buku</a>
  <br><br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian..." autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>
  <br>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Judul Buku</th>
      <th>Gambar Buku</th>
      <th>Aksi</th>
    </tr>

    <?php if (empty($buku)) : ?>
      <tr>
        <td colspan="4">
          <p style="color: red; font-style: italic;">data buku tidak ditemukan!</p>
        </td>
      </tr>
    <?php endif; ?>

    <?php $i = 1;
    foreach ($buku as $b) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $b["judul_buku"]; ?></td>
        <td><img src="img/<?= $b["gambar_buku"]; ?>" alt="" width="60"></td>
        <td>
          <a href="detail.php?id=<?= $b['id_buku']; ?>">lihat detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>