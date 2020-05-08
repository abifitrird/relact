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
        $data['sekolah'] = $this->getListOfSchools();
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
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    /**
     * change password
     * 
     * @return boolean
     */
    public function updatePassword()
    {
        $user_id = $this->session->userdata('user_id');
        $password_lama = $this->input->post('passwordLama');
        $password_baru = $this->input->post('passwordBaru');
        $konfirm_baru = $this->input->post('konfirmasiPassword');

        if ($password_baru != $konfirm_baru) {
            $this->session->set_flashdata('alert', 'Konfirmasi password baru salah');
            redirect($_SERVER['HTTP_REFERER']);
        }

        $lama = $this->ProfilModel->checkPassword($user_id);
        if ($lama != md5($password_lama)) {
            $this->session->set_flashdata('alert', 'Password lama salah');
            redirect($_SERVER['HTTP_REFERER']);
        }

        if (!$this->ProfilModel->changePassword($user_id, md5($password_baru))) {
            $this->session->set_flashdata('alert', 'Error, password tidak berubah');
            redirect($_SERVER['HTTP_REFERER']);
        }
        $this->session->set_flashdata('success', 'Password berhasil diubah');
        redirect($_SERVER['HTTP_REFERER']);
    }

    /**
     * get list of sekolah
     * 
     * @param
     * @return dataOfSekolahTable
     */
    public function getListOfSchools()
    {
        return $this->ProfilModel->getListOfSchools();
    }
}
