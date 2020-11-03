<?php
class kandidat_m extends CI_Model
{
    public function getAll()
    {
        $query=$this->db->get('kandidat');
        return $query->result();
    }
    public function creat_kandidat()
    {
        $post = $this->input->post(null,true);
        $post['foto'] = $this->upload->data('file_name');
        $data = [
            "id_kandidat" => uniqid('kand'),
            "nomer_urut" => $post['nomer_urut'],
            "nama_lengkap" => $post['nm_lengkap'],
            "foto" => $post['foto'],
            "tempat_lahir" => $post['tempat_lahir'],
            "tgl_lahir" => $post['tgl_lahir'],
            "agama" => $post['agama'],
            "alamat" => $post['alamat'],
            "pekerjaan" => $post['pekerjaan'],
            "pendidikan_terahir" => $post['pendidikan'],
            "pengalaman" => $post['pengalaman'],
            "visi" => $post['visi'],
            "misi" => $post['misi'],

        ];
        $this->db->insert('kandidat', $data);
    }
}
