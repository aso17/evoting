<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_kandidat extends CI_Migration
{

    public function __construct()
    {
        $this->load->dbforge();
        $this->load->database();
    }

    public function up()
    {
        $this->dbforge->add_field(array(
            'id_kandidat' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
            ),
            'nomer_urut' => array(
                'type' => 'int',
                'constraint' =>5,
            ),
            'nama_lengkap' => array(
                'type' => 'VARCHAR',
                'constraint' =>100,
            ),
            'foto' => array(
                'type' => 'int',
                'constraint' =>null,
            ),
            'tempat_lahir' => array(
                'type' => 'VARCHAR',
                'constraint' =>50,
            ),
            'tgl_lahir' => array(
                'type' => 'date',
                'constraint' =>null,
            ),
            'agama' => array(
                'type' =>'VARCHAR' ,
                'constraint' =>20,
            ),
            'almat' => array(
                'type' =>'VARCHAR',
                'constraint' =>100,
            ),
            'pekerjaan' => array(
                'type' =>'VARCHAR',
                'constraint' =>30,
            ),
            'pendidikan_terahir' => array(
                'type' => 'VARCHAR',
                'constraint' =>30,
            ),
            'penglaman' => array(
                'type' => 'VARCHAR',
                'constraint' =>50,
            ),
            'visi' => array(
                'type' => 'VARCHAR',
                'constraint' =>200,
            ),
            'misi' => array(
                'type' => 'VARCHAR',
                'constraint' =>200,
            ),
        ));
        $this->dbforge->add_key('id_kandidat', TRUE);
        $this->dbforge->create_table('kandidat');
    }

    public function down()
    {
        $this->dbforge->drop_table('kandidat');
    }
}

/* End of file Add_auth.php */
