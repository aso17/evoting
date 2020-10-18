<?php
Class User extends CI_Controller{

    public function index()
    {
        $this->template->load('template','user/index');
    }
}