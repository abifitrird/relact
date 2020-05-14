<?php

require_once APPPATH . 'controllers/Teacher/Base.php';

class Materi extends Base
{
    public function getMateri($kode)
	{
		$data['data'] = $this->KelasModel->getMateriByKodeKelas($kode);
		$this->load->view('guru/list_materi', $data);
	}

	public function saveMateri($kelas_kode)
	{
		$data = array(
			'kode' => random_string('alnum', 6),
			'kelas_kode' => $kelas_kode,
			'judul' => $this->input->post('judul'),
			'konten' => $this->input->post('konten'),
			'status' => 1
		);

		if (!$this->KelasModel->saveMateri($data)) {
			redirect($_SERVER['HTTP_REFERER']);
		}
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function ubahMateri($materi_kode)
	{
		$data = array(
			'kode' => $materi_kode,
			'judul' => $this->input->post('judul'),
			'konten' => $this->input->post('konten'),
		);

		if (!$this->KelasModel->ubahMateri($data)) {
			redirect($_SERVER['HTTP_REFERER']);
		}
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function showMateri($kelas_id, $materi_kode)
	{
		// $data['data'] = $this->KelasModel->getMateriById($materi_id);
		$data['data'] = $this->KelasModel->getMateriByKode($materi_kode);
		$this->load->view('guru/materi', $data);
    }
    
    // TODO: hapus Materi
}