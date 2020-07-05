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
    $config['charset'] = 'utf-8';
    $config['priority'] = 5;
    $config['mailtype'] = 'html';
    $config['protocol'] = 'smtp';
    $config['smtp_crypto'] = 'ssl';
    $config['smtp_host'] = 'mail.relact.codes';
    $config['smtp_port'] = '465';
    $config['smtp_user'] = 'noreply@relact.codes';
    $config['smtp_pass'] = 'M=9IF]Xm0@Yb';

    $this->email->initialize($config);
    $email = $this->input->post('email');
    $dat = $this->Login->cek_email($email);
    if ($dat['email'] == $email) {
      $this->Login->update_token($dat['id']);
      $this->email->from('noreply@relact.codes', "RELACT Automation");
      $this->email->to($email);
      $this->email->subject("(Relact) Request lupa password");
      $this->email->set_header('Content-Type', 'text/html');
      $this->email->message(`<head>
  <title>[Relact] Reset password</title>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
  <meta content="width=device-width" name="viewport" />
</head>

<body style="background-color: #f4f4f5;">
  <table
    align="center"
    cellpadding="0"
    cellspacing="0"
    id="body"
    style="background-color: #fff; width: 100%; max-width: 680px; height: 100%;"
  >
    <tbody>
      <tr>
        <td>
          <table
            align="center"
            cellpadding="0"
            cellspacing="0"
            class="page-center"
            style="
              text-align: left;
              padding-bottom: 88px;
              width: 100%;
              padding-left: 120px;
              padding-right: 120px;
            "
          >
            <tbody>
              <tr>
                <td
                  colspan="2"
                  style="
                    padding-top: 72px;
                    -ms-text-size-adjust: 100%;
                    -webkit-font-smoothing: antialiased;
                    -webkit-text-size-adjust: 100%;
                    color: #000000;
                    font-family: 'Postmates Std', 'Helvetica', -apple-system,
                      BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen',
                      'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans',
                      'Helvetica Neue', sans-serif;
                    font-size: 48px;
                    font-smoothing: always;
                    font-style: normal;
                    font-weight: 600;
                    letter-spacing: -2.6px;
                    line-height: 52px;
                    mso-line-height-rule: exactly;
                    text-decoration: none;
                  "
                >
                  Reset your password
                </td>
              </tr>
              <tr>
                <td style="padding-top: 48px; padding-bottom: 48px;">
                  <table cellpadding="0" cellspacing="0" style="width: 100%;">
                    <tbody>
                      <tr>
                        <td
                          style="
                            width: 100%;
                            height: 1px;
                            max-height: 1px;
                            background-color: #d9dbe0;
                            opacity: 0.81;
                          "
                        ></td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                <td
                  style="
                    -ms-text-size-adjust: 100%;
                    -ms-text-size-adjust: 100%;
                    -webkit-font-smoothing: antialiased;
                    -webkit-text-size-adjust: 100%;
                    color: #9095a2;
                    font-family: 'Postmates Std', 'Helvetica', -apple-system,
                      BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen',
                      'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans',
                      'Helvetica Neue', sans-serif;
                    font-size: 16px;
                    font-smoothing: always;
                    font-style: normal;
                    font-weight: 400;
                    letter-spacing: -0.18px;
                    line-height: 24px;
                    mso-line-height-rule: exactly;
                    text-decoration: none;
                    vertical-align: top;
                    width: 100%;
                  "
                >
                  Username anda {$dat['username']} menerima email ini karena permintaan ubah password.
                  Abaikan jika anda tidak melakukan permintaan.
                </td>
              </tr>
              <tr>
                <td
                  style="
                    padding-top: 24px;
                    -ms-text-size-adjust: 100%;
                    -ms-text-size-adjust: 100%;
                    -webkit-font-smoothing: antialiased;
                    -webkit-text-size-adjust: 100%;
                    color: #9095a2;
                    font-family: 'Postmates Std', 'Helvetica', -apple-system,
                      BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen',
                      'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans',
                      'Helvetica Neue', sans-serif;
                    font-size: 16px;
                    font-smoothing: always;
                    font-style: normal;
                    font-weight: 400;
                    letter-spacing: -0.18px;
                    line-height: 24px;
                    mso-line-height-rule: exactly;
                    text-decoration: none;
                    vertical-align: top;
                    width: 100%;
                  "
                >
                  Tekan tombol atau salin link dibawah tombol ke browser untuk
                  melakukan penggantian password.
                </td>
              </tr>
              <tr>
                <td>
                  <a
                    href="https://relact.codes/reset/{$dat['token_reset']}"
                    style="
                      margin-top: 36px;
                      -ms-text-size-adjust: 100%;
                      -ms-text-size-adjust: 100%;
                      -webkit-font-smoothing: antialiased;
                      -webkit-text-size-adjust: 100%;
                      color: #ffffff;
                      font-family: 'Postmates Std', 'Helvetica', -apple-system,
                        BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen',
                        'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans',
                        'Helvetica Neue', sans-serif;
                      font-size: 12px;
                      font-smoothing: always;
                      font-style: normal;
                      font-weight: 600;
                      letter-spacing: 0.7px;
                      line-height: 48px;
                      mso-line-height-rule: exactly;
                      text-decoration: none;
                      vertical-align: top;
                      width: 220px;
                      background-color: #00cc99;
                      border-radius: 28px;
                      display: block;
                      text-align: center;
                      text-transform: uppercase;
                    "
                    target="_blank"
                    >Reset Password</a
                  >
                  <a href="https://relact.codes/reset/{$dat['token_reset']}">https://relact.codes/reset/{$dat['token_reset']}</a>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
</body>
`);
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
