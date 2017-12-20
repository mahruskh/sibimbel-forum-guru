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
//
//        $data['filter'] = $this->PembayaranModel->filter_pembayaran();
//        $this->load->view('Contoh/Contoh',  $data);
    }
    public function show_data()
    {
        if ($this->input->is_ajax_request()){
            $filter = array();
//            foreach ($this->input->post() as $key => $id) {
//                if ($key != "All") {
//                    $filter [$key] = $id;
//                }
//            }
            if ($this->input->post('id_tahun_ajaran') != "All"){ //BadCode harus di foreach array tapi bermasalah
                $filter['id_tahun_ajaran'] = $this->input->post('id_tahun_ajaran');
            }
            if ($this->input->post('id_program_bimbel') != "All"){
                $filter['id_program_bimbel'] = $this->input->post('id_program_bimbel');
            }
            if ($this->input->post('status') != "All"){
                $filter['status'] = $this->input->post('status');
            }
//
            echo $this->PembayaranModel->show_data($filter);
        }
    }

}

?>