<?php
class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_log_user();
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
    public function ganti_profile()
    {
        $data['users'] = $this->user_m->getidBY_session();

        $this->template->load('_layout/user', 'profile/ganti_profile', $data);
    }

    public function updateprofile()
    {
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


        $data = $this->user_m->getidBY_session();
        $user = $data['id_user'];

        $this->db->set('image', $fot);
        $this->db->where('id_user', $user);
        $this->db->update('users');

        $this->session->set_flashdata('success', 'foto berhasil di ubah');
        redirect('profile');
    }
}