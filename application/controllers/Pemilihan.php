<?php
class Pemilihan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('event_m');
        $this->load->model('kandidat_m');
        $this->load->model('user_m');
        $this->load->model('vote_m');
    }
    public function index()
    {

        $user = $this->session->userdata('id');
        $data['event'] = $this->vote_m->get_unvoted($user);
        $users['user'] = $this->user_m->getByid($user);
        if ($users['user']['nama_lengkap'] == null) {
            $this->session->set_flashdata('warning', 'Mohon untuk Melengkapai data diri anda');
            redirect('Profile/index');
        } else {

            $data['vote'] = $this->vote_m->get_voted($user);
            $this->template->load('_layout/user', 'pemilihan/index', $data);
        }
    }
    public function vote($event)
    {
        $user = $this->session->userdata('id');
        $user = $this->user_m->getByid($user);
        if ($user['nama_lengkap'] != null) {

            $user = $this->session->userdata('id');
            $has_vote = $this->vote_m->getByIdEventAndUser($event, $user);
            if ($has_vote == 1) {
                $this->session->set_flashdata('warning', 'Anda Sudah Pernah Melakukan Pemilihan Ketua Rt');
                redirect('Pemilihan');
            } else {
                $data['kandidat'] = $this->kandidat_m->getAll_kandidat_Byid($event);
                $this->template->load('_layout/user', 'pemilihan/vote', $data);
            }
        } else {
            $this->session->set_flashdata('warning', 'Mohon lengkapi data diri anda');
            redirect('Profile');
        }
    }
    public function proccess_vote($id_event, $id_kandidat)
    {

        $id_user1 = $this->user_m->getidBY_session();
        $id_user2 = $id_user1['id_user'];


        $vote = "terpilih";
        $data = [
            "id_vote" => uniqid(''),
            "id_event" => $id_event,
            "id_user" => $id_user2,
            "id_kandidat" => $id_kandidat,
            "status" => $vote,
            "waktu_vote" => date('d F Y, h:i:s A')

        ];

        $this->db->insert('vote', $data);
        $this->session->set_flashdata('success', 'berhasil melakukan voting');
        redirect('Pemilihan/end');
    }

    public function end()
    {
        $this->template->load('_layout/user', 'pemilihan/end');
    }
    public function detail_kandidat()
    {
        $this->template->load('_layout/user', 'pemilihan/detail_kandidat');
    }
}