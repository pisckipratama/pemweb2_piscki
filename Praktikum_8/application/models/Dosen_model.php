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
		$this->db->where("kode", $id);
		$query = $this->db->get($this->table);

		return $query->row();
	}
}
