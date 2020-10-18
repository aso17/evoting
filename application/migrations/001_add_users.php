<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_users extends CI_Migration
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
            'nik' => array(
                'type' => 'VARCHAR',
                'constraint' => 16,
            ),
            'nama_lengkap' => array(
                'type' => 'VARCHAR',
                'constraint' => 30,
            ),
            'tempat_lahir' => array(
                'type' => 'VARCHAR',
                'constraint' => 30,
            ),
            'jenis_kelamin' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
            ),
            'alamat' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
            ),
            'rt' => array(
                'type' => 'VARCHAR',
                'constraint' => 3,
            ),
            'rw' => array(
                'type' => 'VARCHAR',
                'constraint' => 3,
            ),
            'kecamatan' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
            ),
            'kelurahan' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
            ),
            'kabupaten' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
            ),
            'agama' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
            ),
            'role' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
            ),
        ));
        $this->dbforge->add_key('id_user', TRUE);
        $this->dbforge->create_table('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}

/* End of file Add_users.php */
