<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
       
    }

    public function index()
    {
        $this->template->load('_layout/user','beranda/index');
    }
}

/* End of file Beranda.php */
