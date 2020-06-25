<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'controllers/Teacher/Base.php';

class Hasil extends Base
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('KelasModel', 'Kelas');
        $this->load->model('Guru/HasilModel', 'Hasil');
    }
    public function viewHasilKerja()
    {
        $data['data'] = $this->Kelas->getKelas();
        $this->breadcrumb->push('Guru', '/guru');
        $this->breadcrumb->push('Hasil', '/guru/hasil');
        $this->load->view('guru/list_kelas_hasil', $data);
    }

    public function viewHasilPerKelas($kode_kelas)
    {
        $data['kelas'] = $this->Kelas->getKelasByKode($kode_kelas);
        $data['data'] = $this->Kelas->getMateriByKodeKelas($kode_kelas);
        $this->breadcrumb->push('Guru', '/guru');
        $this->breadcrumb->push('Hasil', '/guru/hasil');
        $this->breadcrumb->push($data['kelas']['mapel'], '/guru/hasil/' . $kode_kelas);
        $this->load->view('guru/list_materi_hasil', $data);
    }

    public function viewHasilPerMateri($kode_kelas, $kode_materi)
    {
        $data['kelas'] = $this->Kelas->getKelasByKode($kode_kelas);
        $materi = $this->Kelas->getMateriByKode($kode_materi);
        $data['data'] = $this->Hasil->getNilaiSiswaByMateri($kode_materi);
        $this->breadcrumb->push('Guru', '/guru');
        $this->breadcrumb->push('Hasil', '/guru/hasil');
        $this->breadcrumb->push($data['kelas']['mapel'] . " / " . $materi['judul'], '/guru/hasil/' . $kode_kelas);
        $this->breadcrumb->push("Daftar Siswa", "#");
        $this->load->view('guru/list_siswa_hasil', $data);
    }

    public function viewJawabanSiswa($mode, $user_id, $kode_materi)
    {
        if ($mode == "PG") {
            $data['data'] = $this->Hasil->getPGBySiswaId($user_id, $kode_materi);
        } else if ($mode == "Esai") {
            $data['data'] = $this->Hasil->getEsaiBySiswaId($user_id, $kode_materi);
        }
        $materi = $this->Kelas->getMateriByKode($kode_materi);
        $kode_kelas = $this->uri->segment(3);
        $this->breadcrumb->push('Guru', '/guru');
        $this->breadcrumb->push('Hasil', '/guru/hasil');
        $this->breadcrumb->push($data['kelas']['mapel'] . " / " . $materi['judul'], '/guru/hasil/' . $kode_kelas);
        $this->breadcrumb->push("Daftar Siswa", '/guru/hasil/' . $kode_kelas . '/materi/' . $kode_materi);
        $this->breadcrumb->push("Periksa Jawaban", "#");
        $this->load->view('guru/list_jawaban_hasil', $data);
    }

    public function postNilaiSiswa($user_id)
    {
        $id = $this->input->post('id');
        $nilai = $this->input->post('nilai');

        $this->Hasil->saveNilai($nilai, $id, $user_id);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function fixNilai($user_id)
    {
        $nilai = $this->input->post('nilai');
        $id = $this->input->post('id');

        $this->Hasil->fixNilai($nilai, $id, $user_id);
        redirect($_SERVER['HTTP_REFERER']);
    }
}
