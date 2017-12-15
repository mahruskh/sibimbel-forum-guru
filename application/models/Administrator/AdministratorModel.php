<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdministratorModel extends CI_Model
{
    public function show_profil()
    {
        $this->db->select('nama,foto,telepon,status');
        return $this->db->get('tb_admin')->result();
    }
}
?>