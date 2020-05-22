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
            ->order_by(5, 'RANDOM')
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
            ->order_by(2, 'RANDOM')
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
            ->order_by(5, 'RANDOM')
            ->get('soal')
            ->result_array();
    }
}
