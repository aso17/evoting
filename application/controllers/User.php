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
        $id = $this->session->userdata('id_user');
        $data['users'] = $this->user_m->get_user_active();

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
    public function edit($nik = null)
    {
        if (!isset($nik)) redirect('user');

        $user  = $this->user_m;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules_nik());
        if ($validation->run() == true) {

            $post = $this->input->post(null, TRUE);
            $user->update_nik_pemilih($post, $nik);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'NIK berhasil ubah!');
                redirect('user', 'refresh');
            } else {
                $this->session->set_flashdata('warning', 'Nik Tidak Diupdate!');
                redirect('user', 'refresh');
            }

            $data['nik'] = $this->user_m->getnik($nik);
            if (!$data['nik']->nik) {
                $this->session->set_flashdata('error', 'Nik Tidak Diupdate!');
                redirect('user', 'refresh');
            }
        }
        $data['nik'] = $this->user_m->getnik($nik);
        $this->template->load('_layout/admin', 'user/edit', $data);
    }
    public function delete($id)
    {
        $this->user_m->Delete($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'NIK berhasil dihapus!');
            redirect('user', 'refresh');
        }
    }
    public function logout()
    {

        $this->session->unset_userdata('email');
        $this->session->unset_userdata('nik');
        $this->session->unset_userdata('no_tlp');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('id');
        redirect('Landing');
    }
}

/* End of file User.php */