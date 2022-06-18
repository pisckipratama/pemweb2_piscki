<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

	public function index()
	{
		$this->load->model('mahasiswa_model', 'mhs1');
		$this->mhs1->id = 1;
		$this->mhs1->nim = '010001';
		$this->mhs1->nama = 'Rama Fikri';
		$this->mhs1->gender = 'L';
		$this->mhs1->ipk = 3.85;

		$this->load->model('mahasiswa_model', 'mhs2');
		$this->mhs2->id = 2;
		$this->mhs2->nim = '010002';
		$this->mhs2->nama = 'Muhammad Fajar';
		$this->mhs2->gender = 'L';
		$this->mhs2->ipk = 3.5;

		$this->load->model('mahasiswa_model', 'mhs3');
		$this->mhs3->id = 3;
		$this->mhs3->nim = '010003';
		$this->mhs3->nama = 'Aliyah Siti';
		$this->mhs3->gender = 'P';
		$this->mhs3->ipk = 3.25;

		$list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
		$data['list_mhs'] = $list_mhs;

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
