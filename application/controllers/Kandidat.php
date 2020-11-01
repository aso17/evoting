<?php
Class Kandidat extends CI_Controller{
    public function index()
    {
        $this->template->load('_layout/admin','kandidat/index');
    }
    public function tambah_kandidat()
    {
        $this->template->load('_layout/admin','kandidat/tambah_kandidat');

    }
}
