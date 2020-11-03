<?php
class Kandidat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kandidat_m');
    }
    public function index()
    {
        $data['kandidat'] = $this->kandidat_m->getAll();

        $this->template->load('_layout/admin', 'kandidat/index',$data);
    }




    public function tambah_kandidat()
    {

        $this->form_validation->set_rules('nomer_urut', 'Nomer Urut', 'trim|required');
        $this->form_validation->set_rules('nm_lengkap', 'Nama lengkap', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal', 'trim|required');
        $this->form_validation->set_rules('agama', 'Agama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'trim|required');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan Terahir', 'trim|required');
        $this->form_validation->set_rules('foto', 'Foto', 'trim|required');
        $this->form_validation->set_rules('pengalaman', 'Pengalaman', 'trim|required');
        $this->form_validation->set_rules('visi', 'Visi', 'trim|required');
        $this->form_validation->set_rules('misi', 'Misi', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('_layout/admin', 'kandidat/tambah_kandidat');
        } else {
            $post = $this->input->post(null, true);
            $this->kandidat_m->creat_kandidat($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Kandidat berhasil di tambhakan');
                redirect('Kandidat/index');
            }
        }
    }

    public function upload()
    {
        $post = $this->input->post(null, true);
        $upload_foto = $_FILES['foto']['name'];

        $config['upload_path'] = './asset/images/kandidat/';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size']     = '10000';
        $config['file_name']     = 'foto_kandidat';
        $this->load->library('upload', $config);

        if ($upload_foto != null) {
            if ($this->upload->do_upload('foto')) {

                $this->kandidat_m->creat_kandidat($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Kandidat berhasil di tambhakan');
                }
                redirect('Kandidat/index');
            } else {
                echo $this->upload->dispay_errors();
                $this->session->set_flashdata('error', 'Kandidat gagal di tambhakan');
                redirect('Kandidat/tambah_kandidat');
            }
        }
    }
}
