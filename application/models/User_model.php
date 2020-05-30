<?php

class User_model extends CI_Model
{
    public function tampil_user()
    {
        return $this->db->get('tb_user');
    }
    public function tampiluserByEmail($email)
    {
        return $this->db->get_where('tb_user', ['email' => $email])->row_array();
    }
    public function tampildetailuserByEmail($email)
    {
        return $this->db->get_where('tb_detail_user', ['email' => $email])->row_array();
    }
    public function detail_user($data, $table)
    {
        $this->db->where('email', $this->input->post('email'));
        $this->db->update($table, $data);
    }
    public function tambah_alamat($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function edit_alamat($data, $table)
    {
        $this->db->where('email', $this->input->post('email'));
        $this->db->update($table, $data);
    }
    public function tampil_alamat($email)
    {
        return $this->db->get_where('tb_alamat', ['email' => $email])->row_array();
    }
}
