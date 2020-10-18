<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_m');
    }


    public function index()
    {
        $data['nik_terdaftar'] = $this->user_m->get_nik_terdaftar();
        $this->template->load('_layout/admin', 'user/index', $data);
    }
    public function tambah()
    {
        $data['nik_terdaftar'] = $this->user_m->get_nik_terdaftar();
        $user  = $this->user_m;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules_nik());
        if ($validation->run() == FALSE) {
            $this->template->load('_layout/admin', 'user/tambah', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $user->create_nik($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'NIK berhasil didaftarkan!');
                redirect('user', 'refresh');
            }
        }
    }
    public function delete($id)
    {
        $this->user_m->Delete($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'NIK berhasil dihapus!');
            redirect('user', 'refresh');
        }
    }
}

/* End of file User.php */
