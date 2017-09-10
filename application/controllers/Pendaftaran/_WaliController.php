<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _WaliController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftaran/WaliSiswaModel');
        $this->load->library('Datatables');
    }
    public function index()
    {
        $data['title'] = "Pendaftaran Orang Tua (Wali)";
        $this->load->view('PendaftaranWali/index',$data);
        $this->load->view('PendaftaranWali/modal-wali');
    }
    public function show_data_wali()
    {
        if ($this->input->is_ajax_request()){
            echo $this->WaliSiswaModel->show_data_wali();
        }
    }
    public function add_wali()
    {
        if ($this->input->is_ajax_request()){
            echo $this->WaliSiswaModel->add_wali($this->input->post());
        }
    }
    public function edit_wali ()
    {
        if ($this->input->is_ajax_request()){
            echo json_encode($this->WaliSiswaModel->edit_wali($this->input->post('id_wali_siswa')));
        }
    }
    public function update_wali ()
    {
        if ($this->input->is_ajax_request()){
            echo $this->WaliSiswaModel->update_wali($this->input->post());
        }
    }
    public function trash_wali()
    {
        if ($this->input->is_ajax_request()){
            echo $this->WaliSiswaModel->trash_wali($this->input->post('id_trash_wali'));
        }
    }
}

?>