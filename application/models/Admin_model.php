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
}
