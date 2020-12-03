<?php
class vote_m extends CI_Model
{

    public function getByid_vote($id_event = null, $id_user)
    {
        $query = $this->db->get_where('vote', ['id_event' => $id_event], ['id_user' => $id_user])->num_rows();
        return $query;
    }

    public function getByIdEventAndUser($user)
    {

        $query = $this->db->get_where('vote', ['id_user' => $user])->num_rows();
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
}