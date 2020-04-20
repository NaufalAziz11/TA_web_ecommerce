<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }



    public function index()
    {

        $data['user_login'] = $this->db->get_where('tb_user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['kategori'] = $this->Produk_model->tampil_kategori()->result();
        $data['judul'] = 'Halaman Admin';
        $this->load->view('templates_admin/header_admin', $data);
        $this->load->view('templates_admin/sidebar_admin', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates_admin/footer_admin');
    }
    public function data_user()
    {
        $data['user_login'] = $this->db->get_where('tb_user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['kategori'] = $this->Produk_model->tampil_kategori()->result();
        $data['user'] = $this->Admin_model->tampil_user()->result();
        $data['judul'] = 'Halaman Admin';
        $this->load->view('templates_admin/header_admin', $data);
        $this->load->view('templates_admin/sidebar_admin', $data);
        $this->load->view('admin/data_user', $data);
        $this->load->view('templates_admin/footer_admin');
    }
    public function data_produk()
    {
        $data['user_login'] = $this->db->get_where('tb_user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['barang'] = $this->Produk_model->tampil_barang()->result();
        $data['kategori'] = $this->Produk_model->tampil_kategori()->result();
        $data['judul'] = 'Halaman Admin';
        $this->load->view('templates_admin/header_admin', $data);
        $this->load->view('templates_admin/sidebar_admin', $data);
        $this->load->view('admin/data_produk', $data);
        $this->load->view('templates_admin/footer_admin');
    }
    public function invoice()
    {
        $data['user_login'] = $this->db->get_where('tb_user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['barang'] = $this->Produk_model->tampil_barang()->result();
        $data['kategori'] = $this->Produk_model->tampil_kategori()->result();
        $data['judul'] = 'Halaman Admin';
        $this->load->view('templates_admin/header_admin', $data);
        $this->load->view('templates_admin/sidebar_admin', $data);
        $this->load->view('admin/invoice', $data);
        $this->load->view('templates_admin/footer_admin');
    }
    public function detail_pesan()
    {
        $data['user_login'] = $this->db->get_where('tb_user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['barang'] = $this->Produk_model->tampil_barang()->result();
        $data['kategori'] = $this->Produk_model->tampil_kategori()->result();
        $data['judul'] = 'Halaman Admin';
        $this->load->view('templates_admin/header_admin', $data);
        $this->load->view('templates_admin/sidebar_admin', $data);
        $this->load->view('admin/detail_pesan', $data);
        $this->load->view('templates_admin/footer_admin');
    }
    public function laporan()
    {
        $data['user_login'] = $this->db->get_where('tb_user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['barang'] = $this->Produk_model->tampil_barang()->result();
        $data['kategori'] = $this->Produk_model->tampil_kategori()->result();
        $data['judul'] = 'Halaman Admin';
        $this->load->view('templates_admin/header_admin', $data);
        $this->load->view('templates_admin/sidebar_admin', $data);
        $this->load->view('admin/laporan', $data);
        $this->load->view('templates_admin/footer_admin');
    }
    public function cetak()
    {
        $data['user_login'] = $this->db->get_where('tb_user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['barang'] = $this->Produk_model->tampil_barang()->result();
        $data['kategori'] = $this->Produk_model->tampil_kategori()->result();
        $data['judul'] = 'Halaman Admin';
        $this->load->view('templates_admin/header_admin', $data);
        $this->load->view('templates_admin/sidebar_admin', $data);
        $this->load->view('admin/cetak', $data);
        $this->load->view('templates_admin/footer_admin');
    }
    public function tambah_barang()
    {
        $nama_barang = $this->input->post('nama_barang');
        $kategori = $this->input->post('id_kategori');
        $deskripsi = $this->input->post('deskripsi');
        $stok = $this->input->post('stok');
        $harga = $this->input->post('harga');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar = '') { } else {
            $config['upload_path'] = './images/produk';
            $config['allowed_types'] = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar gagal diupload";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            'nama_barang'   => $nama_barang,
            'id_kategori'   => $kategori,
            'deskripsi'     => $deskripsi,
            'stok'          => $stok,
            'harga'         => $harga,
            'gambar'        => $gambar

        );
        $this->Produk_model->tambah_barang($data, 'tb_barang');
        redirect('admin/data_produk/index');
    }
}
