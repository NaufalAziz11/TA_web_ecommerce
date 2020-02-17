<?php

class Admin extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['judul'] = 'Halaman Admin';
        $this->load->view('admin/index', $data);
    }
}
