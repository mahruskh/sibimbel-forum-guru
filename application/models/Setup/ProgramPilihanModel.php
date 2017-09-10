<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProgramPilihanModel extends CI_Model
{
    private $tools_program = '
        <button class="btn btn-sm" onclick="edit_program($1)"><i class="glyphicon glyphicon-edit"> </i></button> |
        <button class="btn btn-sm" onclick="trash_program($1)"><i class="glyphicon glyphicon-trash"> </i></button>
    ';
    private $tools_pilihan = '
        <button class="btn btn-sm"><i class="glyphicon glyphicon-edit"> </i></button> |
        <button class="btn btn-sm" onclick="trash_pilihan($1)"><i class="glyphicon glyphicon-trash"> </i></button>
    ';
    public function show_data_program()
    {
        $this->datatables->select('id_program_bimbel, program_bimbel');
        $this->datatables->from('tb_program_bimbel');
        $this->datatables->add_column('tools',$this->tools_program,'id_program_bimbel');
        return $this->datatables->generate();
    }
    public function add_program($data)
    {
        return $this->db->insert('tb_program_bimbel', $data);
    }
    public function edit_program($id_program_bimbel)
    {
        $this->db->where('id_program_bimbel', $id_program_bimbel);
        return $this->db->get('tb_program_bimbel')->row();
    }
    public function update_program($data)
    {
        $this->db->where('id_program_bimbel', $data['id_program_bimbel']);
        return $this->db->update('tb_program_bimbel', $data);
    }
    public function trash_program($id_program_bimbel)
    {
        $this->db->where('id_program_bimbel', $id_program_bimbel);
        return $this->db->delete('tb_program_bimbel');
    }
    public function show_data_pilihan()
    {
        $this->datatables->select('id_pilihan_program, pilihan_program');
        $this->datatables->from('tb_pilihan_program');
        $this->datatables->add_column('tools',$this->tools_pilihan,'id_pilihan_program');
        return $this->datatables->generate();
    }
    public function trash_pilihan($id_pilihan_program){
        $this->db->where('id_pilihan_program', $id_pilihan_program);
        return $this->db->delete('tb_pilihan_program');
    }
}

?>