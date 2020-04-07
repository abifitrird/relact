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

    /**
     * get Materi by Kelas Id
     * 
     * @param $id kelas_id
     * @return data
     */
    public function getMateriByKodeKelas($kode)
    {
        $this->db->select('id');
        $this->db->where('code', $kode);
        $this->db->limit(1);
        $kelas_id = $this->db->get('kelas');
        $kelas_id = $kelas_id->row_array();
        $kelas_id = $kelas_id['id'];

        $this->db->where('kelas_id', $kelas_id);
        $data = $this->db->get('materi');
        return $data->result_array();
    }

    /**
     * get Materi by id
     * 
     * @param materi_id
     * @return data
     */
    public function getMateriById($id)
    {
        $this->db->where('id', $id);
        $data = $this->db->get('materi');
        return $data->row_array();
    }

    /**
     * save materi by kelas id
     * 
     * @param $data
     * @return true/false
     */
    public function saveMateri($data)
    {
        return $this->db->insert('materi', $data);
    }
}
