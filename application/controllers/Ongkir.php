
<?php

class Ongkir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $email =  $this->session->userdata('email');
        $data['user_login'] = $this->User_model->tampiluserByEmail($email);
        $data['alamat'] = $this->User_model->tampil_alamat($email);
        $data['judul'] = 'Halaman Profile User';

        $this->form_validation->set_rules('email', 'email', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('user/ongkir', $data);
            $this->load->view('templates/footer_ongkir');
        } else {
            $email = $this->input->post('email');
            $nama = $this->input->post('nama_penerima');
            $no_telepon = $this->input->post('no_telepon');
            $jenis_alamat = $this->input->post('jenis_alamat');
            $provinsi = $this->input->post('provinsi');
            $kota = $this->input->post('kota');
            $alamat_lengkap = $this->input->post('alamat_lengkap');

            $data = array(
                'nama_penerima'     => $nama,
                'email'             => $email,
                'no_telepon'        => $no_telepon,
                'jenis_alamat'      => $jenis_alamat,
                'provinsi'          => $provinsi,
                'kota'              => $kota,
                'alamat_lengkap'    => $alamat_lengkap
            );

            $this->session->set_userdata($data);
            $this->User_model->tambah_Alamat($data, 'tb_alamat');
            redirect('produk/pembayaran');
        }
    }
    public function edit_ongkir()
    {
        $email =  $this->session->userdata('email');
        $data['user_login'] = $this->User_model->tampiluserByEmail($email);
        $data['alamat'] = $this->User_model->tampil_alamat($email);
        $data['judul'] = 'Halaman Profile User';

        $this->form_validation->set_rules('email', 'email', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('user/edit_ongkir', $data);
            $this->load->view('templates/footer_ongkir');
        } else {
            $email = $this->input->post('email');
            $nama = $this->input->post('nama_penerima');
            $no_telepon = $this->input->post('no_telepon');
            $jenis_alamat = $this->input->post('jenis_alamat');
            $provinsi = $this->input->post('provinsi');
            $kota = $this->input->post('kota');
            $alamat_lengkap = $this->input->post('alamat_lengkap');

            $data = array(
                'nama_penerima'     => $nama,
                'email'             => $email,
                'no_telepon'        => $no_telepon,
                'jenis_alamat'      => $jenis_alamat,
                'provinsi'          => $provinsi,
                'kota'              => $kota,
                'alamat_lengkap'    => $alamat_lengkap
            );

            $this->session->set_userdata($data);
            $this->User_model->edit_Alamat($data, 'tb_alamat');
            redirect('produk/pembayaran');
        }
    }

    public function get_provinsi()
    {
        //Mendapatkan semua propinsi
        $provinces = $this->rajaongkir->province();
        // echo $provinces;
        $this->output->set_content_type('application/json')->set_output($provinces);
    }

    public function get_kota($provinsi)
    {
        //Mendapatkan semua propinsi
        $kota = $this->rajaongkir->city($provinsi);
        $this->output->set_content_type('application/json')->set_output($kota);
    }


    public function get_biaya($asal, $tujuan, $berat, $kurir)
    {
        //Mendapatkan data ongkos kirim
        $ongkir = $this->rajaongkir->cost($asal, $tujuan, $berat, $kurir);
        $this->output->set_content_type('application/json')->set_output($ongkir);
    }
}
