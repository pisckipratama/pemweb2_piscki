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
	}

	public function update($data)
	{
		// code here
	}

	public function delete($id)
	{
		// code here
	}
}
