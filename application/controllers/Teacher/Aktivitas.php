<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'controllers/Teacher/Base.php';

class Aktivitas extends Base
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('KelasModel', 'Kelas');
        $this->load->model('Guru/AktivitasModel', 'Aktivitas');
    }
    public function viewAktivitas()
    {
        $data['data'] = $this->Kelas->getKelas();
        $this->load->view('guru/aktivitas', $data);
    }

    public function viewDetailAktivitas($kode_kelas)
    {
        $data['kelas'] = $this->Kelas->getKelasByKode($kode_kelas);
        $data['data'] = $this->Aktivitas->getSiswaPerKelas($kode_kelas);
        // print_r($data);
        $this->load->view('guru/aktivitas_detail', $data);
    }

    public function viewAktivitasSiswa($kelas_kode, $username)
    {
        $data['user'] = $this->Aktivitas->getDataSiswa($username);
        $data['data'] = $this->Aktivitas->getDataAktivitas($kelas_kode, $username);
        // print_r($data);
        $this->load->view('guru/aktivitas_detail_siswa', $data);
    }
}
