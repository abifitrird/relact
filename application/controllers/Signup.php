<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('SignupModel');
	}

	public function index()
	{
		$this->load->view('signup');
	}
	public function daftar()
	{
		$this->form_validation->set_rules('inputUsername', 'Username', 'trim|required');
		$this->form_validation->set_rules('radioJabatan', 'Jabatan', 'trim|required');
		$this->form_validation->set_rules('inputEmail', 'Email', 'trim|required');
		$this->form_validation->set_rules('inputPassword', 'Password', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$data['username'] = strtolower($this->input->post('inputUsername'));
			$data['role_id'] = $this->input->post('radioJabatan');
			$data['email'] = strtolower($this->input->post('inputEmail'));
			$data['password'] = $this->input->post('inputPassword');
			if (!$this->SignupModel->registrasiUser($data)) {
				$this->session->set_flashdata('msg', 'Username/Email sudah terdaftar');
				redirect($_SERVER['HTTP_REFERER']);
			}

			$this->session->set_flashdata('msg', 'Silahkan Login');
			redirect(site_url());
		}
	}
}
