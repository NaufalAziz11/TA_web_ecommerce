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
        $user = $this->User_model->getuserById($email);
        // $user['tb_user'] = $this->db->Login_model->getUserById($email);
        // $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);

        //jika user ada
        if ($user) {
            //jika user aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'level_id' => $user['level_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['level_id'] == 1) {
                        redirect('admin');
                    } else if ($user['level_id'] == 3) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
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
            $email = $this->input->post('email', true);
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'image' => 'default.png',
                'level_id' => 2,
                'is_active' => 0,
                'date_created' => time()

            ];

            $data2 = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'jenis_kelamin' => '',
                'no_telepon' => '',
                'tanggal' => '',
                'image' => 'default.png'

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
            $this->db->insert('tb_detail_user', $data2);

            $this->_sendEmail($token, 'verifikasi');

            $this->session->set_flashdata('message', '<div class = "alert alert-success" role="alert">Selamat akun anda sudah terdaftar. Tolong Aktivasi Akun terkebih dahulu</div>');
            redirect('login');
        }
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

        $user = $this->User_model->getuserById($email);


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
                    redirect('login');
                } else {

                    $this->db->delete('tb_user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);


                    $this->session->set_flashdata('message', '<div class="alert alert-danger"
                    role=alert">Gagal aktivasi akun! Token Expired </div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger"
               role=alert">Gagal aktivasi akun! Salah Token </div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger"
               role=alert">Gagal aktivasi akun! Salah Email </div>');
            redirect('login');
        }

        // $this->load->view('templates/headerlogin', $data);
        // $this->load->view('login/verifikasi', $data);
        // $this->load->view('templates/footerlogin', $data);
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('level_id');

        redirect('user');
    }

    public function logout2()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('level_id');

        $this->session->set_flashdata('message', '<div class="alert alert-danger"
        role=alert"> Kamu berhasil Logout </div>');
        redirect('login');
    }

    public function blocked()
    {
        $this->load->view('login/blocked');
    }

    public function forgot_password()
    {

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Lupa Password';

            $this->load->view('templates/headerlogin', $data);
            $this->load->view('login/forgot_password', $data);
            $this->load->view('templates/footerlogin', $data);
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('tb_user', ['email' => $email, 'is_active' => 1])->row_array();

            if ($user) {
                $token = base64_encode(openssl_random_pseudo_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];

                $this->db->insert('user_token', $user_token);
                $this->_sendEmail($token, 'forgot');

                $this->session->set_flashdata('message', '<div class="alert alert-success"
                role=alert">Cek email anda untuk reset password </div>');
                redirect('login/forgot_password');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger"
                role=alert">Email Belum Terdaftar atau belum aktif </div>');
                redirect('login/forgot_password');
            }
        }
    }
    public function reset_password()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->User_model->getuserById($email);

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])
                ->row_array();

            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->change_password();
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger"
               role=alert">Gagal reset password! Salah Token </div>');
                redirect('login/forgot_password');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger"
               role=alert">Gagal reset password! Salah Email </div>');
            redirect('login/forgot_password');
        }
    }

    public function change_password()
    {
        if(!$this->session->userdata('reset_email')){
            redirect('login');
        }

        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[5]|matches[password3]', [

            'matches' => 'password tidak cocok',
            'min_length' => 'password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password3', 'Password', 'required|trim|matches[password2]');
        if ($this->form_validation->run() == false) {

        $data['judul'] = 'Ganti Password';

        $this->load->view('templates/headerlogin', $data);
        $this->load->view('login/lupa_password', $data);
        $this->load->view('templates/footerlogin', $data);
    }else{
        $password =  password_hash($this->input->post('password2'), PASSWORD_DEFAULT);
        $email = $this->session->userdata('reset_email');

        $this->db->set('password',$password);
        $this->db->where('email',$email);
        $this->db->update('tb_user');

        $this->session->unset_userdata('reset_email');

        $this->session->set_flashdata('message', '<div class="alert alert-success"
        role=alert">Password berhasil direset</div>');
        redirect('login');
    }
}
}