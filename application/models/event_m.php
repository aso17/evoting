<?php
class event_m extends CI_Model{
    public function getAll()
    {
        $query=$this->db->get('event')->result_array();
return $query;
    }
}