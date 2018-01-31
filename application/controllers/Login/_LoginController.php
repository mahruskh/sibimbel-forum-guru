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
    $this->check_session();
    $this->load->view('Login/index');
  }
  public function auth()
  {
    if ($this->input->is_ajax_request()) {
      if ($this->validate_input($this->input->post() == TRUE)) {
        $user = $this->LoginModel->auth($this->security->xss_clean($this->input->post()));
        if ($user != FALSE) {
            $this->create_session($user);
            echo TRUE;
        }
      }
    } else {
      redirect(base_url('login/show'));
    }
  }
  private function create_session($user)
  {
      foreach ($user as $row) {
          $sess = array(
              "id_admin"=>$row->id_admin,
              "nama"=>$row->nama,
              "foto"=>$row->foto
          );
          $this->session->set_userdata($sess);
      }
  }
  private function validate_input($data)
  {
      $this->load->library('form_validation');
      $this->form_validation->set_rules('username','username','required|trim|alpha_dash');
      $this->form_validation->set_rules('password','password','required|trim');
      return $this->form_validation->run();
  }
    public function alert_error()
    {
        if ($this->input->is_ajax_request() ) {
            if ($this->input->post('status') == "required") {
                echo '<div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong> Username & Password is Required</strong>
               </div>';
            } elseif ($this->input->post('status') == "wrong") {
                echo '<div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong> Username or Password is Incorrect</strong>
               </div>';
            }
        }
        else {
            redirect(site_url('login/show'));
        }
    }
    private function check_session()
    {
        if (isset($this->session->id_admin) && isset($this->session->nama)) {
            redirect(base_url('dashboard/show'));
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('login/show'));
    }
}
?>
