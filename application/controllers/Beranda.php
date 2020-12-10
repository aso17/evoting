<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_log_user();
        $this->load->model('event_m');
        $this->load->model('user_m');
    }

    public function index()
    {
        $user = $this->session->userdata('id');
        $data['user'] = $this->user_m->getByid($user);
        // var_dump($data);
        // die;

        $data['event'] = $this->event_m->getAll_event();
        $this->template->load('_layout/user', 'beranda/index', $data);
    }

    public function hasil_vote()
    {
        $this->template->load('_layout/user', 'pemilihan/hasil_vote');
    }
}

/* End of file Beranda.php */