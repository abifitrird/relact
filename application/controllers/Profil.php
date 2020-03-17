<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProfilModel');
    }

    public function index()
    {
        $id = $this->session->userdata('user_id');
        $data['data'] = $this->ProfilModel->getProfil($id);
        if ($this->session->userdata('role') == 'guru') {
            // print_r($data);
            $this->load->view('guru/profil', $data);
        } else if ($this->session->userdata('role') == 'siswa') {
            $this->load->view('siswa/profil', $data);
        }
    }

    public function updateProfil()
    {
        $namaLengkap = $this->input->post('namaLengkap');
        $nomorInduk = $this->input->post('nomorInduk');
        $sekolah = $this->input->post('sekolah');
        $Alamat = $this->input->post('Alamat');
        $noTelp = $this->input->post('noTelp');

        $data = array(
            'user_id' => $this->session->userdata('user_id'),
            'nama_lengkap' => $namaLengkap,
            'nomor_induk' => $nomorInduk,
            'sekolah_id' => $sekolah,
            'alamat' => $Alamat,
            'no_hp' => $noTelp
        );

        if ($this->ProfilModel->updateProfil($data)) {
            redirect(site_url('Profil'));
        }
    }
}
