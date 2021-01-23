<?php
class report extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('vote_m');
        $this->load->model('event_m');
        $this->load->model('kandidat_m');
    }
    public function index()
    {
        $data['event'] = $this->event_m->getAll_event();

        $this->template->load('_layout/admin', 'report/index', $data);
    }
    public function hasil_pemilihan($id_event)
    {
        $data['event'] = $this->event_m->get_row($id_event);
        $data['kandidat'] = $this->kandidat_m->getAll_kandidat_Byid($id_event);
        $data['hasil_pemilihan'] = $this->vote_m->hasil_vote($id_event);

        $this->template->load('_layout/admin', 'report/hasil_pemilihan', $data);
    }
    public function export($id_event)
    {
        $this->load->library('pdf');
        $pdf = new FPDF('l', 'mm', 'A5');
        // membuat halaman baru
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times', 'U', 12);

        $pdf->SetTitle('report ');
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string 

        //$pdf->Image(190, 7, base_url() . 'assets/images/logo.png', 0, 1, 'L');
        $pdf->Cell(190, 7, 'Evoting', 0, 1, 'L');
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(190, 7, 'Jl.Jl.kadu Rt/RW 001/002 kec.Curug Tangerang', 0, 1, 'L');
        // $pdf->SetFont('Arial', 'B', 12);

        $event = $this->event_m->get_row($id_event);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(190, 7, 'HASIL LAPORAN', 0, 1, 'C');
        $pdf->Setfont('Arial', 'B', 10);
        $pdf->Cell(190, 2, $event->nama_event, 0, 1, 'C');
        $pdf->Setfont('Arial', 'B', 9);
        $pdf->Cell(190, 7, 'Tanggal cetak', 0, 1, 'C');
        $pdf->Cell(190, 2, date('l/d/m/y'), 0, 1, 'C');
        $pdf->Cell(190, 7, 'User :' . $this->session->userdata('username'), 0, 1, 'R');




        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 2, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        //lebar,tinggi,br
        $pdf->Cell(10, 6, 'No', 1, 0);
        $pdf->Cell(25, 6, 'Nomer Urut', 1, 0);
        $pdf->Cell(60, 6, 'Event', 1, 0);
        $pdf->Cell(30, 6, 'Nama Kandidat', 1, 0);
        $pdf->Cell(40, 6, 'Priode', 1, 0);
        $pdf->Cell(25, 6, 'jumlah voting', 1, 1);

        $pdf->SetFont('Arial', '', 10);
        $kandidat = $this->kandidat_m->getAll_kandidat_Byid($id_event);
        // var_dump($hasil);
        // die;

        $i = 1;
        foreach ($kandidat as $row) :
            $pdf->Cell(10, 6, $i++, 1, 0);
            $pdf->Cell(25, 6, $row['nomer_urut'], 1, 0);
            $pdf->Cell(60, 6, $row['nama_event'], 1, 0);
            $pdf->Cell(30, 6, $row['nama_lengkap'], 1, 0);
            $pdf->Cell(40, 6, $row['priode'], 1, 0);
            $kand = $row['id_kandidat'];
            $hasil = $this->vote_m->hasil_vote($id_event);
            foreach ($hasil as $has) :
                if ($kand === $has->id_kandidat) {
                    $pdf->Cell(25, 6, $has->hasil_vote, 1, 1);
                } else {
                    $pdf->Cell(25, 6, '0', 1, 1);
                }
            endforeach;
        endforeach;
        // $pdf->Cell(150, 6, '', 1, 0);
        // $pdf->Cell(40, 6, '', 1, 1);
        $pdf->Output();
    }
}