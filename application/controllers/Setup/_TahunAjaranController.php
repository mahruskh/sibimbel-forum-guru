<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _TahunAjaranController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Setup/TahunAjaranModel');
        $this->load->library('Datatables');
    }
    public function index()
    {
        $data['title'] = "Setup Tahun Ajaran";
        $this->load->view('SetupTahunAjaran/index',$data);
        $this->load->view('SetupTahunAjaran/modal-ajaran');
    }
    public  function show_data_ajaran()
    {
        if ($this->input->is_ajax_request()){
            echo $this->TahunAjaranModel->show_data_ajaran();
        }
    }
    public function add_ajaran()
    {
        if ($this->input->is_ajax_request()){
            echo $this->TahunAjaranModel->add_ajaran($this->input->post());
        }
    }
    public function edit_ajaran()
    {
        if ($this->input->is_ajax_request()){
            echo json_encode($this->TahunAjaranModel->edit_ajaran($this->input->post('id_tahun_ajaran')));
        }
    }
    public function update_ajaran()
    {
        if ($this->input->is_ajax_request()){
            echo $this->TahunAjaranModel->update_ajaran($this->input->post());
        }
    }
    public function trash_ajaran(){
        if ($this->input->is_ajax_request()){
            echo $this->TahunAjaranModel->trash_ajaran($this->input->post('id_tahun_ajaran'));
        }
    }
}

?>