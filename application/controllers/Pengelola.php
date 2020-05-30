<?php

class Pengelola extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
    }



    public function index()
    {

        $email =  $this->session->userdata('email');
        $data['user_login'] = $this->User_model->tampiluserByEmail($email);

        $data['kategori'] = $this->Produk_model->tampil_kategori()->result();
        $data['judul'] = 'Halaman Pengelola';
        $this->load->view('templates_admin/header_admin', $data);
        $this->load->view('templates_admin/sidebar_admin', $data);
        $this->load->view('pengelola/index', $data);
        $this->load->view('templates_admin/footer_admin');
    }
    public function data_user()
    {
        $email =  $this->session->userdata('email');
        $data['user_login'] = $this->User_model->tampiluserByEmail($email);

        $data['kategori'] = $this->Produk_model->tampil_kategori()->result();
        $data['user'] = $this->Admin_model->tampil_user()->result();
        // $data['userid'] = $this->Admin_model->tampil_userById()$id_user;
        $data['judul'] = 'Halaman Pengelola';
        $this->load->view('templates_admin/header_admin', $data);
        $this->load->view('templates_admin/sidebar_admin', $data);
        $this->load->view('pengelola/data_user', $data);
        $this->load->view('templates_admin/footer_admin');
    }

    public function data_produk()
    {
        $email =  $this->session->userdata('email');
        $data['user_login'] = $this->User_model->tampiluserByEmail($email);

        $data['barang'] = $this->Produk_model->tampil_barang();
        $data['kategori'] = $this->Produk_model->tampil_kategori()->result();
        $data['judul'] = 'Halaman Pengelola';
        $this->load->view('templates_admin/header_admin', $data);
        $this->load->view('templates_admin/sidebar_admin', $data);
        $this->load->view('pengelola/data_produk', $data);
        $this->load->view('templates_admin/footer_admin');
    }
    public function laporan()
    {
        $email =  $this->session->userdata('email');
        $data['user_login'] = $this->User_model->tampiluserByEmail($email);

        $data['barang'] = $this->Produk_model->tampil_barang();
        $data['penjualan'] = $this->Order_model->tampil_penjualan();
        $data['kategori'] = $this->Produk_model->tampil_kategori()->result();
        $data['judul'] = 'Halaman Pengelola';
        $this->load->view('templates_admin/header_admin', $data);
        $this->load->view('templates_admin/sidebar_admin', $data);
        $this->load->view('pengelola/laporan', $data);
        $this->load->view('templates_admin/footer_admin');
    }
    public function cetak()
    {
        $email =  $this->session->userdata('email');
        $data['user_login'] = $this->User_model->tampiluserByEmail($email);

        $data['barang'] = $this->Produk_model->tampil_barang();
        $data['penjualan'] = $this->Order_model->tampil_penjualan();
        $data['kategori'] = $this->Produk_model->tampil_kategori()->result();
        $data['judul'] = 'Halaman Pengelola';
        $this->load->view('templates_admin/header_admin', $data);
        // $this->load->view('templates_admin/sidebar_admin', $data);
        $this->load->view('pengelola/cetak', $data);
        $this->load->view('templates_admin/footer_admin');
    }

    public function tambah_user()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[tb_user.email]', [
            'is_unique' => 'email / nomor hp sudah digunakan'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[password2]', [

            'matches' => 'password tidak cocok',
            'min_length' => 'password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');



        $email = $this->input->post('email', true);
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($email),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'image' => 'default.png',
            'level_id' => 1,
            'is_active' => 0,
            'date_created' => time()

        ];

        //token
        $token = base64_encode(openssl_random_pseudo_bytes(32));
        $user_token = [
            'email' => $email,
            'token' => $token,
            'date_created' => time()
        ];
        $this->db->insert('tb_user', $data);
        $this->db->insert('user_token', $user_token);

        $this->_sendEmail($token, 'verifikasi');

        $this->session->set_flashdata('message', '<div class = "alert alert-success" role="alert">Selamat akun sudah terdaftar. Tolong Aktivasi Akun terlebih dahulu</div>');
        redirect('pengelola/data_user');
    }

    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'kehak260@gmail.com',
            'smtp_pass' => 'abogoboga',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->email->initialize($config);
        $this->load->library('email', $config);
        $this->email->from('kehak260@gmail.com', 'Kios Anyar Tani');
        $this->email->to($this->input->post('email'));

        if ($type == 'verifikasi') {
            $this->email->subject('Verifikasi Akun');
            $this->email->message('Klik link untuk verifikasi :
                <a href="' . base_url() . 'login/verifikasi?email=' .
                $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');
        } else if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('Klik link untuk reset password :
                <a href="' . base_url() . 'login/reset_password?email=' .
                $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
    public function verifikasi()
    {
        //$data['judul'] = 'Halaman Verifikasi';

        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->User_model->tampiluserByEmail($email);


        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])
                ->row_array();

            if ($user_token) {
                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('tb_user');
                    $this->db->delete('user_token', ['email' => $email]);
                    $this->session->set_flashdata('message', '<div class="alert alert-success"
                    role=alert">' .  $email . ' Berhasil aktivasi. Silahkan login </div>');
                    redirect('pengelola/data_user');
                } else {

                    $this->db->delete('tb_user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);


                    $this->session->set_flashdata('message', '<div class="alert alert-danger"
                    role=alert">Gagal aktivasi akun! Token Expired </div>');
                    redirect('pengelola/data_user');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger"
               role=alert">Gagal aktivasi akun! Salah Token </div>');
                redirect('pengelola/data_user');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger"
               role=alert">Gagal aktivasi akun! Salah Email </div>');
            redirect('pengelola/data_user');
        }

        // $this->load->view('templates/headerlogin', $data);
        // $this->load->view('login/verifikasi', $data);
        // $this->load->view('templates/footerlogin', $data);
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
        redirect('Pengelola/data_produk/index');
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
        redirect('Pengelola/data_produk/index');
    }
    public function delete_barang($id)
    {
        $data = array('id_barang' => $id);
        $this->Produk_model->deleteBarang($data, 'tb_barang');
        redirect('Pengelola/data_produk/index');
    }
    public function delete_user($email)
    {
        $data = array('email' => $email);
        $this->Admin_model->deleteUser($data, 'tb_user');
        redirect('Pengelola/data_user/index');
    }
}
