<?php
class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_m');
    }
    public function index()
    {
        $data['users'] = $this->user_m->getidBY_session();
        $this->template->load('_layout/user', 'profile/index', $data);
    }
    public function pengaturan()
    {
        $data['users'] = $this->user_m->getidBY_session();

        $this->template->load('_layout/user', 'profile/pengaturan', $data);
    }
    public function update_user()
    {



        $validation = $this->form_validation;
        $validation->set_rules('nm_lengkap', 'nama lengkap', 'trim|required');
        $validation->set_rules('tmp_lahir', 'tempat lahir', 'trim|required');
        $validation->set_rules('tgl_lahir', 'tanggal lahir', 'trim|required');
        $validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
        $validation->set_rules('alamat', 'Alamat', 'trim|required');
        $validation->set_rules('rt', 'RT', 'trim|required');
        $validation->set_rules('rw', 'RW', 'trim|required');
        $validation->set_rules('kec', 'kecamatan', 'trim|required');
        $validation->set_rules('kel', 'kelurahan', 'trim|required');
        $validation->set_rules('no_tlp', 'Nomer telpon', 'trim|required');
        $validation->set_rules('kab', 'Kabupaten', 'trim|required');
        $validation->set_rules('agama', 'Agama', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $user = $this->session->userdata('id');
            $data['users'] = $this->user_m->getById($user);
            $this->template->load('_layout/user', 'profile/update_user', $data);
        } else {
            $this->user_m->updateUser();
            $this->session->set_flashdata('success', 'Data user berhasil di lengkapi');
            redirect('Profile/index');
        }
    }
}