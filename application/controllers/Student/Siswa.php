<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'controllers/Student/Base.php';

class Siswa extends Base
{

	public function index()
	{
		redirect(site_url('siswa/kelas'));
		// $this->load->view('siswa/beranda');
	}
}
