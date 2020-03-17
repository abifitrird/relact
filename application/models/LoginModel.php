<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

	public function index()
	{
		$this->load->view('login');
	}
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
}