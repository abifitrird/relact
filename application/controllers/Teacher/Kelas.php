<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
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

	public function getMateri($id)
	{
		$data['data'] = $this->KelasModel->getMateriByKelasId($id);
		$this->load->view('guru/list_materi', $data);
	}

	public function saveMateri($kelas_id)
	{
		$data = array(
			'kode' => random_string('alnum', 6),
			'kelas_id' => $kelas_id,
			'judul' => $this->input->post('judul'),
			'konten' => $this->input->post('konten'),
			'status' => 1
		);

		echo $this->KelasModel->saveMateri($data);
	}

	public function showMateri($kelas_id, $materi_id)
	{
		$data['data'] = $this->KelasModel->getMateriById($materi_id);
		$this->load->view('guru/materi', $data);
	}

	public function lihatSoal()
	{
		$this->load->view('guru/soal');
	}

	public function saveKelas()
	{
		$nama_kelas = $this->input->post('namaKelas');
		$mata_pelajaran = $this->input->post('mataPelajaran');
		$tahun_periode = $this->input->post('tahunPeriode');

		$data = array(
			'guru_id' => $this->session->userdata('user_id'),
			'mapel_id' => $mata_pelajaran,
			'code' => random_string('alnum', 6),
			'nama' => $nama_kelas,
			'periode' => $tahun_periode
		);

		if ($this->KelasModel->saveKelas($data)) {
			redirect(site_url('Guru/Kelas'));
		}
	}
}
