<?php

class User_model extends CI_Model
{
	private $table = "user";

	public function login($uname, $pass)
	{
		$sql = "SELECT * FROM " . $this->table . " WHERE username=? AND password=MD5(?)";

		$data = [$uname, $pass];
		$query = $this->db->query($sql, $data);

		return $query->row();
	}

	public function getAll()
	{
		$query = $this->db->get($this->table);

		return $query->result();
	}

	public function findById($id)
	{
		$this->db->where("nim", $id);
		$query = $this->db->get($this->table);

		return $query->row();
	}

	public function save($data)
	{
		$sql = "INSERT INTO " . $this->table . " (nim, nama, gender, tmp_lahir, tgl_lahir, ipk, prodi_kode) VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->db->query($sql, $data);
	}

	public function update($data)
	{
		$sql = "UPDATE " . $this->table . " SET nim=?, nama=?, gender=?, tmp_lahir=?, tgl_lahir=?, ipk=?, prodi_kode=? WHERE nim=?";
		$this->db->query($sql, $data);
	}

	public function delete($id)
	{
		$sql = "DELETE FROM " . $this->table . " WHERE nim = ?";
		$this->db->query($sql, array($id));
	}
}
