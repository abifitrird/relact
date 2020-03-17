<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CapaianSiswa extends CI_Controller {

	public function index()
	{
		$this->load->view('guru/list_kelas');
	}
	public function logSiswa()
	{
		$this->load->view('guru/statistik');
	}
}
