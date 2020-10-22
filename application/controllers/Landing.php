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
        $this->form_validation->set_rules('fpassword', 'Pasword', 'trim|required|min_length[4]|matches[fconfpassword]',[
            'matches'=>'password tidak sama',
            'min_length'=>'pasword terlalu pendek',
        ]);
        $this->form_validation->set_rules('fconfpassword', 'Password', 'trim|required|matches[fpassword]');
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('landing/register');
            $this->session->set_flashdata('success', 'ok');
        } else {

            $post = $this->input->post(null, TRUE);

            if (isset($post['submit'])) {
                $data = $this->Auth_m->getAll($post);
                if ($data->num_rows() > 0) {

                    $this->Auth_m->creat_user($post);
                    redirect('landing/index');
                    $this->session->set_flashdata('success', 'Registrasi berhasil');
                }else{
                    redirect('landing/register');
                    $this->session->set_flashdata('filed', 'nik tidak terdaftar');
                    
                }
            }
        }
    }












    public function login()
    {
        $this->form_validation->set_rules('femail', 'email', 'trim|required|valid_email is_unique[auth.email]');
        $this->form_validation->set_rules('fpassword', 'pasword', 'trim|required|max_length[4] |');
        if ($this->form_validation->run() ==  FALSE) {

            $this->load->view('landing/index');
        } else {
        }
    }
}

/* End of file Landing.php */
