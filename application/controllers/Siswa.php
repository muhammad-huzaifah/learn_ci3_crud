<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Siswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('siswa_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['siswa'] = $this->siswa_model->getAll();
		$this->load->view('template/header');
		$this->load->view('siswa/index', $data);
		$this->load->view('template/footer');
	}

	public function create()
	{
		$this->load->view('template/header');
		$this->load->view('siswa/create');
		$this->load->view('template/footer');
	}

}
