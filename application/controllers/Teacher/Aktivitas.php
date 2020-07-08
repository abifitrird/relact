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
        $this->breadcrumb->push('Guru', '/guru');
        $this->breadcrumb->push('Aktivitas', '/guru/aktivitas');
        $this->load->view('guru/aktivitas', $data);
    }

    public function viewDetailAktivitas($kode_kelas)
    {
        $data['kelas'] = $this->Kelas->getKelasByKode($kode_kelas);
        $data['data'] = $this->Aktivitas->getSiswaPerKelas($kode_kelas);
        $this->breadcrumb->push('Guru', '/guru');
        $this->breadcrumb->push('Aktivitas', '/guru/aktivitas');
        $this->breadcrumb->push($data['kelas']['mapel'], '/guru/aktivitas/' . $kode_kelas);
        $this->breadcrumb->push("Daftar Siswa", "#");
        $this->load->view('guru/aktivitas_detail', $data);
    }

    public function viewAktivitasSiswa($kelas_kode, $username)
    {
        $data['user'] = $this->Aktivitas->getDataSiswa(urldecode($username));
        $data['data'] = $this->Aktivitas->getDataAktivitas($kelas_kode, urldecode($username));
        $kelas = $this->Kelas->getKelasByKode($kelas_kode);
        $this->breadcrumb->push('Guru', '/guru');
        $this->breadcrumb->push('Aktivitas', '/guru/aktivitas');
        $this->breadcrumb->push($kelas['mapel'], '/guru/aktivitas/' . $kelas_kode);
        $this->breadcrumb->push("Daftar Aktivitas", "#");
        $this->load->view('guru/aktivitas_detail_siswa', $data);
    }
}
