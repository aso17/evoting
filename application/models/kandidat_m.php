<?php
class kandidat_m extends CI_Model
{
    private $table = 'kandidat';
    public $id_kandidat;
    public $nomer_urut;
    public $nama_lengkap;
    public $st_jabatan;
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
        $query = $this->db->get('kandidat');
        return $query->result_array();
    }
    public function upload_f()
    {


        $post = $_FILES['foto']['name'];

        if ($this->upload->do_upload('foto')) {
            return $this->$this->upload->data('file_name');
        } else {
            return "default.jpg";
        }
    }


    public function creat_kandidat($post,$upload_foto)
    {

        $post = $this->input->post(null, true);
        $foto =$upload_foto;
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


        $this->id_kandidat = uniqid('');
        $this->nomer_urut = $post['nomer_urut'];
        $this->nama_lengkap = $post['nm_lengkap'];
        $this->st_jabatan = $post['st_jabatan'];
        $this->foto = $fot;
        $this->tempat_lahir = $post['tempat_lahir'];
        $this->tgl_lahir = $post['tgl_lahir'];
        $this->agama = $post['agama'];
        $this->alamat = $post['alamat'];
        $this->pekerjaan = $post['pekerjaan'];
        $this->pendidikan_terahir = $post['pendidikan'];
        $this->pengalaman = $post['pengalaman'];
        $this->visi = $post['visi'];
        $this->misi = $post['misi'];


        $this->db->insert('kandidat', $this);
    }
}
