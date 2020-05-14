<?php

class MateriModel extends CI_Model
{
    /**
     * get materi by kode kelas
     * 
     * @param kode_kelas
     * @return data
     */
    public function getMateriByKodeKelas($kode_kelas)
    {
        $kelas_id = $this->db->where('code', $kode_kelas)
        ->limit(1)
        ->get('kelas')
        ->row_array()['id'];

        $return = $this->db
        ->select('materi.*, (SELECT nama_mapel FROM mata_pelajaran WHERE mata_pelajaran.id = kelas.mapel_id LIMIT 1) as nama_mapel')
        ->join('kelas', 'kelas_id = kelas.id', 'left')
        ->where('kelas_id', $kelas_id)
        ->get('materi')
        ->result_array();

        // return $this->db->where('kelas_id', $kelas_id)->get('materi')->result_array();
        return $return;
    }
}