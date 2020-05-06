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

    /**
     * add new Soal
     * 
     * @param kode_materi $kode_materi
     * @return boolean
     */
    public function addSoal($kode_materi)
    {
        $data_post = array(
            'materi_kode' => $this->input->post('kodeMateri'),
            'tipe' => $this->input->post('tipeSoal'),
            'pertanyaan' => $this->input->post('pertanyaan'),
            'bobot' => $this->input->post('bobotSoal')
        );

        $this->Soal->addSoal($data_post);
        redirect($_SERVER['HTTP_REFERER']);
    }
}