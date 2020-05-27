<?php

class Saran extends CI_Controller
{
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
