<?php

class HasilModel extends CI_Model
{
    public function getNilaiSiswaById($user_id)
    {
        return $this->db->query("SELECT user_id, (SELECT detail_user.nomor_induk FROM detail_user WHERE nilai.user_id = detail_user.user_id) as nis, (SELECT users.username FROM users WHERE users.id = nilai.user_id) as username, skor FROM `nilai` WHERE user_id = $user_id")->result_array();
    }

    public function getNilaiSiswaByMateri($materi_kode)
    {
        return $this->db->query("SELECT user_id, (SELECT detail_user.nomor_induk FROM detail_user WHERE nilai.user_id = detail_user.user_id) as nis, (SELECT users.username FROM users WHERE users.id = nilai.user_id) as username, skor FROM `nilai` WHERE nilai.materi_id = (SELECT materi.id FROM materi WHERE materi.kode =  '$materi_kode')")->result_array();
    }

    public function getPGBySiswaId($user_id, $materi_kode)
    {
        return $this->db->query("SELECT *, (SELECT pertanyaan FROM soal WHERE soal.id = soal_id) as pertanyaan, (SELECT pilihan_soal_id FROM kunci_soal WHERE kunci_soal.soal_id = log_answer.soal_id) as kunci_soal, (SELECT pilihan FROM pilihan_soal WHERE pilihan_soal.soal_id = log_answer.soal_id AND pilihan_soal.id = log_answer.pilihan_soal_id) as jawaban FROM `log_answer` WHERE user_id = $user_id AND soal_id = (SELECT soal.id FROM soal WHERE soal.materi_kode = '$materi_kode' AND soal.id = soal_id)")->result_array();
    }

    public function getEsaiBySiswaId($user_id, $materi_kode)
    {
        return $this->db->query("SELECT *, (SELECT pertanyaan FROM soal WHERE soal.id = soal_id) as pertanyaan, (SELECT bobot FROM soal WHERE soal.id = soal_id) as bobot FROM `log_answer_essay` WHERE user_id = $user_id AND soal_id = (SELECT soal.id FROM soal WHERE soal.materi_kode = '$materi_kode' AND soal.id = soal_id)")->result_array();
    }

    public function saveNilai($nilai, $id, $user_id)
    {
        $this->db->where('id', $id)->update('log_answer_essay', ['nilai' => $nilai]);
        if ($this->db->affected_rows() == 0) {
            return false;
        }
        $this->updateNilai($nilai, $id, $user_id);
        return true;
    }

    private function updateNilai($nilai, $id, $user_id)
    {
        $soal_id = $this->db->where('id', $id)->get('log_answer_essay')->row_array()['soal_id'];
        $materi_id = $this->db->query("SELECT materi.id FROM materi WHERE materi.kode = (SELECT materi_kode FROM soal WHERE soal.id = $soal_id)")->row_array()['id'];
        $skor = $this->db->where('user_id', $user_id)->where('materi_id', $materi_id)->get('nilai')->row_array()['skor'];
        $this->db->where('user_id', $user_id)->where('materi_id', $materi_id)->update('nilai', ['skor' => $skor + $nilai]);
    }
}
