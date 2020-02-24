<?php

class User extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['judul'] = 'Halaman User';

        $this->load->view('templates/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer_home');
    }
    public function profile()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['judul'] = 'Halaman Profile User';

        $this->load->view('templates/header', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('templates/footer');
    }
    public function alamat()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['judul'] = 'Halaman Profile User';

        $this->load->view('templates/header', $data);
        $this->load->view('user/alamat', $data);
        $this->load->view('templates/footer');
    }
}
