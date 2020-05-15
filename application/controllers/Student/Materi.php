<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'controllers/Student/Base.php';

class Materi extends Base {

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

	/**
	 * show Materi by materi kode
	 * 
	 * @param materi_kode
	 * @return view
	 */
	public function showMateri($materi_kode)
	{
		$data['data'] = $this->Materi->getMateriByKodeMateri($materi_kode);
		$this->load->view('siswa/materi', $data);
	}
}
