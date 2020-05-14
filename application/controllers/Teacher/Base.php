<?php

class Base extends CI_Controller
{
    private $user_id;

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') !== 'login') {
            redirect(site_url());
        }
        $this->setUserId($this->session->userdata('user_id'));
        if ($this->session->userdata('role') !== 'guru') {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }
}