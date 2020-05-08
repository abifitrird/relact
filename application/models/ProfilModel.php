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
     * check password lama
     * 
     * @param user_id
     * @return password_lama
     */
    public function checkPassword($user_id)
    {
        return $this->db->where('id', $user_id)->select('password')->get('users')->row_array()['password'];
    }

    /**
     * change password
     * 
     * @param user_id
     * @param password_baru
     * @return boolean
     */
    public function changePassword($user_id, $baru)
    {
        $this->db->set('password', $baru)->where('id', $user_id)->update('users');
        if ($this->db->affected_rows() == 0) {
            return false;
        }

        return true;
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
