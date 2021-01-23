<?php
class vote_m extends CI_Model
{

    public function getByid_vote($id_event = null, $id_user)
    {
        $query = $this->db->get_where('vote', ['id_event' => $id_event], ['id_user' => $id_user])->num_rows();
        return $query;
    }

    public function getByIdEventAndUser($event, $user1)
    {
        $this->db->select('*');
        $this->db->from('vote');
        $this->db->where('id_event', $event);
        $this->db->where('id_user', $user1);
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function get_voted($user)
    {
        $this->db->select('*');
        $this->db->from('vote');
        $this->db->where('vote.id_user', $user);
        $this->db->join('event', 'event.id_event = vote.id_event', 'left');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_unvoted($id)
    {
        $query = $this->db->query(
            "SELECT * FROM event WHERE id_event 
            NOT IN (SELECT id_event FROM vote WHERE vote.id_user = '$id')"
        );
        return $query->result();
    }
    public function getid_vote($id_vote)
    {
        $query = $this->db->get_where('vote', ['id_vote' => $id_vote])->row_array();
        return $query;
    }

    public function get_join()
    {
        $this->db->select('*');
        $this->db->from('vote');
        $this->db->join('event', 'event.id_event=vote.id_event');
        $this->db->join('kandidat', 'kandidat.id_kandidat=vote.id_kandidat');
        // $this->db->join('users', 'users.id_user=vote.id_user');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function hasil_vote($id_event)
    {
        $query = $this->db->query("SELECT *, COUNT(vote.id_kandidat) as hasil_vote FROM vote  JOIN kandidat ON kandidat.id_kandidat=vote.id_kandidat  WHERE vote.id_event = '$id_event'  GROUP BY vote.id_kandidat");
        $hasil = $query->result();
        return $hasil;
    }

    public function getid_uservote($id_event)
    {
        $query = $this->db->get_where('vote', ['id_event' => $id_event])->row_array();
        return $query;
    }

    public function export($id_event)
    {
        $query = $this->db->query("SELECT *, COUNT(vote.id_kandidat) as hasil_vote FROM vote  JOIN kandidat ON kandidat.id_kandidat=vote.id_kandidat  WHERE vote.id_event = '$id_event'  GROUP BY vote.id_kandidat");
        $hasil = $query->row();
        return $hasil;
    }
}