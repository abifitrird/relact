<?php

class SoalModel extends CI_Model
{
    /**
     * get soal pg and order by random
     * 
     * @param kode_materi
     * @return data
     */
    public function getSoalPGRandom($kode_materi)
    {
        $soal = $this->db->where('materi_kode', $kode_materi)
            ->where('tipe', 'pg')
            ->order_by('id', 'RANDOM')
            ->get('soal')
            ->result_array();

        $kirim = array();

        foreach ($soal as $soa) {
            $kirim[] = array(
                'id' => $soa['id'],
                'materi_kode' => $soa['materi_kode'],
                'tipe' => $soa['tipe'],
                'pertanyaan' => $soa['pertanyaan'],
                'bloom' => $soa['bloom'],
                'pilihan' => $this->getPilihanJawabanPG($soa['id']),
                'jawaban_user' => null
            );
        }

        return $kirim;
    }

    /**
     * get pilihan jawaban pg
     * 
     * @param soal_id
     * @return array of data
     */
    private function getPilihanJawabanPG($soal_id)
    {
        return $this->db->where('soal_id', $soal_id)
            ->order_by('id', 'RANDOM')
            ->get('pilihan_soal')
            ->result_array();
    }

    /**
     * save jawaban user to database
     * 
     * @param user_id
     * @param data
     * @return
     */
    public function saveJawabanUser($user_id, $soal_id, $pilihan_id)
    {
        $query_where = $this->db->where('user_id', $user_id)->where('soal_id', $soal_id)->get('log_answer')->num_rows();
        if ($query_where == 0) {
            $this->db->set('user_id', $user_id)->set('soal_id', $soal_id)->set('pilihan_soal_id', $pilihan_id)->insert('log_answer');
        } else {
            $this->db->where('user_id', $user_id)->where('soal_id', $soal_id)->set('pilihan_soal_id', $pilihan_id)->update('log_answer');
        }
    }

    /**
     * save jawaban esai to database
     * 
     * @param user_id
     * @param soal_id
     * @param jawaban
     * @return
     */
    public function saveJawabanEsai($user_id, $soal_id, $jawaban)
    {
        $query_where = $this->db->where('user_id', $user_id)->where('soal_id', $soal_id)->get('log_answer_essay')->num_rows();
        if ($query_where == 0) {
            $this->db->set('user_id', $user_id)->set('soal_id', $soal_id)->set('jawaban', $jawaban)->insert('log_answer_essay');
        } else {
            $this->db->where('user_id', $user_id)->where('soal_id', $soal_id)->set('jawaban', $jawaban)->update('log_answer_essay');
        }
    }

    /**
     * get soal esai random
     * 
     * @param kode_materi
     * @return data
     */
    public function getSoalEsaiRandom($kode_materi)
    {
        return $this->db->where('materi_kode', $kode_materi)
            ->where('tipe', 'esai')
            ->order_by('id', 'RANDOM')
            ->get('soal')
            ->result_array();
    }

    /**
     * calculate nilai from jawaban PG
     * 
     * @param user_id
     * @return boolean
     */
    public function calculateNilaiByPG($user_id, $kode_materi)
    {
        $pg = $this->db->query("SELECT *, (SELECT bobot FROM soal WHERE soal.id = soal_id) as bobot, (SELECT pilihan_soal_id FROM kunci_soal WHERE kunci_soal.soal_id = log_answer.soal_id) as kunci_id, (SELECT id FROM materi WHERE kode = '$kode_materi') as materi_id FROM log_answer WHERE user_id = $user_id AND soal_id = (SELECT id FROM soal WHERE soal.id = soal_id AND materi_kode = '$kode_materi')")->result_array();

        $skor = 0;
        foreach ($pg as $pp) {
            if ($pp['kunci_id'] == $pp['pilihan_soal_id']) {
                $skor += $pp['bobot'];
            }
        }
        $data = array(
            'user_id' => $user_id,
            'materi_id' => $pg[0]['materi_id'],
            'skor' => $skor
        );
        if (!$this->db->insert('nilai', $data)) {
            return false;
        }
        return $skor;
    }
}
