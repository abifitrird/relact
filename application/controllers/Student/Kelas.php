<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	public function index()
	{
		$this->load->view('siswa/kelas');
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
