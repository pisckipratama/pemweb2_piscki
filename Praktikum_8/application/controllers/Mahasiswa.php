<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

	public function index()
	{
		$this->load->model('mahasiswa_model', 'mhs');

		$data['list_mhs'] = $this->mhs->getAll();
		$data['judul'] = 'Data Mahasiswa';

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('layout/footer');
	}

	public function create()
	{
		$data['judul'] = 'Form Kelola Mahasiswa';
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('mahasiswa/create', $data);
		$this->load->view('layout/footer');
	}

	public function save()
	{
		$this->load->model('mahasiswa_model', 'mhs1');

		$this->mhs1->nim = $this->input->post('nim');
		$this->mhs1->nama = $this->input->post('nama');
		$this->mhs1->gender = $this->input->post('jk');
		$this->mhs1->tmp_lahir = $this->input->post('tmp_lahir');
		$this->mhs1->tgl_lahir = $this->input->post('tgl_lahir');
		$this->mhs1->prodi = $this->input->post('prodi');
		$this->mhs1->ipk = $this->input->post('ipk');

		// die(print_r($this->mhs1));
		$data['mhs1'] = $this->mhs1;
		$data['judul'] = 'View Mahasiswa';
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('mahasiswa/view', $data);
		$this->load->view('layout/footer');
	}
}
