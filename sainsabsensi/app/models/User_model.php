<?php

class User_model{
	private $table = 'user';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	
	public function getAllUser()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}
	public function getUserById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function tambahDataUser($data)
	{
		$query = "INSERT INTO user
					VALUES
					('', :username, :password, :level)";
		$this->db->query($query);
		$this->db->bind('username', $data['username']);
		$this->db->bind('password', $data['password']);
		$this->db->bind('level', $data['level']);
		

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function hapusDataUser($id)
	{
		$query = "DELETE FROM user WHERE id = :id";
		$this->db->query($query);
		$this->db->bind('id', $id);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function editDataUser($data)
	{
		$query = "UPDATE user SET
					username = :username,
					password = :password,
					level = :level,
				WHERE id = :id";

		$this->db->query($query);
		$this->db->bind('username', $data['username']);
		$this->db->bind('password', $data['password']);
		$this->db->bind('level', $data['level']);
		$this->db->bind('id', $data['id']);

		$this->db->execute();

		return $this->db->rowCount();
	}
}