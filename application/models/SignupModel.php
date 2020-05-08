<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignupModel extends CI_Model {

	public function index()
	{
		$this->load->view('signup');
	}
	public function registrasiUser($data)
	{
		$email = $data['email'];
        $data['password'] = MD5($data['password']);
        $cek_email = $this->db->where('email', $email)->limit(1)->get('users')->num_rows();
        if($cek_email == 0){
            $cek_username = $this->db->where('username', $data['username'])->limit(1)->get('users')->num_rows();
            if ($cek_username == 0) {
                $this->db->insert('users',$data);
                return true;
            }
        }

        return false;
	}
}
