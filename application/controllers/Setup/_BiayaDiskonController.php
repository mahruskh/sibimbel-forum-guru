<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _BiayaDiskonController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Setup/BiayaDiskonModel');
        $this->load->library('Datatables');
    }
    public function index()
    {
        $data['title'] = "Setup Biaya & Diskon";
        $this->load->view('SetupBiayaDiskon/index', $data);
    }
    public function show_biaya_daftar()
    {
        if ($this->input->is_ajax_request()){
           foreach ($this->BiayaDiskonModel->show_biaya_daftar() as $row){
               echo $row->biaya_daftar;
           }
        }
    }
    public function update_biaya_daftar()
    {
        if ($this->input->is_ajax_request()){
            echo $this->BiayaDiskonModel->update_biaya_daftar($this->input->post());
        }
    }

}

?>