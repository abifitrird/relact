<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('SignupModel');
	}

	public function index()
	{
		$this->load->view('signup');
	}
	public function daftar()
	{
        if(!$_POST){
            $this->load->view('signup');
        }
        else{
			$this->form_validation->set_rules('inputUsername', 'Username', 'trim|required');
			$this->form_validation->set_rules('radioJabatan', 'Jabatan', 'trim|required');
			$this->form_validation->set_rules('inputEmail', 'Email', 'trim|required');
            $this->form_validation->set_rules('inputPassword', 'Password', 'trim|required');
            if($this->form_validation->run() == TRUE){
                $data['username'] = $this->input->post('inputUsername');
				$data['role_id'] = $this->input->post('radioJabatan');
				$data['email'] = $this->input->post('inputEmail');
				$data['password'] = $this->input->post('inputPassword');
                $cek_data = $this->SignupModel->registrasiUser($data);
                if($cek_data){
                    echo $this->session->set_flashdata('msg','Email sudah terdaftar');
                    redirect(base_url('Signup/daftar'));
                }
                else{
                    echo $this->session->set_flashdata('msg','Silahkan Login');
                    redirect(base_url());
                }
			}
		}
    }
}
