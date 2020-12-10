<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_log_admin();
        //cek_log_role();
    }

    public function index()
    {
        $this->template->load('_layout/admin', 'dashboard/index');
    }
}

/* End of file Dashboard.php */