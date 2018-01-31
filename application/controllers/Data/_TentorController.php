<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _TentorController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('CheckSession');
        $this->checksession->check_session($this->session->id_admin,$this->session->nama);
        $this->load->model('Data/TentorModel');
        $this->load->library('Datatables');
    }
    public function index()
    {
        $data['title'] = "Data Tentor / Pengajar";
        $this->load->view('DataTentor/index', $data);
        $this->load->view('DataTentor/modal-tentor');
    }
    public function show_data_tentor()
    {
        if ($this->input->is_ajax_request()){
            echo $this->TentorModel->show_data_tentor();
        }
    }
    public function add_tentor()
    {
        if ($this->input->is_ajax_request()){
            echo $this->TentorModel->add_tentor($this->input->post());
        }
    }
    public function edit_tentor()
    {
        if ($this->input->is_ajax_request()){
            echo json_encode($this->TentorModel->edit_tentor($this->input->post('id_tentor')));
        }
    }
    public function update_tentor()
    {
        if ($this->input->is_ajax_request()){
            echo $this->TentorModel->update_tentor($this->input->post());
        }
    }
    public function trash_tentor()
    {
        if ($this->input->is_ajax_request()){
            echo $this->TentorModel->trash_tentor($this->input->post('id_trash_tentor'));
        }
    }
    public function count_tentor()
    {
        if ($this->input->is_ajax_request()) {
            echo json_encode($this->TentorModel->count_tentor());
        }
    }

}

?>