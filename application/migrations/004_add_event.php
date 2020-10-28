<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_event extends CI_Migration
{

    public function __construct()
    {
        $this->load->dbforge();
        $this->load->database();
    }

    public function up()
    {
        $this->dbforge->add_field(array(
            'id_event' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
            ),
            'nama_event' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
            ),
            'tgl_mulai' => array(
                'type' => 'date',
                'constraint' =>null,
            ),
            'tgl_berahir' => array(
                'type' => 'date',
                'constraint' =>null,
            ),
            'Priode' => array(
                'type' => 'VARCHAR',
                'constraint' =>50,
            ),
        ));
        $this->dbforge->add_key('id_event', TRUE);
        $this->dbforge->create_table('event');
    }

    public function down()
    {
        $this->dbforge->drop_table('event');
    }
}

/* End of file Add_auth.php */
