<?php
class Pemilihan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('event_m');
        $this->load->model('kandidat_m');
    }
    public function index()
    {
        $data['event'] = $this->event_m->getAll_event();
        $this->template->load('_layout/user', 'pemilihan/index', $data);
    }
    public function vote($id=null)
    {

        $data['kandidat']= $this->kandidat_m->getAll_kandidat_Byid($id);
        $this->template->load('_layout/user', 'pemilihan/vote', $data);
    }
}
