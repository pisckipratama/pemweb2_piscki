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
			$this->session->set_userdata('USERNAME', $row->username);
			$this->session->set_userdata('ROLE', $row->role);
			redirect(base_url() . 'index.php/');
		} else {
			redirect(base_url() . 'index.php/login?status=f');
		}
	}

	public function destroy()
	{
		$this->session->unset_userdata('USERNAME');
		$this->session->unset_userdata('ROLE');

		redirect(base_url() . 'index.php/login');
	}
}
