<?php

class LogModel extends CI_Model
{
    /**
     * save log siswa
     * 
     * @param user_id
     * @param url
     * @param from_url
     * @param action
     * @return
     */
    public function saveLog($data, $kode_kelas, $kode_materi)
    {
        $kelas_id = null;
        $materi_id = null;
        if ($kode_kelas && $kode_materi) {
            $kelas_id = $this->db->where('code', $kode_kelas)->limit(1)->get('kelas')->row_array()['id'];
            $materi_id = $this->db->where('kode', $kode_materi)->limit(1)->get('materi')->row_array()['id'];
        }

        $dataa = array(
            'user_id' => $data['user_id'],
            'url' => $data['url'],
            'from_url' => $data['from_url'],
            'action' => $data['action'],
            'kelas_id' => $kelas_id,
            'materi_id' => $materi_id
        );

        $this->db->insert('log_activity', $dataa);
    }

    /**
     * get materi and kelas id by materi_kode
     * 
     * @param materi_kode
     * @return kelas_id
     * @return materi_id
     */
    public function getByMateriKode($materi_kode)
    {
        $kode = $this->db->select('kelas.code as kode_kelas, materi.kode as kode_materi')->from('materi')->join('kelas', 'materi.kelas_id = kelas.id')->where('materi.kode', $materi_kode)->limit(1)->get()->row_array();
        return $kode;
    }
}
