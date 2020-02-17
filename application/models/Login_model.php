<?php

class Login_model extends CI_model{
    public function getUserById($id){
        return $this->db->get_where('tb_user', ['id' => $id])->row_array();
    }
}