<?php
class Pemilihan extends CI_Controller{
    public function index()
    {
        $this->template->load('_layout/user','pemilihan/index');
    }
    public function vote()
    {
        $this->template->load('_layout/user','pemilihan/vote');
    }
}