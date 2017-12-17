<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PembayaranModel extends CI_Model
{
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
    public function show_data($data)
    {
     //   $this->datatables->select('')
    }
}

?>