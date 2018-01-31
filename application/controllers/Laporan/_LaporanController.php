<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _LaporanController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('CheckSession');
        $this->checksession->check_session($this->session->id_admin,$this->session->nama);
        $this->load->model('Laporan/LaporanModel');
    }
    public function bimbel_pembayaran()
    {
        $data['tahun_ajaran'] = $this->LaporanModel->filter_tahun_ajaran();
        $data['program_bimbel'] = $this->LaporanModel->filter_program_bimbel();
        $data['administrator'] = $this->LaporanModel->filter_admin();
        $data['title'] = "Laporan - Laporan";
        $this->load->view('Laporan/bimbel_pembayaran', $data);
    }
    public function print_bimbel_pembayaran()
    {
        $filter = array();
        $tgl_start = "";
        $tgl_end = "";
        foreach ($this->input->post() as $key => $id) {
            if ($id != "All" && $id != "*.PDF" && $id != "*.XLS" && $key != "tgl_start" && $key != "tgl_end") {
                $filter[$key] = $id;
            }  elseif ($key == "tgl_start" && $id != "") {;
                $tgl_start = date('Y-m-d',strtotime($id));
            }  elseif ($key == "tgl_end" && $id != "") {
                $tgl_end = date('Y-m-d',strtotime($id));
            }

            $filter_tanggal = array();
            if ($tgl_start != "" && $tgl_end != "") {
                $filter_tanggal = array('tgl_pendaftaran >=' => $tgl_start, 'tgl_pendaftaran <=' => $tgl_end);
            } elseif ($tgl_start != "" && $tgl_end == "") {
                $filter_tanggal = array('tgl_pendaftaran >=' => $tgl_start);
            } elseif ($tgl_start == "" && $tgl_end != "") {
                $filter_tanggal = array('tgl_pendaftaran <=' => $tgl_end);
            }
        }
        $export = $this->input->post('export');
        if ($export == "*.PDF") {
            $this->load->library('PdfGenerator');
            $data['laporan'] = $this->LaporanModel->print_bimbel_pembayaran_pdf($filter,$filter_tanggal);
            $this->pdfgenerator->generate('Laporan/print_bimbel_pembayaran_pdf',$data, 'Laporan Data Bimbel & Pembayaran');
        } elseif ($export == "*.XLS") {
                       $data['laporan'] = $this->LaporanModel->print_bimbel_pembayaran_pdf($filter,$filter_tanggal);
            $this->load->view('Laporan/print_bimbel_pembayaran_excel', $data);
        } else {
            redirect(base_url('laporan/bimbel-pembayaran'));
        }
    }


}