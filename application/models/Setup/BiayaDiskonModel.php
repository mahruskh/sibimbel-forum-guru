<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BiayaDiskonModel extends CI_Model
{
    private $tools_diskon = '<button type="button" class="btn btn-sm" onclick="edit_diskon($1)"><span class="glyphicon glyphicon-edit" aria-hidden="true"></button>
                    <button type="button" class="btn btn-sm" onclick="del_diskon($1)"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button>
                    ';
    public function show_biaya_daftar()
    {
        $this->db->select('biaya_daftar');
        $this->db->where('id_biaya_daftar', 1);
        return $this->db->get('tb_biaya_daftar')->result();
    }
    public function update_biaya_daftar($data)
    {
        $this->db->where('id_biaya_daftar', 1);
        return $this->db->update('tb_biaya_daftar', $data);
    }
    public function show_data_diskon()
    {
        $this->datatables->select('id_diskon,kode_diskon,jml_diskon');
        $this->datatables->from('tb_diskon');
        $this->datatables->add_column('tools_diskon',$this->tools_diskon,'id_diskon');
        return $this->datatables->generate();
    }
    public function add_diskon($data)
    {
        return $this->db->insert('tb_diskon',$data);
    }
    public function edit_diskon($id_diskon)
    {
        $this->db->where('id_diskon',$id_diskon);
        return $this->db->get('tb_diskon')->row();

    }
    public function update_diskon($data)
    {
        $this->db->where('id_diskon',$data['id_diskon']);
        return $this->db->update('tb_diskon',$data);
    }
    public function trash_diskon($id_diskon)
    {
        $this->db->where('id_diskon',$id_diskon);
        return $this->db->delete('tb_diskon');

    }
}

?>