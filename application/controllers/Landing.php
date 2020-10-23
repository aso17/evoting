<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_m');
        $this->load->model('Auth_m');
    }

    public function index()
    {
        $this->load->view('landing/index');
    }

    public function register()
    {

        $this->load->view('landing/register');
    }
    public function process_Reg()
    {
        $nik = $this->input->post('fnik');

        $this->form_validation->set_rules('femail', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('user_name', 'username', 'trim|required');
        $this->form_validation->set_rules('fpassword', 'Pasword', 'trim|required|min_length[4]|matches[fconfpassword]', [
            'matches' => 'password tidak sama',
            'min_length' => 'pasword terlalu pendek',
        ]);
        $this->form_validation->set_rules('fconfpassword', 'Password', 'trim|required|matches[fpassword]');
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('landing/register');
            $this->session->set_flashdata('success', 'ok');
        } else {

            $post = $this->input->post(null, TRUE);

            if (isset($post['submit'])) {
                $data = $this->Auth_m->getBynik_user($post);
                if ($data != null) {
                    $data_email = $this->Auth_m->getByemail_auth($post);
                    if ($data_email != null) {
                        $this->session->set_flashdata('warning', 'Anda sudah Pernah melakukan Registrasi silakan Login!');
                        redirect('landing/register');
                    } else {
                        $this->Auth_m->creat_user($post);
                        $this->session->set_flashdata('success', 'Registrasi Berhasil');
                        redirect('landing/index');
                    }
                } else {
                    $this->session->set_flashdata('warning', 'nik tidak terdaftar');
                    redirect('landing/register');
                }
            }
        }
    }



    public function login()
    {
        $this->form_validation->set_rules('femail', 'email', 'trim|required');
        $this->form_validation->set_rules('fpassword', 'pasword', 'trim|required|max_length[4]');
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('landing');
        } else {
            $user = $this->Auth_m->_login(null, true);

            if ($user != null) {
                $pass = $this->input->post('fpassword');
                if (sha1($pass, $user['password'])) {
                    redirect('Beranda');
                } else {
                    $this->session->flashdata('error', 'Password Salah');
                    redirect('Landing/index');
                }
            } else {
                $this->session->flashdata('error', 'email Belum terdaftar');
                redirect('Landing');
            }
        }
    }
}










/* End of file Landing.php */
