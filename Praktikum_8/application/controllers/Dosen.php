<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{

	public function index()
	{
		$this->load->model('dosen_model', 'dsn');

		$data['list_dsn'] = $this->dsn->getAll();
		$data['judul'] = 'List Dosen';

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('dosen/index', $data);
		$this->load->view('layout/footer');
	}

	public function view()
	{
		$this->load->model('dosen_model', 'dosen');

		$nidn = $this->input->get('id');
		$data['dsn'] = $this->dosen->findById($nidn);
		$data['judul'] = 'View Dosen';

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('dosen/view', $data);
		$this->load->view('layout/footer');
	}

	public function create()
	{
		$data['judul'] = 'Add Dosen';
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('dosen/create', $data);
		$this->load->view('layout/footer');
	}

	public function save()
	{
		$this->load->model('dosen_model', 'dsn1');

		$this->dsn1->nidn = $this->input->post('nidn');
		$this->dsn1->nama = $this->input->post('nama');
		$this->dsn1->gender = $this->input->post('jk');
		$this->dsn1->tmp_lahir = $this->input->post('tmp_lahir');
		$this->dsn1->tgl_lahir = $this->input->post('tgl_lahir');
		$this->dsn1->pendidikan = $this->input->post('pendidikan');

		$data['dsn1'] = $this->dsn1;
		$data['judul'] = 'View Dosen';
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('dosen/view', $data);
		$this->load->view('layout/footer');
	}
}
