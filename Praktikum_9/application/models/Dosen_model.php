<?php

class Dosen_model extends CI_Model
{
	private $table = "dosen";

	public function getAll()
	{
		$query = $this->db->get($this->table);

		return array(
			'records' => $query->result(),
			'count' => count($query->result())
		);
	}

	public function findById($id)
	{
		$this->db->where("nidn", $id);
		$query = $this->db->get($this->table);

		return $query->row();
	}

	public function save($data)
	{
		$sql = "INSERT INTO " . $this->table . " (nidn, nama, gender, tmp_lahir, tgl_lahir, pendidikan_akhir, prodi_kode) VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->db->query($sql, $data);
	}

	public function update($data)
	{
		$sql = "UPDATE " . $this->table . " SET nidn=?, nama=?, gender=?, tmp_lahir=?, tgl_lahir=?, pendidikan_akhir=?, prodi_kode=? WHERE nidn=?";
		$this->db->query($sql, $data);
	}

	public function delete($id)
	{
		$sql = "DELETE FROM " . $this->table . " WHERE nidn = ?";
		$this->db->query($sql, array($id));
	}
}
