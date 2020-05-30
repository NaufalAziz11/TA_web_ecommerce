<?php

class Admin_model extends CI_Model
{
    public function tampil_user()
    {
        return $this->db->get('tb_user');
    }
    public function tambah_user($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function tampil_userBylevel()
    {
        return $this->db->get_where('tb_user', ['level_id' => 1])->row_array();
    }
    public function tampil_userById($id_user)
    {
        return $this->db->get_where('tb_user', ['id_user' => $id_user])->row_array();
    }
    public function deleteUser($data, $table)
    {
        $this->db->where($data);
        $this->db->delete($table);
    }
}
