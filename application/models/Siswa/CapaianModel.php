<?php

class CapaianModel extends CI_Model
{
    /**
     * get materi opened by user
     * 
     * @param user_id
     * @return data
     */
    public function getMateri($user_id)
    {
        $data = $this->db->query("SELECT user_id, url, materi_id, (SELECT judul FROM materi WHERE materi.id = materi_id) as judul_materi, (SELECT nama_mapel FROM mata_pelajaran WHERE mata_pelajaran.id = (SELECT kelas.mapel_id FROM kelas WHERE kelas.id = kelas_id)) as mata_pelajaran, is_soal, created_at FROM log_activity WHERE user_id = $user_id AND materi_id IS NOT NULL AND is_soal IS NULL GROUP BY materi_id ORDER BY created_at DESC")->result_array();

        return $data;
    }

    /**
     * get soal success by user
     * 
     * @param user_id
     * @return data
     */
    public function getSoal($user_id)
    {
        // $data = $this->db->query("SELECT user_id, url, materi_id, (SELECT judul FROM materi WHERE materi.id = materi_id) as judul_materi, (SELECT nama_mapel FROM mata_pelajaran WHERE mata_pelajaran.id = (SELECT kelas.mapel_id FROM kelas WHERE kelas.id = kelas_id)) as mata_pelajaran, is_soal, created_at FROM log_activity WHERE user_id = $user_id AND materi_id IS NOT NULL AND is_soal IS NOT NULL GROUP BY materi_id ORDER BY created_at DESC")->result_array();

        $data = $this->db->query("SELECT user_id, materi_id, ROUND((skor / (SELECT SUM(bobot) FROM soal WHERE soal.materi_kode = (SELECT kode FROM materi WHERE materi.id = materi_id)))*100, 2) as skor, nilai, (SELECT judul FROM materi WHERE materi.id = materi_id) as judul_materi, (SELECT nama_mapel FROM mata_pelajaran WHERE mata_pelajaran.id = (SELECT kelas.mapel_id FROM kelas WHERE kelas.id = (SELECT kelas_id FROM materi WHERE materi.id = materi_id))) as mata_pelajaran, created_at FROM nilai WHERE user_id = $user_id AND materi_id IS NOT NULL GROUP BY materi_id ORDER BY created_at DESC")->result_array();

        return $data;
    }

    public function getUserAktivitas($user_id)
    {
        // $this->db->where('user_id', $user_id)
        // ->select("")
    }
}
