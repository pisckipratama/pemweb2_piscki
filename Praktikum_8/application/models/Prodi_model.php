<?php

class Prodi_model extends CI_Model
{
	private $table = 'prodi';

	public function getAll()
	{
		$query = $this->db->get($this->table);

		return array(
			'records' => $query->result(),
			'count' => count($query->result()),
		);
	}

	public function findById($id)
	{
		$this->db->where("kode", $id);
		$query = $this->db->get($this->table);

		return $query->row();
	}

	public function save($data)
	{
		// code here
		$sql = "INSERT INTO " . $this->table . " (kode, nama, kaprodi) VALUES (?, ?, ?)";
		$this->db->query($sql, $data);
	}

	public function update($data)
	{
		// code here
		$sql = "UPDATE " . $this->table . " SET kode=?, nama=?, kaprodi=? WHERE kode=?";
		$this->db->query($sql, $data);
	}

	public function delete($id)
	{
		// code here
		$sql = "DELETE FROM " . $this->table . " WHERE kode = ?";
		$this->db->query($sql, array($id));
	}
}
