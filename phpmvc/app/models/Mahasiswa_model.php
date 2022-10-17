<?php

class Mahasiswa_model
{
  private $table = 'mahasiswa';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
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
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getMahasiswaById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }
}
