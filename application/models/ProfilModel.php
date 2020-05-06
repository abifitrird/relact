<?php

class ProfilModel extends CI_Model
{
    public function updateProfil($data)
    {
        $res = false;
        if ($this->db->where('user_id', $data['user_id'])->get('detail_user')->num_rows() > 0) {
            $res = $this->db->update('detail_user', $data);
        } else {
            $res = $this->db->insert('detail_user', $data);
        }

        return $res;


        // $this->db->set('user_id', $data['user_id']);
        // $this->db->set('nama_lengkap', $data['nama_lengkap']);
        // $this->db->set('nomor_induk', $data['nomor_induk']);
        // $this->db->set('sekolah_id', $data['sekolah_id']);
        // $this->db->set('alamat', $data['alamat']);
        // $this->db->set('no_hp', $data['no_hp']);
        // $this->db->where('user_id', $data['user_id']);
        // if ($this->db->update('detail_user')) {
        //     return true;
        // }
        // return false;
    }
    public function getProfil($id)
    {
        $this->db->select('nomor_induk, nama_lengkap, nama_sekolah, detail_user.alamat, no_hp');
        $this->db->from('detail_user');
        $this->db->join('sekolah', 'detail_user.sekolah_id = sekolah.id', 'left');
        $this->db->where('user_id', $id);
        $data = $this->db->get();
        return $data->row_array();
    }

    /**
     * get list of school
     * 
     * @param
     * @return data
     */
    public function getListOfSchools()
    {
        $data = $this->db->get('sekolah');
        return $data->result_array();
    }
}
