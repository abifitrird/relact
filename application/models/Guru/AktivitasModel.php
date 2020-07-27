<?php

class AktivitasModel extends CI_Model
{
    public function getAktivitas($kelas_kode)
    {
        $data = $this->db->query("SELECT (SELECT detail_user.nama_lengkap FROM detail_user WHERE detail_user.user_id = log_activity.user_id) as nama, user_id, url, (SELECT materi.judul FROM materi WHERE materi.id = log_activity.materi_id) as judul_materi, is_soal, created_at as waktu_akses FROM `log_activity` WHERE kelas_id = (SELECT kelas.id FROM kelas WHERE kelas.code = '$kelas_kode') GROUP BY url ORDER BY user_id")->result_array();

        return $data;
    }

    public function getSiswaPerKelas($kelas_kode)
    {
        return $this->db->query("SELECT (SELECT detail_user.nama_lengkap FROM detail_user WHERE user_id = siswa_id) as nama, (SELECT detail_user.nomor_induk FROM detail_user WHERE detail_user.user_id = siswa_id) as nis, (SELECT username FROM users WHERE users.id = siswa_id) as username, siswa_id as user_id FROM user_kelas WHERE kelas_id = (SELECT kelas.id FROM kelas WHERE kelas.code = '$kelas_kode') ORDER BY nama")->result_array();
    }

    public function getSiswa($kelas_kode, $username)
    {
        return $this->db->query("SELECT (SELECT detail_user.nama_lengkap FROM detail_user WHERE detail_user.user_id = log_activity.user_id) as nama, (SELECT detail_user.nomor_induk FROM detail_user WHERE detail_user.user_id = log_activity.user_id) as nis, user_id, url, (SELECT materi.judul FROM materi WHERE materi.id = log_activity.materi_id) as judul_materi, is_soal, created_at as waktu_akses FROM `log_activity` WHERE kelas_id = (SELECT kelas.id FROM kelas WHERE kelas.code = '$kelas_kode') AND user_id = (SELECT users.id FROM users WHERE username = '$username') GROUP BY url ORDER BY user_id")->result_array();
    }

    private function getDataMateri($kelas_kode, $user_id)
    {
        return $this->db->query("SELECT id, materi_id, url, kelas_id, (SELECT judul FROM materi WHERE materi.id = materi_id LIMIT 1) as judul_materi, (SELECT judul FROM sub_materi WHERE sub_materi.id = sub_materi_id LIMIT 1) as judul_submateri, created_at as mulai, (SELECT (SELECT created_at FROM log_activity as log1_akhir WHERE log1_akhir.user_id = log_master_akhir.user_id AND TIMEDIFF(log1_akhir.created_at, log_master_akhir.created_at) > 0 ORDER BY TIMEDIFF(log1_akhir.created_at, log_master_akhir.created_at) LIMIT 1) as akhir FROM `log_activity` as log_master_akhir WHERE user_id = $user_id AND kelas_id = (SELECT id FROM kelas WHERE kelas.code = '$kelas_kode' LIMIT 1) AND sub_materi_id IS NOT NULL ORDER BY `created_at`  DESC LIMIT 1) as akhir FROM `log_activity` as log_master WHERE user_id = $user_id AND kelas_id = (SELECT id FROM kelas WHERE kelas.code = '$kelas_kode' LIMIT 1) AND materi_id IS NOT NULL GROUP BY materi_id ORDER BY `created_at`  ASC")->result_array();
    }

    private function getDataSoalMateri($kelas_kode, $user_id)
    {
        return $this->db->query("SELECT id, url, kelas_id, (SELECT judul FROM materi WHERE materi.id = materi_id LIMIT 1) as judul_materi, (SELECT judul FROM sub_materi WHERE sub_materi.id = sub_materi_id LIMIT 1) as judul_submateri, created_at as mulai, (SELECT created_at FROM log_activity as log1 WHERE log1.user_id = log_master.user_id AND log1.is_soal IS NOT NULL AND TIMEDIFF(log1.created_at, log_master.created_at) > 0 ORDER BY TIMEDIFF(log1.created_at, log_master.created_at) DESC LIMIT 1) as akhir, TIMEDIFF((SELECT created_at FROM log_activity as log1 WHERE log1.user_id = log_master.user_id AND log1.is_soal IS NOT NULL AND TIMEDIFF(log1.created_at, log_master.created_at) > 0 ORDER BY TIMEDIFF(log1.created_at, log_master.created_at) DESC LIMIT 1), log_master.created_at) as durasi FROM `log_activity` as log_master WHERE user_id = $user_id AND kelas_id = (SELECT id FROM kelas WHERE kelas.code = '$kelas_kode' LIMIT 1) AND is_soal IS NOT NULL GROUP BY materi_id ORDER BY `created_at`  ASC")->result_array();
    }

