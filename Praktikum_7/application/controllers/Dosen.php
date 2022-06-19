<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{

	public function index()
	{
		$this->load->model('dosen_model', 'dsn1');
		$this->dsn1->id = 1;
		$this->dsn1->nidn = '11001';
		$this->dsn1->nama = 'Piscki Pratama';
		$this->dsn1->pendidikan = 'S2';

		$this->load->model('dosen_model', 'dsn2');
		$this->dsn2->id = 2;
		$this->dsn2->nidn = '11002';
		$this->dsn2->nama = 'Fenti Rahma';
		$this->dsn2->pendidikan = 'S2';

		$list_dsn = [$this->dsn1, $this->dsn2];
		$data['list_dsn'] = $list_dsn;
		$data['judul'] = 'List Dosen';

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('dosen/index', $data);
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
