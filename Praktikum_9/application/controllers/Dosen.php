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
		$this->load->model('dosen_model', 'dsn');

		$nidn = $this->input->post('nidn');
		$nama = $this->input->post('nama');
		$gender = $this->input->post('jk');
		$tmp_lahir = $this->input->post('tmp_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$pendidikan = $this->input->post('pendidikan');
		$prodi = $this->input->post('prodi');
		$nidnedit = $this->input->post('nidnedit');

		$data_dsn[] = $nidn;
		$data_dsn[] = $nama;
		$data_dsn[] = $gender;
		$data_dsn[] = $tmp_lahir;
		$data_dsn[] = $tgl_lahir;
		$data_dsn[] = $pendidikan;
		$data_dsn[] = $prodi;

		if (isset($nidnedit)) {
			$data_dsn[] = $nidnedit;
			$this->dsn->update($data_dsn);
		} else {
			$this->dsn->save($data_dsn);
		}

		redirect(base_url() . 'index.php/dosen/view?id=' . $nidn, 'refresh');
	}

	public function edit()
	{
		$id = $this->input->get('id');
		$this->load->model('dosen_model', 'dsn');

		$dsn_edit = $this->dsn->findById($id);

		$data['dsnedit'] = $dsn_edit;
		$data['judul'] = 'Update Dosen';
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('dosen/update', $data);
		$this->load->view('layout/footer');
	}

	public function delete()
	{
		$id = $this->input->get('id');
		$this->load->model('dosen_model', 'dsn');
		$this->dsn->delete($id);

		redirect(base_url() . 'index.php/dosen', 'refresh');
	}
}
