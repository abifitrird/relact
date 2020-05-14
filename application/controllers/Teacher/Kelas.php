<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'controllers/Teacher/Base.php';

class Kelas extends Base
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('KelasModel');
	}

	public function index()
	{
		$data['data'] = $this->KelasModel->getKelas();
		$this->load->view('guru/kelas', $data);
	}

	public function saveKelas()
	{
		$nama_kelas = $this->input->post('namaKelas');
		$mata_pelajaran = $this->input->post('mataPelajaran');
		$tahun_periode = $this->input->post('tahunPeriode');

		$data = array(
			'guru_id' => $this->getUserId(),
			'mapel_id' => $mata_pelajaran,
			'code' => random_string('alnum', 6),
			'nama' => $nama_kelas,
			'periode' => $tahun_periode
		);

		if ($this->KelasModel->saveKelas($data)) {
			// redirect(site_url('Guru/Kelas'));
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	// TODO: add edit Kelas and hapus Kelas
}
