<?php

require_once APPPATH . 'controllers/Teacher/Base.php';

class Materi extends Base
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('KelasModel');
	}
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
		redirect(site_url('guru/kelas/' . $kelas_kode));
	}

	public function ubahMateri($kelas_kode, $materi_kode)
	{
		$data = array(
			'kode' => $materi_kode,
			'judul' => $this->input->post('judul'),
			'konten' => $this->input->post('konten'),
		);

		if (!$this->KelasModel->ubahMateri($data)) {
			redirect($_SERVER['HTTP_REFERER']);
		}
		redirect(site_url('guru/kelas/' . $kelas_kode . '/materi/' . $materi_kode));
	}

	public function showMateri($kelas_id, $materi_kode)
	{
		// $data['data'] = $this->KelasModel->getMateriById($materi_id);
		$data['data'] = $this->KelasModel->getMateriByKode($materi_kode);
		$this->load->view('guru/materi', $data);
	}

	public function viewAddMateri()
	{
		$this->load->view('guru/form_materi', ['head' => 'Tambah Materi']);
	}

	public function viewEditMateri()
	{
		$this->load->view('guru/form_materi', ['head' => 'Ubah Materi']);
	}

	public function showMateriAPI($materi_kode)
	{
		$data = $this->KelasModel->getMateriByKode($materi_kode);
		echo json_encode($data);
	}

	public function deleteMateriAPI($materi_kode)
	{
		if ($this->KelasModel->deleteMateri($materi_kode)) {
			redirect(site_url('guru/kelas'));
		} else {
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	/**
	 * upload image to server from wysiwyg API
	 * 
	 * @param materi_kode
	 * @return url
	 */
	public function saveImageAPI()
	{
		$this->load->library('upload');
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = 2048;
		$config['encrypt_name'] = TRUE;

		$this->upload->initialize($config);

		if (!$this->upload->do_upload('file')) {
			echo json_encode(['status' => 'KO', 'error' => $this->upload->display_errors()]);
		} else {
			$data = $this->upload->data();
			$return = array(
				'path' => base_url("uploads/" . $data['file_name']),
				'name' => $data['file_name'],
				'status' => 'OK'
			);
			echo json_encode($return);
		}
	}
}
