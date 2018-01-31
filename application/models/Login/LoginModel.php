<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model
{
    public function auth($data)
    {
        $this->db->select('id_admin,password,nama,foto');
        $this->db->where('username', $data['username']);
        $user = $this->db->get('tb_admin')->result();
        if (!empty($user)) {
            foreach ($user as $row) {
                if ($row->password == $data['password']) {
                    $status = $user;
                } else {
                    $status = FALSE;
                }
            }
        } else {
            $status = FALSE;
        }
        return $status;
    }
}
?>
