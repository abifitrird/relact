<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'controllers/Teacher/Base.php';

class Capaian extends Base
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('KelasModel', 'Kelas');
        $this->load->model('Guru/CapaianModel', 'Capaian');
    }

    public function capaianSiswa()
    {
        $data['data'] = $this->Kelas->getKelas();
        $this->load->view('guru/capaian', $data);
    }

    public function capaianSiswaDetail($kode_kelas)
    {
        // echo $kode_kelas;
        $data['nilai'] = $this->Capaian->getNilai($kode_kelas);
        $this->load->view('guru/detail_capaian', $data);
    }
}
