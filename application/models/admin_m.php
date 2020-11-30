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

    public function tambah_login()
    {
        $post = $this->input->post();
        $foto = $_FILES['foto'];
        if ($foto) {
            $config['upload_path'] = './asset/images/admin/';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size']     = '10000';
            $config['file_name']     = 'administrator';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')) {
                $fot = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        }

        $data = [
            "id_admin" => uniqid('ad'),
            "nama_lengkap" => $post['nm_lengkap'],
            "username" => $post['username'],
            "image" => $fot,
            "id_role" => $post['role'],
            "password" => password_hash($post['password'], PASSWORD_BCRYPT),
        ];
        $this->db->insert('admin', $data);
    }
}