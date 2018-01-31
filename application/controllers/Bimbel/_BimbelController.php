<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _BimbelController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('CheckSession');
        $this->checksession->check_session($this->session->id_admin,$this->session->nama);
        $this->load->model('Bimbel/BimbelModel');
        $this->load->library('Datatables');
    }
    public function index()
    {
      $data['title'] = "Data Bimbel";
      $data['tahun_ajaran'] = $this->BimbelModel->filter_tahun_ajaran();
      $data['program_bimbel'] = $this->BimbelModel->filter_program_bimbel();
      $data['tentor'] = $this->BimbelModel->filter_tentor();
      $this->load->view('Bimbel/index', $data);
    }
    public function show_data()
    {
        if ($this->input->is_ajax_request()) {
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
//            var_dump($filter);
            echo $this->BimbelModel->show_data($filter);
        }
    }
    public function trash_bimbel()
    {
        if ($this->input->is_ajax_request()) {
            echo $this->BimbelModel->trash_bimbel($this->input->post('id_bimbel'));
        }
    }

}
?>