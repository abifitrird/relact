<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->userdata('status') === 'login') {
            if ($this->session->userdata('role') === 'guru') {
                redirect(site_url('guru'));
            } else if ($this->session->userdata('role') === 'siswa') {
                redirect(site_url('siswa'));
            }
        } else {
            redirect(site_url('login'));
        }
    }

    public function page404()
    {
        echo "error coy";
    }
}
