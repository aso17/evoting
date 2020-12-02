<?php
class  Auth_m extends CI_Model
{
    private $_table = 'auth';
    public $id_auth;
    public $id_user;
    public $username;
    public $password;
    public $email;


    public function getAlluser()
    {
        return $this->db->get('users')->result_array();
    }
    public function getByid_user($post)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('auth', 'auth.id_user=users.id_user');
        $this->db->where('id_user', $post['fnik']);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getBynik_user($post)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('nik', $post['fnik']);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function getIdUser($nik)
    {
        $query = $this->db->query("SELECT id_user as ID from users where nik = $nik");
        $hasil = $query->row();
        $iduser = $hasil->ID;
        return $iduser;
    }
    public function creat_auth($post, $id = null, $id_user = null)
    {

        $post = $this->input->post();
        $this->id_user = $id;
        $this->id_auth = uniqid('');
        $this->username = $post['user_name'];
        $this->password = password_hash($post['fpassword'], PASSWORD_BCRYPT);
        $this->email = $post['femail'];
        $this->db->insert($this->_table, $this);
    }

    public function getAllauth()
    {
        $this->db->select('*');
        $this->db->from('auth');
        $this->db->join('users', 'users.id_user=auth.id_user');
        $query = $this->db->get()->result();
        return $query;
    }


    public function getByemail_Auth($post)
    {
        $this->db->select('*');
        $this->db->from('auth');
        $this->db->where('email', $post['femail']);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function _login()
    {
        $nik = $this->input->post();
        $username = $this->input->post('user_name');
        $email = $this->input->post('femail');
        $password = $this->input->post('fpassword');

        $this->db->from('auth');
        $this->db->where('email', $email);
        $this->db->or_where('username', $username);
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function set_role_user($post, $id = null)
    {
        $nik = $this->input->post('fnik');
        $role = $this->role = 1;
        $this->db->set('role', $role);
        $this->db->where('id_user', $id);
        $this->db->update('users');
    }
}