<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _BimbelController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
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

}
?>