<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProfilModel');
    }


    public function guru()
    {
        $id = $this->session->userdata('user_id');
        $data['data'] = $this->ProfilModel->getProfil($id);
        $data['sekolah'] = $this->getListOfSchools();
        $this->load->view('guru/profil', $data);
    }

    public function siswa()
    {
        $id = $this->session->userdata('user_id');
        $data['data'] = $this->ProfilModel->getProfil($id);
        $data['sekolah'] = $this->getListOfSchools();
        $this->load->view('siswa/profil', $data);
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
     * change foto profile
     * 
     * @param
     * @return
     */
    public function ubahFotoProfil()
    {
        $user_id = $this->session->userdata('user_id');
        $this->load->library('upload');
        $config['file_name'] = 'foto-' . $user_id;
        $config['upload_path'] = './uploads/profil/';
        $config['allowed_types'] = 'gif|png|jpg|jpeg';
        $config['max_size'] = 512;
        $config['overwrite'] = TRUE;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('file')) {
            $this->session->set_flashdata('alert', 'Gagal ubah Foto profil, cek kembali ekstensi dan ukurannya');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $data = $this->upload->data();
            $url_foto = $data['file_name'];
            $this->ProfilModel->changeFoto($user_id, $url_foto);
            $this->session->set_flashdata('success', 'Berhasil diubah !');
            redirect($_SERVER['HTTP_REFERER']);
            // $return = array(
            //     'path' => base_url("uploads/" . $data['file_name']),
            //     'name' => $data['file_name'],
            //     'status' => 'OK'
            // );
            // echo json_encode($return);
        }
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
