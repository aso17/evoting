<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_log_admin();
        cek_log_role();
        $this->load->model('event_m');
        $this->load->model('kandidat_m');
        $this->load->model('user_m');
    }

    public function index()
    {
        $data['totevent'] = $this->event_m->get_count();
        $data['totkandidat'] = $this->kandidat_m->get_count();
        $data['useractive'] = $this->user_m->get_users_active();
        $data['totusers'] = $this->user_m->get_count();
        $this->template->load('_layout/admin', 'dashboard/index', $data);
    }
}

/* End of file Dashboard.php */