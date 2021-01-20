<?php
class kandidat_m extends CI_Model
{
    private $table = 'kandidat';
    public $id_kandidat;
    public $id_event;
    public $nomer_urut;
    public $nama_lengkap;
    public $keterangan;
    public $foto;
    public $tempat_lahir;
    public $tgl_lahir;
    public $agama;
    public $alamat;
    public $pekerjaan;
    public $pendidikan_terahir;
    public $pengalaman;
    public $visi;
    public $misi;

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('kandidat');
        $this->db->join('event', 'event.id_event=kandidat.id_event');
        $query = $this->db->get()->result_array();
        return $query;
    }


    public function getAll_kandidat_Byid($id = null)
    {
        $this->db->select('*');
        $this->db->from('kandidat');
        $this->db->where('kandidat.id_event', $id);
        $this->db->join('event', 'event.id_event = kandidat.id_event');


        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getByid_event($kand = null)
    {
        $query = $this->db->get_where('kandidat', ['id_event' => $kand])->row_array();
        return $query;
    }

    public function creat_kandidat($post = null, $file)
    {


        $p = $post;
        $foto = $file;
        if ($foto) {
            $config['upload_path'] = './asset/images/kandidat/';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size']     = '10000';
            $config['file_name']     = 'foto_kandidat';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')) {
                $fot = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->id_kandidat = uniqid('kan');
        $this->id_event = $p['event'];
        $this->nomer_urut = $p['nomer_urut'];
        $this->nama_lengkap = $p['nm_lengkap'];
        $this->tempat_lahir = $p['tempat_lahir'];
        $this->tgl_lahir = $p['tgl_lahir'];
        $this->agama = $p['agama'];
        $this->alamat = $p['alamat'];
        $this->foto = $fot;
        $this->pekerjaan = $p['pekerjaan'];
        $this->pendidikan_terahir = $p['pendidikan'];
        $this->pengalaman = $p['pengalaman'];
        $this->visi = $p['visi'];
        $this->misi = $p['misi'];
        $this->keterangan = $p['keterangan'];



        $this->db->insert('kandidat', $this);
    }
    public function getkandidat_Byid($id = null)
    {
        $query = $this->db->get_where('kandidat', ['id_kandidat' => $id])->result_array();
        return $query;
    }
    public function get_join_event($id_event)
    {
        $this->db->select('*');
        $this->db->from('kandidat');
        $this->db->join('event', 'event.id_event=kandidat.id_event');
        $this->db->where('kandidat.id_event', $id_event);
        $this->db->where('event.id_event', $id_event);
        $query = $this->db->get()->result();
        return $query;
    }
    public function hapus($id_kandidat)
    {
        return $this->db->delete('kandidat', ['id_kandidat' => $id_kandidat]);
    }
}