<?php

class Absen_model
{
  private $table = 'absen';
  private $db;

   public function __construct()
    {
        $this->db = new Database;
    }
  public function getdata()
  {
    $id_karyawan = $_SESSION['user']['id']; 
    $jam_masuk = date('Y-m-d') . ' 00:00';
    $jam_keluar = date('Y-m-d') . ' 23:59';
    $this->db->query('SELECT * FROM ' .$this->table.' WHERE id_karyawan=:id_karyawan AND jam_masuk >= "' . $jam_masuk . '" AND jam_keluar <= "'. $jam_keluar . '"');
    $this->db->bind('id_karyawan',$id_karyawan);
    return $this->db->single();
  }
  public function insert()
  {
    $id_karyawan = $_SESSION['user']['id']; 
    $jam_masuk = date('Y-m-d H:i:s');
    $jam_keluar = date('Y-m-d H:i:s');
    $query = "INSERT INTO absen
          VALUES
          ('', :id_karyawan, :tanggal, :jam_masuk, :jam_keluar)";

    $this->db->query($query);
    $this->db->bind('id_karyawan', $id_karyawan);
    $this->db->bind('tanggal', date('Y-m-d'));
    $this->db->bind('jam_masuk', $jam_masuk);
    $this->db->bind('jam_keluar', $jam_keluar);
    $this->db->execute();
  }

  public function update($id)
  {
    $id_karyawan = $_SESSION['user']['id'];
    $jam_keluar = date('Y-m-d H:i:s');
    $query = "UPDATE absen SET
          id_karyawan = :id_karyawan,
          jam_keluar = :jam_keluar
        WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id_karyawan', $id_karyawan);
    $this->db->bind('jam_keluar', $jam_keluar);
    $this->db->bind('id', $id);
    $this->db->execute();
  }
}