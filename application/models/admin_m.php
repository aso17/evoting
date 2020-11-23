<?php
class admin_m extends CI_Model
{
    public function login()
    {
        $username = $this->input->post('user_name');
        $pass = $this->input->post('password');
        $query = $this->db->get_where('admin', ['username' => $username]);
        return $query->row_array();
    }
}