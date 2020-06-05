<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'controllers/Student/Base.php';

class Materi extends Base
{

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
	 * show Sub Materi by materi kode
	 * 
	 * @param materi_kode
	 * @return view
	 */
	public function showSubMateri($materi_kode)
	{
		$user_id = $this->session->userdata('user_id');
		$data['data'] = $this->Materi->getSubMateriByKodeMateri($materi_kode);
		$data['status_soal'] = $this->Materi->checkNilaiByUserId($user_id);
		$this->load->view('siswa/list_submateri', $data);
	}

	/**
	 * show materi by materi kode and sub_id
	 * 
	 * @param materi_kode
	 * @param sub_id
	 * @return view
	 */
	public function showMateri($materi_kode, $sub_id)
	{
		$data['data'] = $this->Materi->getMateriByKodeMateri($materi_kode, $sub_id);
		$this->load->view('siswa/materi', $data);
	}
}
