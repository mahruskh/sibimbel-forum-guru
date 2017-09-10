<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _LoginController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Login/LoginModel');
  }
  public function index()
  {
    $this->load->view('Login/index');
  }
}
?>
