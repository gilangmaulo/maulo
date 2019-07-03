<?php

class Izin_model {
	private $table = 'izin';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllIzin()
	{
		$this->db->query("SELECT di.*, dk.id as id_karyawan, dk.nama FROM izin di INNER JOIN karyawan dk ON dk.id = di.id_karyawan");
		return $this->db->resultSet();

	}

	public function getIzinById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function tambahDataIzin($data)
	{
		$query = "INSERT INTO izin
					VALUES
					('', :id_karyawan, :tanggal, :tipe_izin, :lama_izin)";

		$this->db->query($query);
		$this->db->bind('id_karyawan', $data['id_karyawan']);
		$this->db->bind('tanggal', $data['tanggal']);
		$this->db->bind('tipe_izin', $data['tipe_izin']);
		$this->db->bind('lama_izin', $data['lama_izin']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function hapusDataIzin($id)
	{
		$query = "DELETE FROM izin WHERE id = :id";
		$this->db->query($query);
		$this->db->bind('id', $id);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function editDataIzin($data)
	{
			

		$this->db->query($query);
		$this->db->bind('id_karyawan', $data['id_karyawan']);
		$this->db->bind('tanggal', $data['tanggal']);
		$this->db->bind('tipe_izin', $data['tipe_izin']);
		$this->db->bind('lama_izin', $data['lama_izin']);
		$this->db->bind('id', $data['id']);

		$this->db->execute();

		return $this->db->rowCount();
	}
}
