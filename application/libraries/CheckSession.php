<?php
/**
 * Created by PhpStorm.
 * User: mahrus_kh
 * Date: 16/01/18
 * Time: 14:17
 */

class CheckSession
{
    public function __construct()
    {
        //this
    }
    public function check_session($id_admin,$nama)
    {
        if (empty($id_admin) || empty($nama)) {
            redirect(base_url('login/show'));
        }
    }
}
