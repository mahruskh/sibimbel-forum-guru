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
        $this->load->view('SetupProgramPilihan/modal-pilihan');
    }
    public function halo()
    {
        echo $this->input->post('hari_pertemuan');
    }
    public function show_data_program()
    {
        if ($this->input->is_ajax_request()){
            echo $this->ProgramPilihanModel->show_data_program();
        }

    }
    public function show_pilihan_program()
    {
        if ($this->input->is_ajax_request()){
        ?>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Jenis Program</label>
            <div class="col-sm-6">
                <select class="form-control" name="id_pilihan_program">
                    <?php
                    foreach ($this->ProgramPilihanModel->show_pilihan_program() as $row){ ?>
                        <option value="<?php echo $row->id_pilihan_program?>"><?php echo $row->pilihan_program?></option>

                 <?php   }
                    ?>
                </select>
            </div>
        </div>

        <?php
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

    public function add_pilihan()
    {
        if ($this->input->is_ajax_request()){
           echo $this->ProgramPilihanModel->add_pilihan($this->input->post());
        }
    }
    public function edit_pilihan()
    {
        if ($this->input->is_ajax_request()){
            echo json_encode($this->ProgramPilihanModel->edit_pilihan($this->input->post('id_pilihan_program')));

        }
    }
    public function update_pilihan()
    {
        if ($this->input->is_ajax_request()){
            echo $this->ProgramPilihanModel->update_pilihan($this->input->post());
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