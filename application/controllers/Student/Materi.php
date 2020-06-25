<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'controllers/Student/Base.php';

class Materi extends Base
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Siswa/MateriModel', "Materi");
		$this->load->model("KelasModel");
	}

	public function index($kode)
	{
		$data['data'] = $this->Materi->getMateriByKodeKelas($kode);
		$this->breadcrumb->push('Siswa', '/siswa');
		$this->breadcrumb->push('Kelas', '/siswa/kelas');
		$this->breadcrumb->push($data['data'][0]['nama_mapel'], '/siswa/kelas/' . $kode);
		$this->breadcrumb->push("Daftar Materi", '#');
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
		$uri_kelas = $this->uri->uri_to_assoc(2);
		$kelas = $this->KelasModel->getKelasByKode($uri_kelas['kelas']);
		$materi = $this->KelasModel->getMateriByKode($materi_kode);
		$this->breadcrumb->push('Siswa', '/siswa');
		$this->breadcrumb->push('Kelas', '/siswa/kelas');
		$this->breadcrumb->push($kelas['mapel'], '/siswa/kelas/' . $uri_kelas['kelas']);
		$this->breadcrumb->push($materi['judul'], '/siswa/kelas/' . $uri_kelas['kelas'] . '/materi/' . $uri_kelas['materi']);
		$this->breadcrumb->push("Daftar Submateri", '#');
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
		$uri_kelas = $this->uri->uri_to_assoc(2);
		$kelas = $this->KelasModel->getKelasByKode($uri_kelas['kelas']);
		$materi = $this->KelasModel->getMateriByKode($materi_kode);
		$this->breadcrumb->push('Siswa', '/siswa');
		$this->breadcrumb->push('Kelas', '/siswa/kelas');
		$this->breadcrumb->push($kelas['mapel'], '/siswa/kelas/' . $uri_kelas['kelas']);
		$this->breadcrumb->push($materi['judul'], '/siswa/kelas/' . $uri_kelas['kelas'] . '/materi/' . $uri_kelas['materi']);
		$this->breadcrumb->push($data['data']['judul'], '#');
		$this->load->view('siswa/materi', $data);
	}
}
