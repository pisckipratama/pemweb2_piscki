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

	public function view()
	{
		$nim = $this->input->get('id');
		$this->load->model('mahasiswa_model', 'mhs');
		$data['mhs'] = $this->mhs->findById($nim);
		$data['judul'] = 'View Mahasiswa';

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('mahasiswa/view', $data);
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
		$this->load->model('mahasiswa_model', 'mhs');

		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$gender = $this->input->post('jk');
		$tmp_lahir = $this->input->post('tmp_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$prodi = $this->input->post('prodi');
		$ipk = $this->input->post('ipk');
		$idedit = $this->input->post('idedit'); //hidden field

		$data_mhs[] = $nim;
		$data_mhs[] = $nama;
		$data_mhs[] = $gender;
		$data_mhs[] = $tmp_lahir;
		$data_mhs[] = $tgl_lahir;
		$data_mhs[] = $ipk;
		$data_mhs[] = $prodi;

		if (isset($idedit)) {
			$data_mhs[] = $idedit;
			$this->mhs->update($data_mhs);
		} else {
			$this->mhs->save($data_mhs);
		}


		redirect(base_url() . 'index.php/mahasiswa/view?id=' . $nim, 'refresh');
	}

	public function edit()
	{
		$id = $this->input->get('id');
		$this->load->model('mahasiswa_model', 'mhs');

		$mhs_edit = $this->mhs->findById($id);

		$data['mhsedit'] = $mhs_edit;
		$data['judul'] = 'Update Mahasiswa';
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('mahasiswa/update', $data);
		$this->load->view('layout/footer');
	}

	public function delete()
	{
		$id = $this->input->get('id');
		$this->load->model('mahasiswa_model', 'mhs');
		$this->mhs->delete($id);

		redirect(base_url() . 'index.php/mahasiswa', 'refresh');
	}
}
