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
        $data['data'] = $this->Aktivitas->getSiswaPerKelas($kode_kelas);
        // print_r($data);
        $this->load->view('guru/aktivitas_detail', $data);
    }

    public function viewAktivitasSiswa($kelas_kode, $username)
    {
        $data = $this->Aktivitas->getSiswa($kelas_kode, $username);

        $kirim = [];

        foreach ($data as $dat) {
            if ($dat['is_soal']) {
                $path = parse_url($dat['url'], PHP_URL_PATH);
                $segments = explode('/', rtrim($path, '/'));
                if (isset($segments[3]) && isset($segments[4]) && $segments[4] == "selesai") {
                    $kirim[] = $dat;
                } else if (isset($segments[3]) && !isset($segments[4])) {
                    $kirim[] = $dat;
                }
            } else {
                $kirim[] = $dat;
            }
        }

        $data['data'] = $kirim;
        $this->load->view('guru/aktivitas_detail_siswa', $data);
    }
}
