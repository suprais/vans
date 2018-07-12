<?php 
class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
    }

public function pdf()
{
    $data = [
        "title"=> "contoh",
        "data" => [
        ["kolom" => "kolom 1","kolom2"=>"kolom 2"],
        ["kolom" => "kolom 1","kolom2"=>"kolom 2"],
        ["kolom" => "kolom 1","kolom2"=>"kolom 2"],
     ]
];
$this->pdf->setPaper('A4' , 'portrait');
$this->pdf->load_view('laporan',$data,'laporan-contoh.pdf');
}
public function html()
{
    $data = [
        "title" => "Contoh",
    ];
    $this->load->view('laporan',$data);
}
}

?>