<?php

class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model("LoginModel", "Login");
  }

  public function index()
  {
    if ($this->session->userdata('status') === 'login') {
      if ($this->session->userdata('role') === 'guru') {
        redirect(site_url('guru'));
      } else if ($this->session->userdata('role') === 'siswa') {
        redirect(site_url('siswa'));
      }
    } else {
      redirect(site_url('login'));
    }
  }

  public function page404()
  {
    echo "404 not found, cek kembali url yang diakses !";
  }

  public function faq()
  {
    $this->load->view('faq');
  }

  public function kirim_request_password()
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
    $email = $this->input->post('email');
    $dat = $this->Login->cek_email($email);
    if ($dat['email'] == $email) {
      $this->Login->update_token($dat['id']);
      $this->email->from('noreply@relact.codes', "RELACT Automation");
      $this->email->to($email);
      $this->email->subject("(Relact) Request lupa password");
      $body = $this->load->view('email/reset_password', ['username' => $dat['username'], 'token' => $dat['token_reset']], TRUE);
      $this->email->message($body);
      $this->email->send();
    }

    $this->session->set_flashdata('success', "Jika email anda benar, maka instruksi akan terkirim ke email.");
    redirect(site_url('login'));
  }

  public function reset($token)
  {
    $dat = $this->Login->cek_token($token);
    if ($token == $dat['token_reset']) {
      $this->load->view('reset_password', ['token' => $token]);
    } else {
      $this->session->set_flashdata('alert', "Token/link tidak berlaku !");
      redirect(site_url('login'));
    }
  }

  public function ubah($token)
  {
    $this->form_validation->set_rules('inputPassword', 'Password', 'trim|required');
    $this->form_validation->set_rules('passwordConfirmation', 'Konfirmasi Password', 'trim|required|matches[inputPassword]');
    if ($this->form_validation->run() == TRUE) {
      $password = md5($this->input->post('inputPassword'));
      $this->Login->ubah_password($token, $password);
      $this->session->set_flashdata('success', "Password telah berhasil diubah, silahkan login dengan password baru.");
      redirect(site_url('login'));
    } else {
      $this->session->set_flashdata('alert', "Password gagal diubah, coba kembali lain waktu !");
      redirect(site_url('login'));
    }
  }
}
