<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller{

    public function __construct()
    {
    parent::__construct();
    $this->load->model('user_m');
    //$this->load->model('auth_m');
    }

    public function index()
    {
        $this->load->view('landing/index');
    }
    
    public function register()
    {
        $user  = $this->user_m;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules_nik());

$this->form_validation->set_rules('femail', 'email', 'trim|required|valid_email is_unique[auth.email]');
$this->form_validation->set_rules('fusername', 'fusername', 'trim|required|');
$this->form_validation->set_rules('fpassword', 'pasword', 'trim|required|max_length[4] |macthes[fpasword1]');
$this->form_validation->set_rules('fpassword', 'pasword', 'trim|required|max_length[4] |macthes[fconfpassword]');
$this->form_validation->set_rules('fconfpassword', 'pasword', 'trim|required|max_length[4] |macthes[fpasword]',['matches'=>'pasword tidak sama.!!!']);




        if( $this->form_validation->run() ==  FALSE){

            $this->load->view('landing/register');

        }else {


            //$this->auth->auth_m
            //if


        }
    }


    public function login()
    {
        $this->form_validation->set_rules('femail', 'email', 'trim|required|valid_email is_unique[auth.email]');
        $this->form_validation->set_rules('fpassword', 'pasword', 'trim|required|max_length[4] |');
        if( $this->form_validation->run() ==  FALSE){

            $this->load->view('landing/index');

        }

        
    }

}

/* End of file Landing.php */
