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
    public function tambahEvent()
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

    public function edit($id_event)
    {
        $validation = $this->form_validation;
        $validation->set_rules('nm_event', 'nama event', 'required|trim');
        $validation->set_rules('tgl_mulai', 'tanggal mulai', 'required|trim');
        $validation->set_rules('tgl_berahir', 'tanggal berahir', 'required|trim');
        $validation->set_rules('priode', 'Priode', 'required|trim');

        if ($validation->run() == true) {

            $post = $this->input->post(null, true);
            $this->event_m->update_event($post, $id_event);
            if ($this->db->affected_rows() > 0) {

                $this->session->set_flashdata('success', 'Event Baru Berhasil di ubah');
                redirect('event/index');
            } else {
                $this->session->set_flashdata('warning', 'Event Tidak di ubah');
                redirect('event/index');
            }
        } else {
            $data['event'] = $this->event_m->get_row($id_event);
            $this->template->load('_layout/admin', 'event/edit', $data);
        }
    }

    public function detail($id_event = null)
    {
        $data['kandidat'] = $this->kandidat_m->getAll_kandidat_Byid($id_event);
        // var_dump($data['kandidat']);
        // die;
        $data['event'] = $this->event_m->getByid($id_event);
        $this->template->load('_layout/admin', 'event/detail', $data);
    }

    public function delete($id_event)
    {
        $this->event_m->hapus($id_event);
        $this->session->set_flashdata('success', 'Event Baru Berhasil di hapus');
        redirect('event/index');
    }
}