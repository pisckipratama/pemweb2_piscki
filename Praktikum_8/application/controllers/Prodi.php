<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{

	public function index()
	{
		$this->load->model('prodi_model', 'prodi');
		$data['list_prodi'] = $this->prodi->getAll();
		$data['judul'] = 'List Prodi';

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('prodi/index', $data);
		$this->load->view('layout/footer');
	}
}
