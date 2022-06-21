<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

	public function index()
	{
		$data['judul'] = 'Register';


		$this->load->view('register', $data);
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

	public function post()
	{
		$this->load->model('user_model', 'user');

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$retype = $this->input->post('retype');
		$email = $this->input->post('email');

		if ($password != $retype) {
			redirect(base_url() . 'index.php/register');
		}

		$data_user[] = $username;
		$data_user[] = $password;
		$data_user[] = $email;
		$data_user[] = 'MAHASISWA';

		$this->user->register($data_user);

		redirect(base_url() . 'index.php', 'refresh');
	}
}
