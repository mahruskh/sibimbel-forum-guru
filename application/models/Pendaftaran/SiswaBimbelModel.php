<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiswaBimbelModel extends CI_Model
{
    private $tools = '<div class="dropdown">
         <button class="btn btn-default dropdown-toggle btn-sm" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <span class="glyphicon glyphicon-cog"></span>
         </button>
         <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">
            <li><a href="#">Detail & Edit</a></li>
            <li><a href="#">Rincian Pembayaran</a></li>                     
            <li onclick="del($1)"><a href="#">Hapus</a></li>
        </ul>
       </div>';

    public function show_data()
    {
        $this->datatables->select('nis,nama,asal_sekolah');
        $this->datatables->from('tb_siswa');
        $this->datatables->add_column('tools', $this->tools, 'nis');
        return $this->datatables->generate();
    }
    public function trash($nis)
    {
        $this->db->where('nis', $nis);
        return $this->db->delete('tb_siswa');
    }
}