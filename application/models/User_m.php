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
    public function getAlluser()
    {
        $query = $this->db->get('users')->row_array();
        return $query;
    }
    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from("users");
        $this->db->where('id_user', $id);
        
        
        $query = $this->db->get();
        return $query->row_array();
        
    }
    public function getid()
    {
        $query = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();
        return $query;
    }

    public function get_nik_terdaftar()
    {
        return $this->db->where('nama_lengkap', null)->get($this->_table)->result();
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id_user' => $id));
    }

    public function updateUser()
    {
        $post = $this->input->post(null, true);
        $foto=$_FILES['foto'];
        
        if ($foto) {
            $config['upload_path'] = './asset/images/foto_user/';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size']     = '10000';
            $config['file_name']     = 'foto_users';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')) {
                $fot = $this->upload->data('file_name');
                
            } else {
                echo $this->upload->display_errors();
            }
        }


        $data = [
            "nik" => $post['nik'],
            "nama_lengkap" => $post['nm_lengkap'],
            "tempat_lahir" => $post['tmp_lahir'],
            "tgl_lahir" => $post['tgl_lahir'],
            "jenis_kelamin" => $post['jenis_kelamin'],
            "alamat" => $post['alamat'],
            "rt" => $post['rt'],
            "rw" => $post['rw'],
            "kecamatan" => $post['kec'],
            "kelurahan" => $post['kel'],
            "kabupaten" => $post['kab'],
            "agama" => $post['agama'],
            "image" => $fot
        ];
        $this->db->where('nik',$post['nik']);
        $this->db->update('users', $data);
    }
}

/* End of file User_m.php */
