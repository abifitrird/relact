<?php

class Soal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Guru/SoalModel', 'Soal');
    }

    /**
     * getSoal by Kode Materi
     * 
     * @param kode_materi
     */
    public function getSoal($kode_materi)
    {
        $data['soal'] = $this->Soal->getSoalByKodeMateri($kode_materi);
        $this->load->view('guru/soal', $data);
    }
}