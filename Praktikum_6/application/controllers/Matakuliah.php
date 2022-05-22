<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Matakuliah extends CI_Controller
{

	public function index()
	{
		$this->load->model('matakuliah_model', 'mk1');
		$this->mk1->id = 1;
		$this->mk1->kode = '110';
		$this->mk1->nama = 'Pemrograman Web';
		$this->mk1->sks = '3';

		$this->load->model('matakuliah_model', 'mk2');
		$this->mk2->id = 2;
		$this->mk2->kode = '111';
		$this->mk2->nama = 'Basis Data';
		$this->mk2->sks = '4';

		$this->load->model('matakuliah_model', 'mk3');
		$this->mk3->id = 3;
		$this->mk3->kode = '112';
		$this->mk3->nama = 'Bahasa Inggris';
		$this->mk3->sks = '2';

		$list_mk = [$this->mk1, $this->mk2, $this->mk3];
		$data['list_mk'] = $list_mk;

		$this->load->view('header');
		$this->load->view('matakuliah/index', $data);
		$this->load->view('footer');
	}
}
