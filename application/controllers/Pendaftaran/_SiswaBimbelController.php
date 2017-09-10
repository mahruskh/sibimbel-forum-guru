<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _SiswaBimbelController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftaran/SiswaBimbelModel');
        $this->load->library('Datatables');
    }
    public function index()
    {
        $data['title'] = "Pendaftaran Siswa";
        $this->load->view('PendaftaranSiswa/index',$data);
        $this->load->view('PendaftaranSiswa/modal-trash');
    }
    public function show_data()
    {
        if ($this->input->is_ajax_request()){
            echo $this->SiswaBimbelModel->show_data();
        }
    }
    public function trash()
    {
        if ($this->input->is_ajax_request()){
            echo $this->SiswaBimbelModel->trash($this->input->post('id_trash'));
        }
    }
}

?>