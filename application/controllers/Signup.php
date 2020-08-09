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
		// $this->session->set_flashdata('alert', 'Aplikasi untuk sementara tidak menerima pendaftaran baru !');
		// redirect(site_url('login'));
		$this->load->view('signup');
	}
	public function daftar()
	{
		$this->form_validation->set_rules('inputUsername', 'Username', 'trim|required');
		$this->form_validation->set_rules('inputEmail', 'Email', 'trim|required');
		$this->form_validation->set_rules('inputPassword', 'Password', 'trim|required');
		$this->form_validation->set_rules('passwordConfirmation', 'Konfirmasi Password', 'trim|required|matches[inputPassword]');
		if ($this->form_validation->run() == TRUE) {
			$data['username'] = strtolower($this->input->post('inputUsername'));
			$data['role_id'] = 2;
			$data['email'] = strtolower($this->input->post('inputEmail'));
			$data['password'] = $this->input->post('inputPassword');
			if (!$this->SignupModel->registrasiUser($data)) {
				$this->session->set_flashdata('alert', 'Username/Email sudah terdaftar');
				redirect($_SERVER['HTTP_REFERER']);
			}

			$this->load->model("ProfilModel", "Profil");
			$this->load->model('LoginModel');
			$user = $this->LoginModel->cek_email($data['email']);
			$data = array(
				'user_id' => $user['id'],
				'nama_lengkap' => $this->input->post('inputName'),
				'nomor_induk' => $this->input->post('inputNIS')
			);
			$this->Profil->updateProfil($data);

			$this->kirim_email($user['username'], $user['email']);
			$this->session->set_flashdata('success', 'Kami telah mengirim email verifikasi kepada Anda. Silakan klik tautan yang disertakan untuk mengaktivasi akun Anda.');
			redirect(site_url('login'));
		}
	}

	private function kirim_email($username, $email)
	{
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.sendgrid.net';
		$config['smtp_port'] = '587';
		$config['smtp_user'] = 'apikey';
		$config['smtp_pass'] = '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';
		$config['mailtype'] = 'html';
		$config['priority'] = 5;
		$config['charset'] = 'iso-8859-1';

		$this->email->initialize($config);
		$this->email->from('noreply@relact.codes', "RELACT Verifikasi Email");
		$this->email->to($email);
		$this->email->subject("(Relact) Verifikasi email");
		$token = urlencode(base64_encode($username . '-' . $email));
		$body = $this->load->view('email/verifikasi', ['username' => $username, 'email' => $email, 'token' => $token], TRUE);
		$this->email->message($body);
		$this->email->send();
	}

	public function verifikasi($token)
	{
		$username = explode('-', base64_decode(urldecode($token)))[0];
		$email = explode('-', base64_decode(urldecode($token)))[1];

		$this->SignupModel->verifikasi_email($username, $email);

		$this->session->set_flashdata('success', "Email anda telah diverifikasi. Silahkan login.");
		redirect(site_url('login'));
	}
}
