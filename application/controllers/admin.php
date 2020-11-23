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
                if (sha1($pass, $username['password'])) {
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
}