<?php

class Mahasiswa_model extends CI_Model
{
	private $table = "mahasiswa";

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
		$this->db->where("nim", $id);
		$query = $this->db->get($this->table);

		return $query->row();
	}
}
