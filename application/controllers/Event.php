<?php
class Event  extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_log();
        $this->load->model('event_m');
        $this->load->model('kandidat_m');
    }

    public function index()
    {
        $data['event'] = $this->event_m->getAll_event();

        $this->template->load('_layout/admin', 'event/index', $data);
    }
    public function kandidat()
    {
        $data['event'] = $this->event_m->getAll_event();
        $this->template->load('_layout/admin', 'kandidat/kandidat', $data);
    }
    public function tambah_event()
    {
        $validation = $this->form_validation;
        $validation->set_rules('nm_event', 'nama event', 'required|trim');
        $validation->set_rules('tgl_mulai', 'tanggal mulai', 'required|trim');
        $validation->set_rules('tgl_berahir', 'tanggal berahir', 'required|trim');
        $validation->set_rules('priode', 'Priode', 'required|trim');

        if ($validation->run() == false) {
            $this->template->load('_layout/admin', 'event/tambah_event');
        } else {
            $this->event_m->creat_event();
            $this->session->set_flashdata('success', 'Event Baru Berhasil di tambahkan');
            redirect('event/index');
        }
    }

    public function kelola_kandidat($id_event = null)
    {
        $data['kandidat'] = $this->kandidat_m->getAll_kandidat_Byid($id_event);
        // var_dump($data['kandidat']);
        // die;
        $data['event'] = $this->event_m->getByid($id_event);
        $this->template->load('_layout/admin', 'event/kelola_kandidat', $data);
    }

    public function delete($id_event)
    {
        $this->event_m->hapus($id_event);
        $this->session->set_flashdata('success', 'Event Baru Berhasil di hapus');
        redirect('event/index');
    }
}
