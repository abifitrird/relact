<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('LoginModel');
	}
	public function index()
	{
		if ($this->session->userdata('status') == 'login') {
			if ($this->session->userdata('role') == 'guru') {
				redirect(base_url('Teacher/Guru'));
			} else if ($this->session->userdata('role') == 'siswa') {
				redirect(base_url('Student/Siswa'));
			}
		}
		$this->load->view('login');
	}

	function aksi_login()
	{
		$username = $this->input->post('inputUsername');
		$password = $this->input->post('inputPassword');
		$where = array(
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->LoginModel->cek_login("users", $where)->num_rows();
		if ($cek > 0) {
			$cek_role = $this->LoginModel->cek_login("users", $where)->row_array();
			// cek guru
			if ($cek_role['role_id'] == 1) {
				$role = "guru";
			} else if ($cek_role['role_id'] == 2) {
				$role = "siswa";
			}

			$data_session = array(
				'nama' => $username,
				'status' => "login",
				'role' => $role,
				'user_id' => $cek_role['id']
			);

			$this->session->set_userdata($data_session);

			if ($role == "guru") {
				redirect(base_url("Teacher/Guru"));
			} else if ($role == "siswa") {
				redirect(base_url("Student/Siswa"));
			}
		} else {
			echo "Username atau password salah !";
		}
	}
	public function Logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
