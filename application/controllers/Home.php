<?php
Class Home extends CI_Controller {
    public function index()
    {
        
$this->template->load('template','home/index');
    }
}