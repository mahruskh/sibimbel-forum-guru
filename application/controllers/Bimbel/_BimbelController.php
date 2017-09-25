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
        $this->load->view('Bimbel/index', $data);
    }

}
?>