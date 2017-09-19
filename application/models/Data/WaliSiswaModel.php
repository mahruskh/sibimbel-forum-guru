<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WaliSiswaModel extends CI_Model
{
    private $tools_wali = '<div class="dropdown">
         <button class="btn btn-default dropdown-toggle btn-sm" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <span class="glyphicon glyphicon-cog"></span>
         </button>
         <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">
            <li onclick="edit_wali($1)"><a href="#">Detail & Edit</a></li>
            <li><a href="#">Detail Perwalian</a></li>                    
            <li onclick="del_wali($1)"><a href="#">Hapus</a></li>
        </ul>
       </div>';
    public function show_data_wali()
    {
        $this->datatables->select('id_wali_siswa,nama,alamat,');
        $this->datatables->from('tb_wali_siswa');
        $this->datatables->add_column('tools', $this->tools_wali, 'id_wali_siswa');
        return $this->datatables->generate();
    }
    public function add_wali($data)
    {
        return $this->db->insert('tb_wali_siswa', $data);
    }
    public function edit_wali($id_wali_siswa)
    {
        $this->db->where('id_wali_siswa', $id_wali_siswa);
        return $this->db->get('tb_wali_siswa')->row();
    }
    public function update_wali($data)
    {
        $this->db->where('id_wali_siswa', $data['id_wali_siswa']);
        return $this->db->update('tb_wali_siswa', $data);
    }
    public function trash_wali($id_wali_siswa)
    {
        $this->db->where('id_wali_siswa', $id_wali_siswa);
        return $this->db->delete('tb_wali_siswa');
    }
}

?>