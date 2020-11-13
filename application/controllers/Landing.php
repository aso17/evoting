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

        $id = $this->Auth_m->getBynik_user($post = null);


        $this->load->view('landing/register', $id);
    }
    public function process_Reg()
    {
        $nik = $this->input->post('fnik');

        $this->form_validation->set_rules('femail', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('no_tlp', 'no telpon', 'trim|required');
        $this->form_validation->set_rules('user_name', 'username', 'trim|required');
        $this->form_validation->set_rules('fpassword', 'Pasword', 'trim|required|min_length[4]|matches[fconfpassword]', [
            'matches' => 'password tidak sama',
            'min_length' => 'pasword terlalu pendek',
        ]);
        $this->form_validation->set_rules('fconfpassword', 'Password', 'trim|required|matches[fpassword]');
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('landing/register');
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

                        $id = $this->Auth_m->getIdUser($post['fnik']);
                        $this->Auth_m->creat_user($post, $id);
                        $this->Auth_m->set_role_user($post, $id);
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

        $this->form_validation->set_rules('femail', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('fpassword', 'pasword', 'trim|required|min_length[4]');
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('landing/index');
        } else {
            $user = $this->Auth_m->_login(null, true);

            if ($user != null) {
                $pass = $this->input->post('fpassword');
                if (password_verify($pass, $user['password'])) {

                    $user = $this->Auth_m->_login(null, true);
                    $auth = $this->user_m->getById($user['id_user']);

                    $data = [
                        'username' => $user['username'],
                        'email' => $user['email'],
                        'no_tlp' => $user['no_tlp'],
                        'nik' => $auth['nik'],
                        'images' => $auth['image'],
                        'nama_lengkap' => $auth['nama_lengkap'],
                        
                        'role' => $auth['role']
                    ];

                    $this->session->set_userdata($data);


                    redirect('Beranda/index');
                } else {
                    $this->session->set_flashdata('error', 'Password Salah!');
                    redirect('Landing/index');
                }
            } else {
                $this->session->set_flashdata('info', ' Email Anda Belum Terdaftar Silahkan Lakukan Regitrasi');
                redirect('Landing/index');
            }
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('nik');
        $this->session->unset_userdata('no_tlp');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        redirect('Landing');
    }
}

/* End of file Landing.php */
