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

    /**
     * save pilihan jawaban
     * 
     * @param soal_id
     * @return boolean
     */
    public function savePilihanJawaban($soal_id)
    {
        $data = $this->input->post();
        $this->Soal->savePilihanJawabanBySoalId($soal_id, $data);
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    /**
     * get Saol by Id as JSON
     * 
     * @param saal_id
     * @return json
     */
    public function getSoalJson($soal_id)
    {
        $data = $this->Soal->getSoalById($soal_id);
        echo json_encode($data);
    }

    /**
     * get Pilihan jawaban by soal Id as JSON
     * 
     * @param soal_id
     * @return json
     */
    public function getPilihanJawabanBySoalId($soal_id)
    {
        echo json_encode($this->Soal->getPilihanJawabanBySoalId($soal_id));
        
    }
}