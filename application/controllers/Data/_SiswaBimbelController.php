<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _SiswaBimbelController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data/SiswaBimbelModel');
        $this->load->library('Datatables');
    }
    public function index()
    {
        $data['title'] = "Data Siswa Bimbel";
        $this->load->view('DataSiswa/index',$data);
        $this->load->view('DataSiswa/modal-trash');
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
    public function registration_siswa()
    {
        $data['title'] = "Pendaftaran Siswa Bimbel";
        $this->load->view('DataSiswa/registration_siswa', $data);
        $this->load->view('DataSiswa/modal-add-wali');
    }
    public function register_siswa()
    {
        if (!empty($this->input->post('daftar'))){
            var_dump($this->input->post());
        } else {
            redirect('data/siswa/daftar');
        }
    }
}

?>