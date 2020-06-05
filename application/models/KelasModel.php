<?php

class KelasModel extends CI_Model
{
    public function saveKelas($data)
    {
        if ($this->db->insert('kelas', $data)) {
            return true;
        }
        return false;
    }

    public function getKelas()
    {
        $this->db->select('kelas.id, mapel_id, code, nama, periode, mata_pelajaran.nama_mapel');
        $this->db->from('kelas');
        $this->db->join('mata_pelajaran', 'kelas.mapel_id = mata_pelajaran.id', 'left');
        $data = $this->db->get();
        return $data->result_array();
    }

    /**
     * get Materi by Kelas Id
     * 
     * @param $id kelas_id
     * @return data
     */
    public function getMateriByKodeKelas($kode)
    {
        $this->db->select('id');
        $this->db->where('code', $kode);
        $this->db->limit(1);
        $kelas_id = $this->db->get('kelas');
        $kelas_id = $kelas_id->row_array();
        if (!$kelas_id) {
            return false;
        }
        $kelas_id = $kelas_id['id'];

        $this->db->where('kelas_id', $kelas_id);
        $data = $this->db->get('materi');
        return $data->result_array();
    }

    /**
     * get Materi by id
     * 
     * @param materi_id
     * @return data
     */
    public function getMateriById($id)
    {
        $this->db->where('id', $id);
        $data = $this->db->get('materi');
        return $data->row_array();
    }

    /**
     * get Materi by kode materi
     * 
     * @param kode $materi_kode
     * @return arrayOfMateriTable $data
     */
    public function getMateriByKode($materi_kode)
    {
        $data = $this->db->where('kode', $materi_kode)->get('materi');
        return $data->row_array();
    }

    /**
     * get list submateri by materi_kode
     * @param materi_kode
     * @return data
     */
    public function getSubmateriByKode($materi_kode)
    {
        $data = $this->db->query("SELECT * FROM sub_materi WHERE materi_id = (SELECT id FROM materi WHERE kode = '$materi_kode')");
        // $data = $this->db->where('materi_id', "(SELECT id FROM materi WHERE kode = '$materi_kode')")->get('sub_materi');
        return $data->result_array();
    }

    /**
     * get submateri to show by materi_kode and sub_id
     * @param materi_kode
     * @param sub_id
     * @return data
     */
    public function getSubById($materi_kode, $sub_id)
    {
        return $this->db->query("SELECT * FROM sub_materi WHERE materi_id = (SELECT id FROM materi WHERE kode = '$materi_kode') AND sub_materi.id = $sub_id")->row_array();
    }

    /**
     * save materi by kelas id
     * 
     * @param $data
     * @return true/false
     */
    public function saveMateri($data)
    {
        $kelas_id = $this->db->where('code', $data['kelas_kode'])->get('kelas')->row_array()['id'];
        $dataa = array(
            'kode' => $data['kode'],
            'kelas_id' => $kelas_id,
            'judul' => $data['judul'],
            'deskripsi' => $data['deskripsi'],
            'status' => $data['status']
        );
        return $this->db->insert('materi', $dataa);
    }

    /**
     * save sub materi by materi_kode
     * 
     * @param data
     * @return boolean
     */
    public function saveSubMateri($data)
    {
        $materi_kode = $data['materi_kode'];
        $materi_id = $this->db->where('kode', $materi_kode)->get('materi')->row_array()['id'];
        return $this->db->insert('sub_materi', [
            'materi_id' => $materi_id,
            'judul' => $data['judul'],
            'konten' => $data['konten']
        ]);
    }

    /**
     * update sub materi
     * 
     * @param sub_id
     * @param data
     * @return boolean
     */
    public function updateSubMateri($sub_id, $data)
    {
        $this->db->where('id', $sub_id)->update('sub_materi', $data);
        if ($this->db->affected_rows() == 0) {
            return false;
        }

        return true;
    }

    /**
     * ubah Materi by materi kode
     * 
     * @param data
     * @return boolean
     */
    public function ubahMateri($data)
    {
        $this->db->where('kode', $data['kode'])->update('materi', $data);
        if ($this->db->affected_rows() == 0) {
            return false;
        }
        return true;
    }

    /**
     * delete materi by materi kode
     * 
     * @param materi_kode
     * @return
     */
    public function deleteMateri($kode)
    {
        $this->db->where('kode', $kode)->delete('materi');
        if ($this->db->affected_rows() == 0) {
            return false;
        }

        return true;
    }

    /**
     * delete submateri by materi kode and subid
     * 
     * @param materi_kode
     * @return
     */
    public function deleteSubMateri($kode, $sub_id)
    {
        $this->db->where('id', $sub_id)->delete('sub_materi');
        if ($this->db->affected_rows() == 0) {
            return false;
        }

        return true;
    }
}
