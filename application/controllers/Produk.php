<?php

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index($id)
    {
        $email =  $this->session->userdata('email');
        $data['user_login'] = $this->User_model->tampiluserByEmail($email);

        $data['barang'] = $this->Produk_model->tampilBarangById($id);
        //$data['barang'] = $this->produk_model->tampil_barang()->result();
        $data['judul'] = 'Halaman Pemesanan';

        $this->load->view('templates/header', $data);
        $this->load->view('produk/index', $data);
        $this->load->view('templates/footer');
    }
    public function kategori()
    {
        $email =  $this->session->userdata('email');
        $data['user_login'] = $this->User_model->tampiluserByEmail($email);

        //$data['barang'] = $this->produk_model->tampil_barang()->result();
        $data['judul'] = 'Halaman Pemesanan';

        $this->load->view('templates/header', $data);
        $this->load->view('produk/index', $data);
        $this->load->view('templates/footer');
    }


    public function tambah_keranjang($id)
    {
        $qty = $this->input->post('qty');
        $barang = $this->Produk_model->find($id);
        $data = array(
            'id'      => $barang->id_barang,
            'qty'     => $qty,
            'price'   => $barang->harga,
            'name'    => $barang->nama_barang,
            'berat'    => $barang->berat,
            'image' => $barang->gambar
        );
        $this->cart->insert($data);
        redirect('user');
    }

    public function detail_keranjang()
    {
        $email =  $this->session->userdata('email');
        $data['user_login'] = $this->User_model->tampiluserByEmail($email);
        $data['total'] = $this->Produk_model->hitungtotal($email);



        $data['judul'] = 'Halaman Keranjang';

        $this->load->view('templates/header', $data);
        $this->load->view('produk/keranjang');
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang($rowid)
    {
        $removed_cart = array(
            'rowid' => $rowid,
            'qty' => 0
        );
        $this->cart->update($removed_cart);
        redirect('produk/detail_keranjang');
    }

    public function pembayaran()
    {
        $email =  $this->session->userdata('email');
        $data['user_login'] = $this->User_model->tampiluserByEmail($email);
        $data['alamat'] = $this->User_model->tampil_alamat($email);
        $data['total'] = $this->Produk_model->hitungtotal($email);

        $data['invoice'] = $this->Order_model->tampil_invoice();

        $data['judul'] = 'Halaman Pemesanan';

        $this->load->view('templates/header', $data);
        $this->load->view('produk/pembayaran', $data);
        $this->load->view('templates/footer_ongkir');
    }



    public function konfirmasi()
    {
        $email =  $this->session->userdata('email');
        $data['user_login'] = $this->User_model->tampiluserByEmail($email);

        $id_invoice =  $this->session->userdata('id_invoice');
        $data['bukti'] = $this->Order_model->tampil_buktiById($id_invoice);
        $data['judul'] = 'Halaman Konfirmasi Pembayaran';

        $this->load->view('templates/header', $data);
        $this->load->view('produk/konfirmasi', $data);
        $this->load->view('templates/footer_konfirmasi');
    }
    public function tambah_bukti()
    {
        $id_invoice = $this->input->post('id_invoice');

        $data = array(
            'id_invoice'   => $id_invoice,

        );

        $this->session->set_userdata($data);
        $this->Order_model->tambah_bukti($data, 'tb_bukti');

        // $this->Order_model->update_invoice($data2, 'tb_invoice');
        redirect('Produk/konfirmasi');
    }
    public function update_bukti()
    {
        $id_invoice = $this->input->post('id_invoice');
        $nama_pengirim = $this->input->post('nama_pengirim');
        $kode = $this->input->post('kode');
        $image = $_FILES['bukti_foto']['name'];
        if ($image) {
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/images/bukti';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('bukti_foto')) {
                echo "Gambar gagal diupload";
            } else {
                $image = $this->upload->data('file_name');
            }
        }
        $data = array(
            'id_invoice'   => $id_invoice,
            'bukti_foto'   => $image,
            'bukti_kode'   => $kode,
            'bukti_pengirim'   => $nama_pengirim,

        );
        $data2 = array(
            'id_invoice'   => $id_invoice,
            'status_pembayaran' => 'Sudah dibayar'

        );
        $this->session->set_userdata($data);
        $this->Order_model->update_bukti($data, 'tb_bukti');
        $this->db->where('id_invoice', $this->input->post('id_invoice'));
        $this->db->update('tb_invoice', $data2);
        redirect('Produk/invoice');
    }


    public function proses_pesanan()
    {
        $email =  $this->session->userdata('email');
        $data['user_login'] = $this->User_model->tampiluserByEmail($email);

        $is_processed = $this->Order_model->tambah_inv();
        if ($is_processed) {
            $this->cart->destroy();
            $this->load->view('templates/header', $data);
            $this->load->view('produk/proses_pesanan');
            $this->load->view('templates/footer_konfirmasi');
        } else {
            echo "Maaf, Pesanan Anda Gagal diproses!";
        }
    }

    public function invoice()
    {
        $email =  $this->session->userdata('email');
        $data['user_login'] = $this->User_model->tampiluserByEmail($email);

        $data['invoice'] = $this->Order_model->tampil_invoice();
        $data['judul'] = 'Halaman Konfirmasi Pembayaran';

        $this->cart->destroy();
        $this->load->view('templates/header', $data);
        $this->load->view('produk/invoice', $data);
        $this->load->view('templates/footer_konfirmasi');
    }


    public function detail_pesan($id_invoice)
    {
        $email =  $this->session->userdata('email');
        $data['user_login'] = $this->User_model->tampiluserByEmail($email);
        $data['ongkir'] = $this->Order_model->tampil_ongkir($email);

        $data['total'] = $this->Produk_model->hitungtotal($email);
        $data['invoice'] = $this->Order_model->ambil_id_inv($id_invoice);
        $data['pesanan'] = $this->Order_model->ambil_id_pesanan($id_invoice);
        $data['judul'] = 'Halaman Konfirmasi Pembayaran';

        $this->load->view('templates/header', $data);
        $this->load->view('produk/detail_pesan', $data);
        $this->load->view('templates/footer_konfirmasi');
    }
    public function status_pesanan($id_invoice)
    {
        $email =  $this->session->userdata('email');
        $data['user_login'] = $this->User_model->tampiluserByEmail($email);
        $data['invoice'] = $this->Order_model->ambil_id_inv($id_invoice);

        $data['judul'] = 'Halaman Konfirmasi Pembayaran';

        $this->load->view('templates/header', $data);
        $this->load->view('produk/status_pesanan', $data);
        $this->load->view('templates/footer_pengiriman');
    }
}
