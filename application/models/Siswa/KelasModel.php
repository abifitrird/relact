<?php

Class KelasModel extends CI_Model
{
    /**
     * get siswa and user_kelas to find if siswa had join some class or return false to show "tambahkan kode untuk masuk kelas"
     *
     * @param user_id
     * @return false if data empty
     * @return data if not empty
     */
    public function getUserKelasByUserId($user_id)
    {
        return $this->db->select('kelas.id, guru_id, mapel_id, code, nama, periode, kelas_id, siswa_id, mapel_id, mata_pelajaran.nama_mapel')
        ->from('user_kelas')->join('kelas', 'kelas.id = kelas_id', 'left')
        ->join('mata_pelajaran', 'kelas.mapel_id = mata_pelajaran.id', 'left')
        ->where('siswa_id', $user_id)
        ->get()->result_array();
    }

    /**
     * masuk kelas dengan kode_kelas dan user_id
     * 
     * @param kode_kelas
     * @param user_id
     * @return boolean
     */
    public function masukKelasByKodeKelas($kode, $user_id)
    {
        $kelas = $this->db->where('code', $kode)->get('kelas');
        if ($kelas->num_rows() == 0) {
            return false;
        }

        $kelas_id = $kelas->row_array()['id'];
        $data = array(
            kelas_id => $kelas_id,
            siswa_id => $user_id
        );

        $this->db->insert('user_kelas', $data);
        return true;
    }
}