<?php

class Saran extends CI_Controller
{
    public function index()
    {
        $this->load->view('hubungi_kami');
    }

    /**
     * view saran/guru
     * 
     * @return view
     */
    public function guru()
    {
        // echo "disini akan dibangun kotak saran untuk guru";
        $this->load->view('hubungi_kami');
    }

    /**
     * view saran/siswa
     * 
     * @return view
     */
    public function siswa()
    {
        // echo "disini akan dibangun kotak saran untuk siswa";
        $this->load->view('hubungi_kami');
    }

    /**
     * POST from saran
     * 
     */
    public function sendSaran()
    {

        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.sendgrid.net';
        $config['smtp_port'] = '587';
        $config['smtp_user'] = 'apikey';
        $config['smtp_pass'] = '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';
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';

        $this->email->initialize($config);

        $jenis = $this->input->post('jenisPertanyaan');
        $pesan = $this->input->post('pesan');
        $this->load->model("ProfilModel", 'profilModel');
        $user = $this->profilModel->getProfil($this->session->userdata('user_id'));

        $this->email->from('noreply@relact.codes', "RELACT Hubungi Kami");
        $this->email->to('abifitrird@gmail.com');
        $this->email->subject("(RELACT) " . $jenis);
        $this->email->message('Halo, Saya ' . $user['nama_lengkap'] . ' dengan email ' . $user['email'] . ' mengirim pesan: <br />' . $pesan);
        $this->email->send();

        $this->session->set_flashdata('success', "Terima kasih telah mengirim pesan kepada kami, pesan anda baru saja terkirim.");
        redirect(site_url($this->session->userdata('role') . '/kelas'));
    }

    /**
     * save to database saran from guru
     * 
     * @param
     * @return boolean
     */
    public function saveSaranGuru()
    {
        echo "untuk POST yang dikirim dari tampilan guru";
    }

    /**
     * save to database saran from siswa
     * 
     * @param
     * @return boolean
     */
    public function saveSaranSiswa()
    {
        echo "untuk POST yang dikirim dari tampilan siswa";
    }
}
