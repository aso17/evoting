<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
    private $_table = 'users';

    public $id_user;
    public $nik;
    public $nama_lengkap;
    public $tempat_lahir;
    public $jenis_kelamin;
    public $alamat;
    public $rt;
    public $kecamatan;
    public $kelurahan;
    public $kabupaten;
    public $agama;
    public $role;


    public function rules_nik()
    {
        return [
            [
                'field' => 'fnik',
                'label' => 'NIK',
                'rules' => 'required|numeric|min_length[16]|max_length[16]|is_unique[users.nik]',
                'errors' => [
                    'required' => ' %s harus diisi.',
                    'is_unique' => '%s sudah terdaftar.',
                    'numeric' => '%s harus berisi angka.',
                    'min_length' => '%s tidak boleh kurang dari 16 karakter.',
                    'max_length' => '%s tidak boleh lebih dari 16 karakter.',
                ],
            ],
        ];
    }
    public function create_nik()
    {
        $post = $this->input->post();
        $this->id_user = uniqid('us');
        $this->nik = $post['fnik'];
        $this->db->insert($this->_table, $this);
    }
    public function get_nik_terdaftar()
    {
        return $this->db->where('nama_lengkap', null)->get($this->_table)->result();
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id_user' => $id));
    }
}

/* End of file User_m.php */
