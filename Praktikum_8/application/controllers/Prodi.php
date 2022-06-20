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

	public function view()
	{
		$kode = $this->input->get('id');
		$this->load->model('prodi_model', 'prodi');
		$data['prodi'] = $this->prodi->findById($kode);
		$data['judul'] = 'View Prodi';

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('prodi/view', $data);
		$this->load->view('layout/footer');
	}

	public function create()
	{
		$data['judul'] = 'Form Kelola Prodi';
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('prodi/create', $data);
		$this->load->view('layout/footer');
	}

	public function save()
	{
		$this->load->model('prodi_model', 'prodi');

		$kode = $this->input->post('kode');
		$prodi = $this->input->post('prodi');
		$kaprodi = $this->input->post('kaprodi');
		$kodeedit = $this->input->post('kodeedit'); //hidden field

		$data_prodi[] = $kode;
		$data_prodi[] = $prodi;
		$data_prodi[] = $kaprodi;

		if (isset($kodeedit)) {
			$data_prodi[] = $kodeedit;
			$this->prodi->update($data_prodi);
		} else {
			$this->prodi->save($data_prodi);
		}

		redirect(base_url() . 'index.php/prodi/view?id=' . $kode, 'refresh');
	}

	public function edit()
	{
		$id = $this->input->get('id');
		$this->load->model('prodi_model', 'prodi');

		$prodi_edit = $this->prodi->findById($id);

		$data['prodiedit'] = $prodi_edit;
		$data['judul'] = 'Update Prodi';
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('prodi/update', $data);
		$this->load->view('layout/footer');
	}

	public function delete()
	{
		$id = $this->input->get('id');
		$this->load->model('prodi_model', 'prodi');
		$this->prodi->delete($id);

		redirect(base_url() . 'index.php/prodi', 'refresh');
	}
}
