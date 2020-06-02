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
        return $this->db->query("SELECT (SELECT detail_user.nama_lengkap FROM detail_user WHERE user_id = siswa_id) as nama, (SELECT detail_user.nomor_induk FROM detail_user WHERE detail_user.user_id = siswa_id) as nis, (SELECT username FROM users WHERE users.id = siswa_id) as username, siswa_id as user_id FROM user_kelas WHERE kelas_id = (SELECT kelas.id FROM kelas WHERE kelas.code = '$kelas_kode')")->result_array();
    }

    public function getSiswa($kelas_kode, $username)
    {
        return $this->db->query("SELECT (SELECT detail_user.nama_lengkap FROM detail_user WHERE detail_user.user_id = log_activity.user_id) as nama, (SELECT detail_user.nomor_induk FROM detail_user WHERE detail_user.user_id = log_activity.user_id) as nis, user_id, url, (SELECT materi.judul FROM materi WHERE materi.id = log_activity.materi_id) as judul_materi, is_soal, created_at as waktu_akses FROM `log_activity` WHERE kelas_id = (SELECT kelas.id FROM kelas WHERE kelas.code = '$kelas_kode') AND user_id = (SELECT users.id FROM users WHERE username = '$username') GROUP BY url ORDER BY user_id")->result_array();
    }
}
