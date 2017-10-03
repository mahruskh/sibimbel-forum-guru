<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _PenjadwalanController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penjadwalan/PenjadwalanModel');
        $this->load->library('Datatables');
    }
    public function index()
    {
        $data['title'] = "Penjadwalan";
        $this->load->view('Penjadwalan/index', $data);
    }

}

?>