<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TahunAjaranModel extends CI_Model
{
    private $tools_ajaran = '
        <button class="btn btn-sm" onclick="edit_ajaran($1)"><i class="glyphicon glyphicon-edit"> </i></button> |
        <button class="btn btn-sm" onclick="trash_ajaran($1)"><i class="glyphicon glyphicon-trash"> </i></button>
    ';
    public function show_data_ajaran()
    {
        $this->datatables->select('id_tahun_ajaran, tahun_ajaran');
        $this->datatables->from('tb_tahun_ajaran');
        $this->datatables->add_column('tools',$this->tools_ajaran,'id_tahun_ajaran');
        return $this->datatables->generate();
    }
    public function add_ajaran($data)
    {
        return $this->db->insert('tb_tahun_ajaran', $data);
    }
    public function edit_ajaran ($id_tahun_ajaran)
    {
        $this->db->where('id_tahun_ajaran', $id_tahun_ajaran);
        return $this->db->get('tb_tahun_ajaran')->row();
    }
    public function update_ajaran($data)
    {
        $this->db->where('id_tahun_ajaran', $data['id_tahun_ajaran']);
        return $this->db->update('tb_tahun_ajaran', $data);
    }
    public function trash_ajaran($id_tahun_ajaran)
    {
        $this->db->where('id_tahun_ajaran', $id_tahun_ajaran);
        return $this->db->delete('tb_tahun_ajaran');
    }
}

?>