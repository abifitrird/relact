<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'controllers/Student/Base.php';

class Siswa extends Base {
	
	public function index()
	{
		$this->load->view('siswa/beranda');
	}
}
