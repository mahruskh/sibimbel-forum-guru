<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _DashboardController extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Dashboard/DashboardModel');
  }
  public function index()
  {
    $data['title'] = "Dashboard";
    $this->load->view('Dashboard/index', $data);
  }
}
?>
