<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Siswa/KelasModel', 'Kelas');
	}

	public function index()
	{
		$data = $this->Kelas->getUserKelasByUserId($this->session->userdata('user_id'));
		if (!$data) {
			$res['data'] = false;
		} else {
			$res['data'] = $data;
		}

		$this->load->view('siswa/kelas', $res);
	}

	/**
	 * post dari view untuk masuk kelas dengan kelas_kode
	 * 
	 * @return boolean and redirect
	 */
	public function masukKelas()
	{
		$kode_kelas = $this->input->post('kodeKelas');
		$check = $this->Kelas->masukKelasByKodeKelas($kode_kelas, $this->session->userdata('user_id'));
		if (!$check) {
			$this->session->set_flashdata('alert', 'Kode Kelas tidak ditemukan. Cek kembali kode yang diberikan guru.');
		} else {
			$this->session->set_flashdata('success', 'Berhasil masuk kelas.');
		}

		redirect($_SERVER['HTTP_REFERER']);
	}

    public function listMateri()
	{
		$this->load->view('siswa/list_materi');
    }
    
    public function lihatCapaian()
	{
		$this->load->view('siswa/capaian');
	}
}
