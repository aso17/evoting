<?php
Class Event  extends CI_Controller{
public function __construct()
{
    parent:: __construct();
    $this->load->model('event_m');
}

    public function index()
    {
        $data['event']= $this->event_m->getAll();
        $this->template->load('_layout/admin', 'event/index',$data);
    }
}