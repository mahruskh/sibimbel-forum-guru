<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TentorModel extends CI_Model
{
    private $tools_tentor = '<div class="dropdown">
         <button class="btn btn-default dropdown-toggle btn-sm" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <span class="glyphicon glyphicon-cog"></span>
         </button>
         <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">
            <li onclick="edit_tentor($1)"><a href="#">Detail & Edit</a></li>
            <li><a href="#">Riwayat Mengajar</a></li>                    
            <li onclick="del_tentor($1)"><a href="#">Hapus</a></li>
        </ul>
       </div>';
    public function show_data_tentor()
    {
        $this->datatables->select('id_tentor,nama,status,telepon');
        $this->datatables->from('tb_tentor');
        $this->datatables->add_column('tools',$this->tools_tentor,'id_tentor');
        return $this->datatables->generate();
    }
    public function add_tentor($data)
    {
        return $this->db->insert('tb_tentor', $data);
    }
    public function edit_tentor($id_tentor)
    {
        $this->db->where('id_tentor', $id_tentor);
        return $this->db->get('tb_tentor')->row();
    }
    public function update_tentor($data)
    {
        $this->db->where('id_tentor', $data['id_tentor']);
        return $this->db->update('tb_tentor', $data);
    }
    public function trash_tentor($id_tentor)
    {
        $this->db->where('id_tentor', $id_tentor);
        return $this->db->delete('tb_tentor');
    }
}

?>