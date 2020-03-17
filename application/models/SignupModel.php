<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignupModel extends CI_Model {

	public function index()
	{
		$this->load->view('signup');
	}
	public function registrasiUser($data)
	{
		$username = $data['email'];
        $data['password'] = MD5($data['password']);
        $query = $this->db->query("SELECT * FROM users WHERE email = '$username' LIMIT 1");
        if($query->num_rows() == 0){
            $this->db->insert('users',$data);
            if ($this->db->affected_rows() > 0) {
                return true;
            }
        }
        else{
            return false;
        }
	}
}
