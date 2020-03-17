<?php

class KelasModel extends CI_Model
{
    public function saveKelas($data)
    {
        if ($this->db->insert('kelas', $data)) {
            return true;
        }
        return false;
    }

    public function getKelas()
    {
        $this->db->select('kelas.id, mapel_id, code, nama, periode, mata_pelajaran.nama_mapel');
        $this->db->from('kelas');
        $this->db->join('mata_pelajaran', 'kelas.mapel_id = mata_pelajaran.id', 'left');
        $data = $this->db->get();
        return $data->result_array();
    }
}
