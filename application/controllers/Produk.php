<?php

class Produk extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user1', ['email' =>
        $this->session->userdata('email')])->row_array();

        //$data['barang'] = $this->produk_model->tampil_barang()->result();
        $data['judul'] = 'Halaman Pemesanan';

        $this->load->view('templates/header', $data);
        $this->load->view('produk/index', $data);
        $this->load->view('templates/footer');
    }
    public function beli()
    {
        $data['user'] = $this->db->get_where('tb_user1', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['judul'] = 'Halaman Pemesanan';

        $this->load->view('templates/header', $data);
        $this->load->view('produk/beli', $data);
        $this->load->view('templates/footer');
    }
    public function keranjang()
    {
        $data['user'] = $this->db->get_where('tb_user1', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['judul'] = 'Halaman Keranjang';

        $this->load->view('templates/header', $data);
        $this->load->view('produk/keranjang', $data);
        $this->load->view('templates/footer');
    }
    public function konfirmasi1()
    {
        $data['user'] = $this->db->get_where('tb_user1', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['judul'] = 'Halaman Konfirmasi Pembayaran';

        $this->load->view('templates/header', $data);
        $this->load->view('produk/konfirmasi1', $data);
        $this->load->view('templates/footer_konfirmasi');
    }
    public function konfirmasi2()
    {
        $data['user'] = $this->db->get_where('tb_user1', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['judul'] = 'Halaman Konfirmasi Pembayaran';

        $this->load->view('templates/header', $data);
        $this->load->view('produk/konfirmasi2', $data);
        $this->load->view('templates/footer_konfirmasi');
    }

    public function invoice()
    {
        $data['user'] = $this->db->get_where('tb_user1', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['judul'] = 'Halaman Konfirmasi Pembayaran';

        $this->load->view('templates/header', $data);
        $this->load->view('produk/invoice', $data);
        $this->load->view('templates/footer_konfirmasi');
    }
    public function detail_pesan()
    {
        $data['user'] = $this->db->get_where('tb_user1', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['judul'] = 'Halaman Konfirmasi Pembayaran';

        $this->load->view('templates/header', $data);
        $this->load->view('produk/detail_pesan', $data);
        $this->load->view('templates/footer_konfirmasi');
    }
    public function status_pesanan()
    {
        $data['user'] = $this->db->get_where('tb_user1', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['judul'] = 'Halaman Konfirmasi Pembayaran';

        $this->load->view('templates/header', $data);
        $this->load->view('produk/status_pesanan', $data);
        $this->load->view('templates/footer_konfirmasi');
    }
}
