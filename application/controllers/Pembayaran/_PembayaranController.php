<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _PembayaranController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pembayaran/PembayaranModel');
        $this->load->library('Datatables');
    }
    public function index()
    {
        $data['title'] = "Data Pembayaran";
        $data['tahun_ajaran'] = $this->PembayaranModel->filter_tahun_ajaran();
        $data['program_bimbel'] = $this->PembayaranModel->filter_program_bimbel();
        $this->load->view('Pembayaran/index', $data);
    }
    public function show_data()
    {

    }

}

?>