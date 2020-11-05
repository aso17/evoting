<?php
class Kandidat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kandidat_m');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['kandidat'] = $this->kandidat_m->getAll();

        $this->template->load('_layout/admin', 'kandidat/index', $data);
    }




    public function tambah_kandidat()
    {


        $this->form_validation->set_rules('nomer_urut', 'Nomer Urut', 'trim|required');
        $this->form_validation->set_rules('nm_lengkap', 'Nama lengkap', 'trim|required');
        $this->form_validation->set_rules('st_jabatan', 'setatus', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal', 'trim|required');
        $this->form_validation->set_rules('agama', 'Agama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'trim|required');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan Terahir', 'trim|required');
        
        $this->form_validation->set_rules('pengalaman', 'Pengalaman', 'trim|required');
        $this->form_validation->set_rules('visi', 'Visi', 'trim|required');
        $this->form_validation->set_rules('misi', 'Misi', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $this->template->load('_layout/admin', 'kandidat/tambah_kandidat');
        } else {

            $post = $this->input->post();
            $upload_foto = $_FILES['foto'];
            $this->kandidat_m->creat_kandidat($post, $upload_foto);
            $this->session->set_flashdata('success', 'Data kandidat berhasil di tambah');
            redirect('Kandidat/index');
        }
    }
}

