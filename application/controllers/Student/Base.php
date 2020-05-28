<?php

class Base extends CI_Controller
{
    private $user_id;
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') !== 'login') {
            redirect(site_url());
        }
        $this->setUserId($this->session->userdata('user_id'));
        if ($this->session->userdata('role') !== 'siswa') {
            redirect($_SERVER['HTTP_REFERER']);
        }

        $this->load->model('LogModel', 'Log');

        if ($this->uri->segment(1)) {

            $user_id = $this->session->userdata('user_id');
            $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $from_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;
            $action = $_SERVER['REQUEST_METHOD'];
            $kode_kelas = null;
            $kode_materi = null;
            $is_soal = null;
            $data = array(
                'user_id' => $user_id,
                'url' => $url,
                'from_url' => $from_url,
                'action' => $action
            );

            if ($this->uri->segment(2) && $this->uri->segment(3)) {
                if ($this->uri->segment(2) == 'kelas') {
                    $kode_kelas = $this->uri->segment(3);
                } else if ($this->uri->segment(2) == 'soal') {
                    $kode = $this->uri->segment(3);
                    $encoded_kode = base64_decode(urldecode($kode));
                    $exploded = explode('.', $encoded_kode);
                    $kode_materi = $exploded[0];
                    $kode_kelas = $this->Log->getByMateriKode($kode_materi)['kode_kelas'];
                    $is_soal = true;
                }

                if ($this->uri->segment(4) && $this->uri->segment(5)) {
                    if ($this->uri->segment(4) == 'materi') {
                        $kode_materi = $this->uri->segment(5);
                    }
                }
            }

            $this->Log->saveLog($data, $kode_kelas, $kode_materi, $is_soal);
        }
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }
}
