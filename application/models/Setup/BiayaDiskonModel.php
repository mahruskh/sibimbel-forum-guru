<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BiayaDiskonModel extends CI_Model
{
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
}

?>