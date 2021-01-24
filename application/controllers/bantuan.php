<?php
class bantuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->template->load('_layout/user', 'bantuan/index');
    }
}