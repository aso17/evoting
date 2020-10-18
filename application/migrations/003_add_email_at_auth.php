<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_email_at_auth extends CI_Migration
{

    public function __construct()
    {
        $this->load->dbforge();
        $this->load->database();
    }

    public function up()
    {
        $fields = array(
            'email' => array(
                'type' => 'TEXT'
            )
        );
        $this->dbforge->add_column('auth', $fields);
    }

    public function down()
    {
        $this->dbforge->drop_column('auth', 'email');
    }
}

/* End of file Add_email_at_auth.php */
