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
    public function keranjang()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['judul'] = 'Halaman Keranjang';

        $this->load->view('templates/header', $data);
        $this->load->view('produk/keranjang', $data);
        $this->load->view('templates/footer', $data);
    }
    public function konfirmasi()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['judul'] = 'Halaman Konfirmasi Pembayaran';

        $this->load->view('templates/header', $data);
        $this->load->view('produk/konfirmasi', $data);
        $this->load->view('templates/footer_konfirmasi', $data);
    }
}
