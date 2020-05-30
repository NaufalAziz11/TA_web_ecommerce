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
        $email =  $this->session->userdata('email');
        $data['user_login'] = $this->User_model->tampiluserByEmail($email);


        $data['kategori'] = $this->Produk_model->tampil_kategori()->result();
        $data['judul'] = 'Halaman Admin';
        $this->load->view('templates_admin/header_admin', $data);
        $this->load->view('templates_admin/sidebar_admin', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates_admin/footer_admin');
    }

    public function data_produk()
    {
        $email =  $this->session->userdata('email');
        $data['user_login'] = $this->User_model->tampiluserByEmail($email);

        //$id =  $this->session->userdata('id_barang');
        $data['barang'] = $this->Produk_model->tampil_barang();
        //$data2['barang'] = $this->Produk_model->getProdukById($id);

        $data['kategori'] = $this->Produk_model->tampil_kategori()->result();
        $data['judul'] = 'Halaman Admin';
        $this->load->view('templates_admin/header_admin', $data);
        $this->load->view('templates_admin/sidebar_admin', $data);
        $this->load->view('admin/data_produk', $data);
        $this->load->view('templates_admin/footer_admin');
    }

    // public function getUbah()
    // {
    //     echo json_encode($this->model('Produk_model')->getProdukById($_POST['id']));
    // }

    public function invoice()
    {
        $email =  $this->session->userdata('email');
        $data['user_login'] = $this->User_model->tampiluserByEmail($email);



        $data['barang'] = $this->Produk_model->tampil_barang();
        $data['kategori'] = $this->Produk_model->tampil_kategori()->result();
        $data['invoice'] = $this->Order_model->tampil_invoice($email);
        $data['bukti'] = $this->Order_model->tampil_bukti()->result();
        $data['judul'] = 'Halaman Admin';
        $this->load->view('templates_admin/header_admin', $data);
        $this->load->view('templates_admin/sidebar_admin', $data);
        $this->load->view('admin/invoice', $data);
        $this->load->view('templates_admin/footer_admin');
    }
    public function detail_pesan($id_invoice)
    {
        $email =  $this->session->userdata('email');
        $data['user_login'] = $this->User_model->tampiluserByEmail($email);
        $data['barang'] = $this->Produk_model->tampil_barang();
        $data['kategori'] = $this->Produk_model->tampil_kategori()->result();
        $data['judul'] = 'Halaman Admin';
        $data['invoice'] = $this->Order_model->ambil_id_inv($id_invoice);
        $data['pesanan'] = $this->Order_model->ambil_id_pesanan($id_invoice);



        $this->load->view('templates_admin/header_admin', $data);
        $this->load->view('templates_admin/sidebar_admin', $data);
        $this->load->view('admin/detail_pesan', $data);
        $this->load->view('templates_admin/footer_admin');
    }

    public function tambah_barang()
    {
        $nama_barang = $this->input->post('nama_barang');
        $kategori = $this->input->post('id_kategori');
        $deskripsi = $this->input->post('deskripsi');
        $stok = $this->input->post('stok');
        $harga = $this->input->post('harga');
        $image = $_FILES['gambar']['name'];
        if ($image) {
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/images/produk';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar gagal diupload";
            } else {
                $image = $this->upload->data('file_name');
            }
        }
        $data = array(
            'nama_barang'   => $nama_barang,
            'id_kategori'   => $kategori,
            'deskripsi'     => $deskripsi,
            'stok'          => $stok,
            'harga'         => $harga,
            'gambar'        => $image

        );
        $this->Produk_model->tambah_barang($data, 'tb_barang');
        redirect('admin/data_produk/index');
    }

    public function edit_produk()
    {
        $id_barang = $this->input->post('id_barang');
        $nama_barang = $this->input->post('nama_barang');
        $kategori = $this->input->post('id_kategori');
        $deskripsi = $this->input->post('deskripsi');
        $stok = $this->input->post('stok');
        $harga = $this->input->post('harga');
        $image = $_FILES['gambar']['name'];
        if ($image) {
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/images/produk';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $data = array(
            'id_barang'     => $id_barang,
            'nama_barang'   => $nama_barang,
            'id_kategori'   => $kategori,
            'deskripsi'     => $deskripsi,
            'stok'          => $stok,
            'harga'         => $harga,
            'gambar'        => $image

        );
        $this->Produk_model->editBarang($data, 'tb_barang');
        redirect('admin/data_produk/index');
    }
    public function delete_barang($id)
    {
        $data = array('id_barang' => $id);
        $this->Produk_model->deleteBarang($data, 'tb_barang');
        redirect('admin/data_produk/index');
    }

    public function update_invoice()
    {
        $id_invoice = $this->input->post('id_invoice');
        $status_pengiriman = $this->input->post('status_pengiriman');

        $data = array(
            'id_invoice' => $id_invoice,
            'status_pengiriman' => $status_pengiriman
        );
        $this->db->where('id_invoice', $this->input->post('id_invoice'));
        $this->db->update('tb_invoice', $data);
        // $this->Order_model->update_invoice($data, 'tb_invoice');
        redirect('admin/invoice/index');
    }
}
