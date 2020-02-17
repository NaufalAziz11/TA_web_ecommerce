<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {

            $data['judul'] = 'Halaman Login';

            $this->load->view('templates/headerlogin', $data);
            $this->load->view('login/index', $data);
            $this->load->view('templates/footerlogin', $data);
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_user', ['email' => $email])->row_array();
        //jika user ada
        if ($user) {
            //jika user aktif
            if ($user['id_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    redirect('home');
                } else {
                    $this->session->set_flashdata('message', '<div class = "alert alert-danger" role="alert">Password Salah </div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class = "alert alert-danger" role="alert">Email belum diaktivasi</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class = "alert alert-danger" role="alert">Email Belum terdaftar</div>');
            redirect('login');
        }
    }


    public function daftar()
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


        if ($this->form_validation->run() == false) {

            $data['judul'] = 'Halaman Daftar';

            $this->load->view('templates/headerlogin', $data);
            $this->load->view('login/daftar', $data);
            $this->load->view('templates/footerlogin', $data);
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'level' => 2,
                'id_active' => 1,
                'date_created' => time()

            ];
            $this->db->insert('tb_user', $data);
            $this->session->set_flashdata('message', '<div class = "alert alert-success" role="alert">Selamat akun anda sudah terdaftar</div>');
            redirect('login');
        }
    }
    public function verifikasi()
    {
        $data['judul'] = 'Halaman Verifikasi';


        $this->load->view('templates/headerlogin', $data);
        $this->load->view('login/verifikasi', $data);
        $this->load->view('templates/footerlogin', $data);
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        redirect('home');
    }
}
