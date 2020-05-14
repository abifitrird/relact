<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Siswa/MateriModel', "Materi");
	}

	public function index($kode)
	{
		$data['data'] = $this->Materi->getMateriByKodeKelas($kode);
		$this->load->view('siswa/list_materi', $data);
		
	}
}
