<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _AdministratorController extends CI_Controller
{
  public function __construct()
  {
      parent::__construct();
      $this->load->library('CheckSession');
      $this->checksession->check_session($this->session->id_admin,$this->session->nama);
      $this->load->model('Administrator/AdministratorModel');
  }
  public function index()
  {
      $data['title'] = "Administrator";
      $data['admin'] = $this->AdministratorModel->show_admin();
      $this->load->view('Administrator/index',$data);
      $this->load->view('Administrator/modal-admin');
  }
  public function setup_akun()
  {
      $data['title'] = "Setup Akun";
      $data['admin'] = $this->AdministratorModel->setup_akun($this->session->id_admin);
      $this->load->view('Administrator/setup_akun',$data);
  }

  public function detail_admin()
  {
      if ($this->input->is_ajax_request()) {
          echo json_encode($this->AdministratorModel->detail_admin($this->input->post('id_admin')));
      }
  }
  public function add_admin()
  {
      $data['title'] = "Tambah Administrator";
      $this->load->view('Administrator/add_admin', $data);
  }
  public function add_new_admin()
  {
      $new = $this->input->post('add_new_admin');
      if (isset($new)) {
          $this->load->helper('date');
          $data['username'] = $this->input->post('username');
          $data['password'] = $this->input->post('password');
          $data['nama'] = $this->input->post('nama');
          //foto belum
          $data['alamat'] = $this->input->post('alamat');
          $data['telepon'] = $this->input->post('telepon');
          $data['last_login'] = mdate('%Y-%m-%d H:i:s', time());
          $data['status'] = "1";
          if ($this->AdministratorModel->add_new_admin($data)) {
              redirect('administrator/show');
          }
      } else {
          redirect('administrator/add-admin');
      }
  }
}
?>