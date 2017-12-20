<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PembayaranModel extends CI_Model
{
    private $tools_pembayaran = '<div class="dropdown">
         <button class="btn btn-default dropdown-toggle btn-sm" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <span class="glyphicon glyphicon-cog"></span>
         </button>
         <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">
            <li onclick=""><a href="#">Detail & Edit</a></li>
            <li><a href="#">Riwayat Mengajar</a></li>                    
            <li onclick="del_pembayaran($1)"><a href="#">Hapus</a></li>
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
    public function filter_pembayaran()
    {
        $this->db->select('id_tahun_ajaran,tahun_ajaran');
        $this->db->order_by('tahun_ajaran', 'DESC');
        $data ['tahun_ajaran'] = $this->db->get('tb_tahun_ajaran')->result();
        $this->db->select('id_program_bimbel,program_bimbel');
        $this->db->order_by('id_program_bimbel', 'DESC');
        $data ['program_bimbel'] = $this->db->get('tb_program_bimbel')->result();
        return $data;
    }
    public function show_data($filter)
    {
        $this->datatables->select('id_pembayaran,nama,tahun_ajaran,program_bimbel,status');
        $this->datatables->from('tb_pembayaran');
        $this->datatables->join('tb_siswa', 'tb_pembayaran.id_siswa = tb_siswa.id_siswa', 'left');
        $this->datatables->join('tb_tahun_ajaran', 'tb_pembayaran.id_tahun_ajaran = tb_tahun_ajaran.id_tahun_ajaran', 'left');
        $this->datatables->join('tb_program_bimbel', 'tb_pembayaran.id_program_bimbel = tb_program_bimbel.id_program_bimbel', 'left');

        if (!empty($filter)){
            foreach ($filter as $key => $id){
                $this->datatables->where('tb_pembayaran.'. $key, $id);
            }
        }
        $this->datatables->add_column('tools_pembayaran',$this->tools_pembayaran,'id_pembayaran');
        return $this->datatables->generate();
    }
}

?>