<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CobaPdfController extends  CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->library('PdfGenerator');
        $html = "<h1>INI PDF</h1>";
        $filename  = "cobafile";
//        $data = array(
//            "dataku" => array(
//                "nama" => "Petani Kode",
//                "url" => "http://petanikode.com"
//            )
//        );
        $data['kwitansi'] = "Kwitansi Pembayaran";

        $this->pdfgenerator->generate('laporan_pdf', $data);

    }
}