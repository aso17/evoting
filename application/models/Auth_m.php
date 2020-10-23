<?php
class  Auth_m extends CI_Model
{
    private $_table = 'auth';
    public $id_auth;
    public $username;
    public $password;
    public $email;

    public function getBynik_user($post)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('nik', $post['fnik']);
        $query = $this->db->get();
        return $query;
    }
    public function creat_user()
    {
        $post = $this->input->post();
        $this->id_auth = uniqid('us');
        $this->username = $post['user_name'];
        $this->password = sha1($post['fpassword']);
        $this->email = $post['femail'];
        $this->db->insert($this->_table, $this);
    }

    public function getByemail_Auth($post)
    {
        $this->db->select('*');
        $this->db->from('auth');
        $this->db->where('email', $post['femail']);
        $query = $this->db->get();
        return $query;
    }

    public function _login($post)
    {
        $email = $this->input->post('femail');
        $password = $this->input->post('fpassword');
       $query= $this->db->get_where('auth',['email'=>$email])->row_array();
return $query;
    }
}
