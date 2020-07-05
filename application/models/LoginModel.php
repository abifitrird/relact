<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginModel extends CI_Model
{

	public function index()
	{
		$this->load->view('login');
	}
	function cek_login($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	public function cek_email($email)
	{
		return $this->db->where('email', $email)->get('users')->row_array();
	}

	public function update_token($user_id)
	{
		$this->db->where('id', $user_id)->set('token_reset', md5($user_id . date_timestamp_get(date_create())))->update('users');
	}

	public function cek_token($token)
	{
		return $this->db->where('token_reset', $token)->get('users')->row_array();
	}

	public function ubah_password($token, $password)
	{
		$this->db->where('token_reset', $token)->set('password', $password)->update('users');
	}
}
