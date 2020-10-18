<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migrate extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('migration');
    }


    public function index()
    {
        $data = $this->migration->find_migrations();
        foreach ($data as $key => $value) {
            $this->migration->version($key);
        }

        echo "migration success! ";
    }
    public function rollback($version)
    {
        $this->migration->version($version);
    }
}

/* End of file Migrate.php */
