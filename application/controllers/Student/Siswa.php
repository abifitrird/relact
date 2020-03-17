<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url());
		}
	}
	public function index()
	{
		$this->load->view('siswa/beranda');
	}
	public function profil()
	{
		$this->load->view('siswa/profil');
	}
}
