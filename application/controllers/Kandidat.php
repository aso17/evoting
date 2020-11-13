<?php
class Kandidat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kandidat_m');
        $this->load->model('event_m');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['kandidat'] = $this->kandidat_m->getAll();

        $this->template->load('_layout/admin', 'kandidat/index', $data);
    }




    public function tambah_kandidat()
    {
        $data['event'] = $this->event_m->getAllevent();
        $this->template->load('_layout/admin', 'kandidat/tambah_kandidat', $data);
    }
    public function proses()
    {
        
        
        $validation=$this->form_validation;
        $validation->set_rules('nomer_urut', 'Nomer Urut', 'trim|required');
        $validation->set_rules('nm_lengkap', 'Nama lengkap', 'trim|required');
        $validation->set_rules('tgl_lahir', 'Tanggal', 'trim|required');
        $validation->set_rules('agama', 'Agama', 'trim|required');
        $validation->set_rules('alamat', 'Alamat', 'trim|required');
        $validation->set_rules('pekerjaan', 'Pekerjaan', 'trim|required');
        $validation->set_rules('pendidikan', 'Pendidikan Terahir', 'trim|required');
        $validation->set_rules('pengalaman', 'Pengalaman', 'trim|required');
        $validation->set_rules('visi', 'Visi', 'trim|required');
        $validation->set_rules('misi', 'Misi', 'trim|required');

        if ($validation->run() == false) {
            $data['event'] = $this->event_m->getAllevent();
            $this->template->load('_layout/admin', 'kandidat/tambah_kandidat', $data);
        } else {

            $post = $this->input->post(null, true);
            $file = $_FILES['foto'];
            $this->kandidat_m->creat_kandidat($post, $file);

            $this->session->set_flashdata('success', 'Data kandidat berhasil di tambah');
            redirect('Kandidat/index');
        }
    }
}
