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

    /**
     * get materi by kode materi
     * 
     * @param kode_materi
     * @param sub_id
     * @return data
     */
    public function getMateriByKodeMateri($kode_materi, $sub_id)
    {
        return $this->db->query("SELECT * FROM sub_materi WHERE materi_id = (SELECT id FROM materi WHERE kode = '$kode_materi') AND sub_materi.id = $sub_id")->row_array();
    }

    /**
     * get submateri by kode materi
     * 
     * @param kode_materi
     * @return data
     */
    public function getSubMateriByKodeMateri($kode_materi)
    {
        return $this->db->query("SELECT * FROM sub_materi WHERE materi_id = (SELECT id FROM materi WHERE kode = '$kode_materi')")->result_array();
    }

    /**
     * check if nilai by user_id exist
     * 
     * @param user_id
     * @return boolean
     */
    public function checkNilaiByUserId($user_id)
    {
        $check = $this->db->where('user_id', $user_id)->limit(1)->get('nilai')->num_rows();
        if ($check != 0) {
            return true;
        }

        return false;
    }
}
