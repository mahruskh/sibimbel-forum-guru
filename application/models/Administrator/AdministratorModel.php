<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdministratorModel extends CI_Model
{
    public function show_admin()
    {
        $this->db->select('id_admin,nama,foto,last_login,status');
        return $this->db->get('tb_admin')->result();
    }
    public function detail_admin($id_admin)
    {
        $this->db->select('nama,alamat,telepon');
        $this->db->where('id_admin', $id_admin);
        return $this->db->get('tb_admin')->row();
    }
    public function add_new_admin($data)
    {
        return $this->db->insert('tb_admin', $data);
    }
}
?>