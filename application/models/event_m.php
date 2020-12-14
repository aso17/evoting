<?php
class event_m extends CI_Model
{
    public function getAll_event()
    {
        $query = $this->db->get('event')->result_array();
        return $query;
    }

    public function getByid_event($id = null)
    {
        $query = $this->db->get_where('event', ['id_event' => $id]);
        $result = $query->result();
        return $result[0];
    }

    public function creat_event()
    {
        $post = $this->input->post();
        $data = [
            "id_event" => uniqid('ev'),
            "nama_event" => $post['nm_event'],
            "tgl_mulai" => $post['tgl_mulai'],
            "tgl_berahir" => $post['tgl_berahir'],
            "priode" => $post['priode']
        ];

        $this->db->insert('event', $data);
    }
    public function getByid($id_event)
    {
        $query = $this->db->get_where('event', ['id_event' => $id_event]);
        $result = $query->result();
        return $result;
    }
}