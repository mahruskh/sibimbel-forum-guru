<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _PembayaranController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('CheckSession');
        $this->checksession->check_session($this->session->id_admin,$this->session->nama);
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
//                if ($id != "All") {
//                    $filter[$key] = $id;
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
//                var_dump($filter);
            echo $this->PembayaranModel->show_data($filter);
        }
    }
    public function trash_pembayaran()
    {
        if ($this->input->is_ajax_request()){
            echo $this->PembayaranModel->trash_pembayaran($this->input->post('id_bimbel'));
        }
    }
    public function detail_pembayaran($id_detail)
    {
        $data['data_pembayaran'] = $this->PembayaranModel->data_pembayaran($id_detail);
        if (!empty($data['data_pembayaran'])){
            $data ['title'] = "Detail Pembayaran";
            $data['rincian_pembayaran'] = $this->PembayaranModel->rincian_pembayaran($id_detail);
            $this->load->view('Pembayaran/detail_pembayaran', $data);
            $this->load->view('Pembayaran/modal-pembayaran');
        } else {
            redirect(base_url('data/pembayaran/show'));
        }
    }
    public function add_detail_pembayaran()
    {
        if ($this->input->is_ajax_request()) {
            $this->load->helper('date');
            $data['id_bimbel'] = $this->input->post('id_bimbel');
            //$data[id_admin] = kurang id admin ambil dari session
            $data['jml_pembayaran'] = $this->input->post('jml_pembayaran');
            $data['tgl_pembayaran'] = mdate('%Y-%m-%d', time());
            $this->PembayaranModel->add_detail_pembayaran($data);
            $this->PembayaranModel->count_total_transaksi($data['id_bimbel']);
            echo TRUE;
        }
    }
    public function edit_detail_pembayaran()
    {
        if ($this->input->is_ajax_request()) {
            echo json_encode($this->PembayaranModel->edit_detail_pembayaran($this->input->post('id_detail_pembayaran')));
        }
    }
    public function update_detail_pembayaran()
    {
        if ($this->input->is_ajax_request()) {
            $data['id_detail_pembayaran'] = $this->input->post('id_detail_pembayaran');
            //$data[id_admin] = kurang id admin ambil dari session
            $data['jml_pembayaran'] = $this->input->post('jml_pembayaran');
            $this->PembayaranModel->update_detail_pembayaran($data);
            $this->PembayaranModel->count_total_transaksi($this->input->post('id_bimbel'));
            echo TRUE;
        }
    }
    public function trash_detail_pembayaran()
    {
        if ($this->input->is_ajax_request()) {
            $this->PembayaranModel->trash_detail_pembayaran($this->input->post('id_detail_pembayaran'));
            $this->PembayaranModel->count_total_transaksi($this->input->post('id_bimbel'));
            echo TRUE;
        }
    }
    public function print_kwitansi($id_bimbel, $id_detail_pembayaran)
    {
        $this->load->library('PdfGenerator');
        $data['pembayaran'] = $this->PembayaranModel->print_pembayaran($id_bimbel);
        $data['detail_pembayaran'] = $this->PembayaranModel->print_rincian_pembayaran($id_bimbel, $id_detail_pembayaran);
        $this->pdfgenerator->generate('Pembayaran/print_kwitansi_pembayaran', $data, 'Kwitansi Bukti Pembayaran');
    }

}

?>