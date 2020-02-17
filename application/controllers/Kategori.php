<?php

class Kategori extends CI_Controller
{
    public function peralatan()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' =>
        $this->session->userdata('email')])->row_array();




        $data['judul'] = 'Halaman Kategori Peralatan';

        $this->load->view('templates/header', $data);
        $this->load->view('kategori/peralatan', $data);
        $this->load->view('templates/footer');
    }
}
