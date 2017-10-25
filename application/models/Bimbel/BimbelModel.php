<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BimbelModel extends CI_Model
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
    public function filter_tentor()
    {
        $this->db->select('id_tentor,nama');
        $this->db->order_by('nama', 'ASC');
        return $this->db->get('tb_tentor')->result();
    }

}
?>