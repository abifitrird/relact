<?php

class CapaianModel extends CI_Model
{
    public function getNilai($kelas_kode)
    {
        return $this->db->query("SELECT materi_id, (SELECT materi.judul FROM materi WHERE materi.id = materi_id) as judul_materi, ROUND(AVG(skor), 2) as rata_skor FROM `nilai` WHERE materi_id = (SELECT materi.id FROM materi WHERE materi.kelas_id = (SELECT id FROM kelas WHERE kelas.code = '$kelas_kode'))")->result_array();
    }
}