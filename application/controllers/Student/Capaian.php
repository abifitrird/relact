<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'controllers/Student/Base.php';

class Capaian extends Base
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa/CapaianModel', "Capaian");
    }
    public function index()
    {
        $user_id = $this->session->userdata('user_id');
        // $materi = $this->Capaian->getMateri($user_id);
        $soal = $this->Capaian->getSoal($user_id);
        // $data['materi'] = $materi;
        $data['soal'] = $soal;
        $this->load->view('siswa/capaian', $data);
    }
}
