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
        $this->load->view('SetupBiayaDiskon/modal-diskon');
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
    public function show_data_diskon()
    {
        if ($this->input->is_ajax_request()){
            echo $this->BiayaDiskonModel->show_data_diskon();
        }
    }
    public function add_diskon()
    {
        if ($this->input->is_ajax_request()){
            echo $this->BiayaDiskonModel->add_diskon($this->input->post());
        }
    }
    public function edit_diskon()
    {
        if ($this->input->is_ajax_request()){
            echo json_encode($this->BiayaDiskonModel->edit_diskon($this->input->post('id_diskon')));
        }
    }
    public function update_diskon()
    {
        if ($this->input->is_ajax_request()){
            echo $this->BiayaDiskonModel->update_diskon($this->input->post());
        }
    }
    public function trash_diskon()
    {
        if ($this->input->is_ajax_request()){
            echo $this->BiayaDiskonModel->trash_diskon($this->input->post('id_diskon'));
        }

    }

}

?>