<?php
class Admin extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_m');
        $this->load->model('admin_m');
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
            $username = $this->admin_m->login(null, true);

            if ($username != null) {
                $pass = $this->input->post('password');
                if (password_verify($pass, $username['password'])) {
                    $id = $username['id_role'];
                    $role = $this->admin_m->getByid_role($id);

                    $data = [
                        "username" => $username['username'],
                        "id_role" => $username['id_role'],
                        "image" => $username['image'],
                        "nama_role" => $role['nama_role']
                    ];
                    $this->session->set_userdata($data);

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
        $data['admin'] = $this->admin_m->get_join();
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
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id_role');
        $this->session->unset_userdata('image');
        redirect('admin');
    }
}