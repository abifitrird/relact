<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'controllers/Student/Base.php';

class Soal extends Base
{
    public function showSoal($kode)
    {
        $encoded_kode = base64_decode(urldecode($kode));
        $exploded = explode('.', $encoded_kode);
        $kode_materi = $exploded[0];
        $user_id = $exploded[1];

        $this->load->view('siswa/soal');
    }
}