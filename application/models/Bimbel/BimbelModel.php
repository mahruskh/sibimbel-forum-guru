<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BimbelModel extends CI_Model
{
    private $tools_bimbel = '<div class="dropdown">
         <button class="btn btn-default dropdown-toggle btn-sm" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <span class="glyphicon glyphicon-cog"></span>
         </button>
         <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">
            <li><a href="#">Edit Data Bimbel</a></li>
            <li><a href="#">Kelas & Jadwal</a></li>                    
            <li onclick="del_pembayaran($1)"><a href="#">Hapus !</a></li>
        </ul>
       </div>';
    public function filter_tahun_ajaran()
    {
        $this->db->select('id_tahun_ajaran,tahun_ajaran');
        $this->db->order_by('tahun_ajaran', 'DESC');
        return $this->db->get('tb_tahun_ajaran')->result();
    }
    public function filter_program_bimbel()
    {
        $this->db->select('id_program_bimbel,program_bimbel');
        $this->db->order_by('id_program_bimbel', 'DESC');
        return $this->db->get('tb_program_bimbel')->result();
    }
    public function filter_tentor()
    {
        $this->db->select('id_tentor,nama');
        $this->db->order_by('nama', 'ASC');
        return $this->db->get('tb_tentor')->result();
    }
    public function show_data($filter)
    {
      $this->datatables->select('id_bimbel,nama,asal_sekolah,program_bimbel,tahun_ajaran');
      $this->datatables->from('tb_bimbel');
      $this->datatables->join('tb_siswa', 'tb_bimbel.id_siswa = tb_siswa.id_siswa','left');
      $this->datatables->join('tb_program_bimbel', 'tb_bimbel.id_program_bimbel = tb_program_bimbel.id_program_bimbel','left');
      $this->datatables->join('tb_tahun_ajaran', 'tb_bimbel.id_tahun_ajaran = tb_tahun_ajaran.id_tahun_ajaran','left');
        if (!empty($filter)){
            foreach ($filter as $tabel => $id){
                $this->datatables->where('tb_bimbel.'. $tabel, $id);
            }
        }
      $this->datatables->add_column('tools_bimbel',$this->tools_bimbel,'id_bimbel');
      return $this->datatables->generate();
    }

}
?>