<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _AdministratorController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Administrator/AdministratorModel');
  }
  public function index()
  {
    $data['title'] = "Administrator";
    $data['profil'] = $this->AdministratorModel->show_profil();
    $this->load->view('Administrator/index',$data);
  }
  public function coba()
  {
    var_dump($this->AdministratorModel->show_profil());
  }
}
?>
