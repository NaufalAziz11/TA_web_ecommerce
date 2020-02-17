<?php

class Produk extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['judul'] = 'Halaman Pemesanan';

        $this->load->view('templates/header', $data);
        $this->load->view('produk/index', $data);
        $this->load->view('templates/footer', $data);
    }
    public function beli()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['judul'] = 'Halaman Pemesanan';

        $this->load->view('templates/header', $data);
        $this->load->view('produk/beli', $data);
        $this->load->view('templates/footer', $data);
    }
}
