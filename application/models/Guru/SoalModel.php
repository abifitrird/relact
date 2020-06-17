<?php

class SoalModel extends CI_Model
{
    /**
     * get soal by kode materi from database
     * 
     * @param kode_materi
     */
    public function getSoalByKodeMateri($kode_materi)
    {
        $data = $this->db->select('soal.id, soal. materi_kode, soal.tipe, soal.pertanyaan, (SELECT judul FROM sub_materi WHERE sub_materi.id = soal.sub_id) as judul_sub, soal.bobot, (SELECT pilihan_soal.pilihan FROM pilihan_soal JOIN kunci_soal ON pilihan_soal.id = kunci_soal.pilihan_soal_id WHERE soal.id = pilihan_soal.soal_id) as pilihan')
            ->where('materi_kode', $kode_materi)
            ->get('soal');
        return $data->result_array();
    }

    /**
     * add soal
     * 
     * @param kode_materi $kode_materi
     * @return boolean success/failed
     */
    public function addSoal($data)
    {
        return $this->db->insert('soal', $data);
    }

    /**
     * get Soal by Id
     * 
     * @param soal_id
     * @return data
     */
    public function getSoalById($soal_id)
    {
        $data = $this->db->where('id', $soal_id)->get('soal');
        return $data->row_array();
    }

    /**
     * save pilihan jawaban to table pilihan_soal
     * 
     * @param data
     * @param soal_id
     * @return data
     */
    public function savePilihanJawabanBySoalId($soal_id, $data)
    {
        $pilihan = $data['pilihan'];
        $kunci = $data['kunci'];
        $id = $data['id'];
        $i = 0;
        $success_response = false;
        foreach ($pilihan as $dat) {
            $kirim = array(
                'soal_id' => $soal_id,
                'pilihan' => $dat,
                'id' => $id[$i] ? $id[$i] : null,
            );
            if ($kirim['id']) {
                $this->db->where('id', $kirim['id'])->update('pilihan_soal', $kirim);
                if ($this->db->affected_rows() > 0) {
                    $success_response = true;
                }
            } else {
                if ($this->db->insert('pilihan_soal', $kirim)) {
                    $success_response = true;
                }
            }

            if ($kunci[$i]) {
                $pilihan_id = $this->db->where('soal_id', $soal_id)
                    ->order_by('id', 'desc')
                    ->limit(1)
                    ->get('pilihan_soal');

                $pilihan_id = $pilihan_id->row_array();

                $kirim_kunci = array(
                    'soal_id' => $soal_id,
                    'pilihan_soal_id' => $id[$i] ? $id[$i] : $pilihan_id['id']
                );

                if ($this->db->where('soal_id', $soal_id)->get('kunci_soal')->num_rows() > 0) {
                    $get_kunci = $this->db->where('soal_id', $soal_id)->get('kunci_soal')->row_array();
                    $this->db->delete('kunci_soal', ['id' => $get_kunci['id']]);
                    $this->db->insert('kunci_soal', $kirim_kunci);
                } else {
                    $this->db->insert('kunci_soal', $kirim_kunci);
                }
            }
            $i++;
        }
    }

    /**
     * get Pilihan jawban and kunci by Soal id
     * 
     * @param soal_id
     * @return data
     */
    public function getPilihanJawabanBySoalId($soal_id)
    {
        $pilihan = $this->db->select('pilihan_soal.id, pilihan_soal.soal_id, pilihan_soal.pilihan, kunci_soal.id as kunci_id')
            ->from('pilihan_soal')
            ->join('kunci_soal', 'pilihan_soal.id = kunci_soal.pilihan_soal_id', 'left')
            ->where('pilihan_soal.soal_id', $soal_id)
            ->get();

        return $pilihan = $pilihan->result_array();
    }

    /**
     * update Soal
     * 
     * @param soal_id
     * @param pertanyaan
     * @return boolean
     */
    public function updateSoal($soal_id, $pertanyaan)
    {
        $this->db->set('pertanyaan', $pertanyaan)->where('id', $soal_id)->update('soal');
        if ($this->db->affected_rows() == 0) {
            return false;
        }

        return true;
    }

    /**
     * delete Soal
     * 
     * @param soal_id
     * @return boolean
     */
    public function deleteSoal($soal_id)
    {
        $this->db->where('id', $soal_id)->delete('soal');
        if ($this->db->affected_rows() == 0) {
            return false;
        }

        return true;
    }

    /**
     * delete pilihan soal by pilihan_Id
     * 
     * @param pilihan_id
     * @return boolean
     */
    public function deletePilihanSoal($pilihan_id)
    {
        $this->db->where('id', $pilihan_id)->delete('pilihan_soal');
        if ($this->db->affected_rows() == 0) {
            return false;
        }

        return true;
    }
}
