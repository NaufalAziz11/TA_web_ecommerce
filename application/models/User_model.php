<?php

class User_model extends CI_Model
{
    public function tampil_user()
    {
        return $this->db->get('tb_user');
    }
    public function getuserById($email)
    {
        return $this->db->get_where('tb_user', ['email' => $email])->row_array();
    }
    public function detail_user($data, $table)
    {
        $this->db->where('email', $this->input->post('email'));
        $this->db->update($table, $data);
    }
}
