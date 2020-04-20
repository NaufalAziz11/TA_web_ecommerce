<?php

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['barang'] = $this->Produk_model->tampil_barang()->result();
        $data['kategori'] = $this->Produk_model->tampil_kategori()->result();
        $data['judul'] = 'Halaman User';

        $this->load->view('templates/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer_home');
    }
    public function profile()
    {
        $data['user'] = $this->db->get_where('tb_detail_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Halaman Profile User';

        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('user/profile', $data);
            $this->load->view('templates/footer');
        } else {
            // $id_user = $this->input->post('id_user');
            $nama = $this->input->post('nama');
            $no_telepon = $this->input->post('no_telepon');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $tanggal = $this->input->post('tanggal');
            $image = $_FILES['image']['name'];
            if ($image) {
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/profile';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $data = array(
                // 'id_user'   => $id_user,
                'nama'      => $nama,
                'no_telepon' => $no_telepon,
                'jenis_kelamin' => $jenis_kelamin,
                'tanggal'   => $tanggal,
                'image'     => $image
            );
            $data2 = array(
                'image'     => $image
            );
            $this->User_model->detail_user($data, 'tb_detail_user');
            $this->User_model->detail_user($data2, 'tb_user');
            redirect('');
        }
    }
    public function ganti_pass()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['judul'] = 'Halaman Ganti Password User';
        $this->form_validation->set_rules('password1', 'Password', 'required|trim');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[5]|matches[password3]', [

            'matches' => 'password tidak cocok',
            'min_length' => 'password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password3', 'Password', 'required|trim|matches[password2]', [

            'matches' => 'silahkan masukkan password yang valid',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('user/ganti_pass', $data);
            $this->load->view('templates/footer');
        } else {
            $password_lama = $this->input->post('password1');
            $password_baru = $this->input->post('password2');
            if (!password_verify($password_lama, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class ="alert 
                alert-danger" role="alert"> Password lama yang anda masukkan salah!</div>');
                redirect('user/ganti_pass');
            } else {
                if ($password_lama == $password_baru) {
                    $this->session->set_flashdata('message', '<div class ="alert 
                alert-danger" role="alert"> Password yang anda masukkan tidak boleh sama dengan password sebelumnya!</div>');
                    redirect('user/ganti_pass');
                } else {
                    //pass ok
                    $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('tb_user');

                    $this->session->set_flashdata('message', '<div class ="alert 
                    alert-success" role="alert"> Password berhasil diubah</div>');
                    redirect('user/ganti_pass');
                }
            }
        }
    }
    public function alamat()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['judul'] = 'Halaman Profile User';

        $this->load->view('templates/header', $data);
        $this->load->view('user/alamat', $data);
        $this->load->view('templates/footer');
    }
    public function kategori()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['judul'] = 'Halaman Kategori Peralatan';

        $this->load->view('templates/header', $data);
        $this->load->view('user/kategori', $data);
        $this->load->view('templates/footer');
    }
}