    private function getDataSubMateri($kelas_kode, $user_id)
    {

        return $this->db->query("SELECT id, url, kelas_id, (SELECT judul FROM materi WHERE materi.id = materi_id LIMIT 1) as judul_materi, (SELECT judul FROM sub_materi WHERE sub_materi.id = sub_materi_id LIMIT 1) as judul_submateri, created_at as mulai, (SELECT created_at FROM log_activity as log1 WHERE log1.user_id = log_master.user_id AND TIMEDIFF(log1.created_at, log_master.created_at) > 0 ORDER BY TIMEDIFF(log1.created_at, log_master.created_at) LIMIT 1) as akhir, TIMEDIFF((SELECT created_at FROM log_activity as log1 WHERE log1.user_id = log_master.user_id AND TIMEDIFF(log1.created_at, log_master.created_at) > 0 ORDER BY TIMEDIFF(log1.created_at, log_master.created_at) LIMIT 1), log_master.created_at) as durasi FROM `log_activity` as log_master WHERE user_id = $user_id AND kelas_id = (SELECT id FROM kelas WHERE kelas.code = '$kelas_kode' LIMIT 1) AND sub_materi_id IS NOT NULL ORDER BY `created_at`  ASC")->result_array();
    }

    private function getSumDataSubMateri($kelas_kode, $materi_id, $user_id)
    {
        return $this->db->query("SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(TIMEDIFF((SELECT created_at FROM log_activity as log1 WHERE log1.user_id = log_master.user_id AND TIMEDIFF(log1.created_at, log_master.created_at) > 0 ORDER BY TIMEDIFF(log1.created_at, log_master.created_at) LIMIT 1), log_master.created_at)))) as durasi FROM `log_activity` as log_master WHERE user_id = $user_id AND kelas_id = (SELECT id FROM kelas WHERE kelas.code = '$kelas_kode' LIMIT 1) AND materi_id = $materi_id AND sub_materi_id IS NOT NULL ORDER BY `created_at`  ASC")->row_array();
    }

    public function getDataAktivitas($kelas_kode, $username)
    {
        $data = [];
        $user_id = $this->db->where('username', $username)->get('users')->row_array()['id'];

        $materi = $this->getDataMateri($kelas_kode, $user_id);
        $soal_materi = $this->getDataSoalMateri($kelas_kode, $user_id);
        $sub_materi = $this->getDataSubMateri($kelas_kode, $user_id);

        foreach ($materi as $mat) {
            $data[] = array(
                'materi' => "Materi " . $mat['judul_materi'],
                'submateri' => isset($mat['judul_submateri']) ? $mat['judul_submateri'] : null,
                'mulai' => $mat['mulai'],
                'akhir' => $mat['akhir'],
                'durasi' => $this->getSumDataSubMateri($kelas_kode, $mat['materi_id'], $user_id)['durasi']
            );
        }

        foreach ($soal_materi as $mat) {
            $data[] = array(
                'materi' => "Soal " . $mat['judul_materi'],
                'submateri' => isset($mat['judul_submateri']) ? $mat['judul_submateri'] : null,
                'mulai' => $mat['mulai'],
                'akhir' => $mat['akhir'],
                'durasi' => $mat['durasi']
            );
        }

        foreach ($sub_materi as $mat) {
            $data[] = array(
                'materi' => "Materi " . $mat['judul_materi'],
                'submateri' => isset($mat['judul_submateri']) ? $mat['judul_submateri'] : null,
                'mulai' => $mat['mulai'],
                'akhir' => $mat['akhir'],
                'durasi' => $mat['durasi']
            );
        }

        return $data;
    }

    public function getDataSiswa($username)
    {
        return $this->db->query("SELECT nama_lengkap as nama, nomor_induk as nis FROM detail_user WHERE detail_user.user_id = (SELECT users.id FROM users WHERE username = '$username' LIMIT 1)")->row_array();
    }
}
