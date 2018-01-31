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
    public function setup_akun($id_admin)
    {
        $this->db->select('username,password,nama,foto,alamat,telepon,last_data_update');
        $this->db->from('tb_admin');
        $this->db->where('id_admin', $id_admin);
        return $this->db->get()->result();
    }
}
?>