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
		$this->load->view('login');
	}

	function aksi_login()
	{
		$username = strtolower($this->input->post('inputUsername'));
		$password = $this->input->post('inputPassword');
		$where = array(
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->LoginModel->cek_login("users", $where)->num_rows();
		if ($cek > 0) {
			$cek_role = $this->LoginModel->cek_login("users", $where)->row_array();
			if (!$cek_role['is_email_confirmed']) {
				$this->session->set_flashdata('alert', "Anda perlu melakukan verifikasi akun. Silakan klik tautan yang telah kami kirim ke email Anda.");
				redirect(site_url('login'));
			}
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
				redirect(site_url("guru"));
			} else if ($role == "siswa") {
				redirect(site_url("siswa"));
			}
		} else {
			$this->session->set_flashdata('alert', "Username atau password salah !");
			redirect(site_url('login'));
		}
	}
	public function Logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
