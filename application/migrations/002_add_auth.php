<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_auth extends CI_Migration
{

    public function __construct()
    {
        $this->load->dbforge();
        $this->load->database();
    }

    public function up()
    {
        $this->dbforge->add_field(array(
            'id_user' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
            ),
            'id_auth' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
            ),
            'password' => array(
                'type' => 'TEXT',
            ),
        ));
        $this->dbforge->add_key('id_auth', TRUE);
        $this->dbforge->create_table('auth');
    }

    public function down()
    {
        $this->dbforge->drop_table('auth');
    }
}

/* End of file Add_auth.php */
