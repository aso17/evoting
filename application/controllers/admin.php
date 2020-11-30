<?php
class Admin extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_m');
        $this->load->model('admin_m');
        $this->load->model('auth_m');
    }
    public function index()
    {
        $this->load->view('admin/index');
    }

    public function login()
    {

        $validation = $this->form_validation;
        $validation->set_rules('user_name', 'username', 'trim|required');
        $validation->set_rules('password', 'password', 'trim|required');
        if ($validation->run() == false) {
            $this->load->view('admin/index');
        } else {
            $username = $this->auth_m->_login(null, true);

            if ($username != null) {
                $pass = $this->input->post('password');
                if (password_verify($pass, $username['password'])) {
                    $user = $this->user_m->getByid($username['id_user']);
                    $session = [
                        "role" => $user['role'],
                        "username" => $username['username'],
                        "image" => $user['image'],
                        "nik" => $user['nik'],
                    ];
                    $this->session->set_userdata($session);
                    redirect('dashboard');
                } else {
                    $this->session->set_flashdata('error', 'password salah');
                    redirect('admin');
                }
            } else {
                $this->session->set_flashdata('warning', 'tidak terdaftar');
                redirect('admin');
            }
        }
    }
    public function user_log()
    {
        $data['auth'] = $this->auth_m->getAllauth();

        $this->template->load('_layout/admin', 'admin/user_log', $data);
    }
    public function tambah()
    {

        $validation = $this->form_validation;
        $validation->set_rules('nm_lengkap', 'nama lengkap', 'required|trim');
        $validation->set_rules('username', 'username', 'required|trim');

        $validation->set_rules('password', 'password', 'required|trim');

        if ($validation->run() == false) {
            $data['role'] = $this->admin_m->get_role();
            $this->template->load('_layout/admin', 'admin/tambah', $data);
        } else {
            $this->admin_m->tambah_login();
            $this->session->set_flashdata('success', 'user log berhasil di tambkan');
            redirect('admin/user_log');
        }
    }
    public function edit_user_log($id_auth = null, $id_user = null)
    {
        $post = $this->input->post(null, true);
        $this->form_validation->set_rules('role', 'role', 'required');
        if ($this->form_validation->run() == false) {

            $data['auth'] = $this->user_m->get_join_auth($id_auth);
            $this->template->load('_layout/admin', 'admin/edit_user_log', $data);
        } else {
            $post = $this->input->post(null, true);
            $id = $this->user_m->getByid($id_user);
            $user = $id['id_user'];
            $this->admin_m->update_user_log($post, $user);
            $this->session->set_flashdata('success', 'role user berhasil di ubah');
            redirect('admin/user_log');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id_role');
        $this->session->unset_userdata('image');
        redirect('admin');
    }
}