<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'controllers/Teacher/Base.php';

class Capaian extends Base
{
    public function capaianSiswa()
    {
        $this->load->view('guru/statistik');
    }
}
