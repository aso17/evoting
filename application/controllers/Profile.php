<?php
class Profile extends CI_Controller
{
    public function index()
    {
        $this->template->load('_layout/user','profile/index');
    }
}
