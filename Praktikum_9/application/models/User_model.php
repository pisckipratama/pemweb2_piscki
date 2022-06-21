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

	public function register($data)
	{
		$sql = 'INSERT INTO ' . $this->table . "(username, password, email, role, created_at, last_login) VALUES (?, MD5(?), ?, ?, now(), now())";
		$this->db->query($sql, $data);
	}
}
