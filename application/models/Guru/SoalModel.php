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

    /**
     * add soal
     * 
     * @param kode_materi $kode_materi
     * @return boolean success/failed
     */
    public function addSoal($data)
    {
        return $this->db->insert('soal', $data);
    }

    /**
     * get Soal by Id
     * 
     * @param soal_id
     * @return data
     */
    public function getSoalById($soal_id)
    {
        $data = $this->db->where('id', $soal_id)->get('soal');
        return $data->row_array();
    }
}