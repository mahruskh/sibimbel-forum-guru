<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _ProgramPilihanController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Setup/ProgramPilihanModel');
        $this->load->library('Datatables');
    }
    public function index()
    {
        $data['title'] = "Setup Program & Pilihan";
        $this->load->view('SetupProgramPilihan/index',$data);
        $this->load->view('SetupProgramPilihan/modal-program');
    }
    public function show_data_program()
    {
        if ($this->input->is_ajax_request()){
            echo $this->ProgramPilihanModel->show_data_program();
        }

    }
    public function add_program()
    {
        if ($this->input->is_ajax_request()){
            echo $this->ProgramPilihanModel->add_program($this->input->post());
        }
    }
    public function edit_program()
    {
        if ($this->input->is_ajax_request()){
            echo json_encode($this->ProgramPilihanModel->edit_program($this->input->post('id_program_bimbel')));
        }
    }
    public function update_program()
    {
        if ($this->input->is_ajax_request()){
            echo $this->ProgramPilihanModel->update_program($this->input->post());
        }
    }
    public function trash_program()
    {
        if ($this->input->is_ajax_request()){
            echo $this->ProgramPilihanModel->trash_program($this->input->post('id_program_bimbel'));
        }
    }
    public function show_data_pilihan()
    {
        if ($this->input->is_ajax_request()){
            echo $this->ProgramPilihanModel->show_data_pilihan();
        }
    }
    public function trash_pilihan()
    {
        if ($this->input->is_ajax_request()){
            echo $this->ProgramPilihanModel->trash_pilihan($this->input->post('id_pilihan_program'));
        }
    }
}

?>