<?php

class Mahasiswa_model
{
  private $dbh; // database handler
  private $stmt;

  public function __construct()
  {
    // data source name
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
  // private $mhs = [
  //   [
  //     "nama" => "Farhan Alfauzi",
  //     "nrp" => "203040085",
  //     "email" => "203040085@mail.unpas.ac.id",
  //     "jurusan" => "Teknik informatika"
  //   ],
  //   [
  //     "nama" => "Hamzah Hadi Permana",
  //     "nrp" => "203040087",
  //     "email" => "203040087@mail.unpas.ac.id",
  //     "jurusan" => "Teknik informatika"
  //   ],
  //   [
  //     "nama" => "M. Rafliansyah",
  //     "nrp" => "203040105",
  //     "email" => "203040105@mail.unpas.ac.id",
  //     "jurusan" => "Teknik informatika"
  //   ]
  // ];

  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
