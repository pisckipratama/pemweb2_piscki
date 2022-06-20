<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		$data['judul'] = 'List Prodi';


		$this->load->view('login', $data);
	}

	public function auth()
	{
		$this->load->model('user_model', 'user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$row = $this->user->login($username, $password);

		if (isset($row)) {
			redirect(base_url() . 'index.php/mahasiswa/');
		} else {
			redirect(base_url() . 'index.php/login?status=f');
		}
	}
}
