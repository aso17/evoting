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
    public $image;



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

    public function set_rules_user()
    {
        return [
            [
                'field' => 'fnik',
                'label' => 'Nik',
                'rules' => 'required|numeric|min_length[16]|max_length[16]|',
                'errors' => [
                    'required' => ' %s harus diisi.',

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
        $this->image = "default.jpg";
        $this->db->insert($this->_table, $this);
    }
    public function getAlluser()
    {
        $query = $this->db->get('users')->result();
        return $query;
    }
    public function get_nik()
    {
        $query = $this->db->get('users')->result();
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
    public function getidBY_session()
    {
        $query = $this->db->get_where('users', ['id_user' => $this->session->userdata('id')])->row_array();
        return $query;
    }

    public function get_nik_terdaftar()
    {
        return $this->db->where('nama_lengkap', null)->get($this->_table)->result();
    }
    public function getnik($nik)
    {
        return $this->db->where('nik', $nik)->get($this->_table)->row();
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id_user' => $id));
    }

    public function update_nik_pemilih($post, $nik)
    {
        $data = [
            "nik" => $post['fnik']
        ];
        $this->db->set('nik', $data);
        $this->db->where('nik', $nik);
        $this->db->update($this->_table, $data);
    }

    public function updateUser()
    {
        //if ($this->session->userdata('role') == 1) {
        $post = $this->input->post(null, true);
        $foto = $_FILES['foto'];

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


        $role = 1;
        $data = [

            "nik" => $post['fnik'],
            "nama_lengkap" => $post['nm_lengkap'],
            "tempat_lahir" => $post['tmp_lahir'],
            "tgl_lahir" => $post['tgl_lahir'],
            "no_tlp" => $post['no_tlp'],
            "jenis_kelamin" => $post['jenis_kelamin'],
            "alamat" => $post['alamat'],
            "rt" => $post['rt'],
            "rw" => $post['rw'],
            "kecamatan" => $post['kec'],
            "kelurahan" => $post['kel'],
            "kabupaten" => $post['kab'],
            "agama" => $post['agama'],
            "role" => $role,
            "image" => $fot
        ];
        $this->db->where('nik', $post['fnik']);
        $this->db->update('users', $data);
    }
    public function get_join_auth($id = null)
    {
        $this->db->select('*');
        $this->db->from('auth');
        $this->db->join('users', 'users.id_user = auth.id_user');
        $this->db->where('id_auth', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function getBy_nik($nik = null)
    {
        $query = $this->db->get_where('users', ['nik' => $nik]);
        return $query->row_array();
    }
    public function get_user_active()
    {
        $query = $this->db->query(
            "SELECT * FROM users WHERE id_user 
            IN (SELECT id_user FROM vote )"
        );
        return $query->result();
    }

    public function get_users_active()
    {

        $query = $this->db->query(
            "SELECT * ,COUNT(users.id_user) as user FROM users WHERE id_user 
            IN (SELECT id_user FROM vote )"
        );

        return $query->row();
    }
    public function get_count()
    {
        $query = $this->db->query(
            "SELECT * ,COUNT(users.id_user) as user FROM users"
        );

        return $query->row();
    }
}

/* End of file User_m.php */