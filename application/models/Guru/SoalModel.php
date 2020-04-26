<?php

class SoalModel extends CI_Model
{
    /**
     * get soal by kode materi from database
     * 
     * @param kode_materi
     */
    public function getSoalByKodeMateri($kode_materi)
    {
        $this->db->where('materi_kode', $kode_materi);
        $data = $this->db->get('soal');
        return $data->result_array();
    }
}