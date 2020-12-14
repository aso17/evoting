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
        $users = $this->user_m->getByid($user);
        // var_dump($users);
        // die;
        if ($users['tempat_lahir'] != null) {

            $user1 = $this->session->userdata('id');
            $has_vote = $this->vote_m->getByIdEventAndUser($event, $user1);

            $id_vote = $has_vote['id_vote'];
            $vote = $this->vote_m->getid_vote($id_vote);

            $ket = $this->event_m->getByid_event($event);

            if ($vote != null) {
                $this->session->set_flashdata('warning', 'Anda Sudah Pernah Melakukan Pemilihan ' . $ket->nama_event);
                redirect('Pemilihan');
            } else {
                $data['event'] = $this->event_m->getByid($event);

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

        $id_user = $this->user_m->getidBY_session();
        $id_user1 = $id_user['id_user'];
        $event['event'] = $this->event_m->getByid($id_event);
        $event['kandidat'] = $this->kandidat_m->getkandidat_Byid($id_kandidat);


        $vote = "terpilih";
        $data = [
            "id_vote" => uniqid(''),
            "id_event" => $id_event,
            "id_user" => $id_user1,
            "id_kandidat" => $id_kandidat,
            "status" => $vote,
            "waktu_vote" => date('d F Y, h:i:s A')

        ];

        $this->db->insert('vote', $data);
        $this->session->set_flashdata('success', 'berhasil melakukan voting');
        $this->template->load('_layout/user', 'pemilihan/end', $event);
    }


    public function hasilvote($id_event, $id_kandidat)
    {


        $data['kandidat'] = $this->kandidat_m->getAll_kandidat_Byid($id_event);
        $data['vote'] = $this->vote_m->hasil_vote($id_event, $id_kandidat);
        // $data['pie'] = $this->kandidat_m->getByid_event($id_event);

        // var_dump($data['vote']);
        // die;

        $this->template->load('_layout/user', 'pemilihan/hasilvote', $data);
    }
    public function detail_kandidat()
    {
        $this->template->load('_layout/user', 'pemilihan/detail_kandidat');
    }
}