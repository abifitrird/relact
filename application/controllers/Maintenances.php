<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maintenances extends CI_Controller {

	public function index()
	{
		$this->load->view('kotak_saran');
	}
}
