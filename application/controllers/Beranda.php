<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

    public function index()
    {
        $this->load->view('_layout/user');
    }
}

/* End of file Beranda.php */
