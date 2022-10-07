<?php
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'prakweb_2022_b_203040085');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $judul_buku = htmlspecialchars($data['judul_buku']);
  $penerbit_buku = htmlspecialchars($data['penerbit_buku']);
  $tahun_penerbit = htmlspecialchars($data['tahun_penerbit']);
  $gambar_buku = htmlspecialchars($data['gambar_buku']);

  $query = "INSERT INTO
              buku
            VALUES
            (null, '$judul_buku', '$penerbit_buku', '$tahun_penerbit', '$gambar_buku');
           ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM buku WHERE id_buku = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id_buku = $data['id'];
  $judul_buku = htmlspecialchars($data['judul_buku']);
  $penerbit_buku = htmlspecialchars($data['penerbit_buku']);
  $tahun_penerbit = htmlspecialchars($data['tahun_penerbit']);
  $gambar_buku = htmlspecialchars($data['gambar_buku']);

  $query = "UPDATE buku SET
              judul_buku = '$judul_buku',
              penerbit_buku = '$penerbit_buku',
              tahun_penerbit = '$tahun_penerbit',
              gambar_buku = '$gambar_buku'
            WHERE id_buku = '$id_buku'
           ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM buku
            WHERE judul_buku LIKE '%$keyword%' OR
            penerbit_buku LIKE '%$keyword%'";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  if ($username == 'admin' && $password == '12345') {
    // set session

    header("Location: index.php");
    exit;
  } else {
    return [
      'error' => true,
      'pesan' => 'Username / Password Salah!'
    ];
  }
}
