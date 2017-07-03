<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function index()
  {
    if (empty($this->session->userdata("admin"))) {
      redirect("admin/login");
    }else{
      redirect("admin/dashboard");
    }
  }

  public function login()
  {
    $this->load->view("admin/login");
  }

  public function dashboard()
  {
    $this->load->view("admin/dashboard");
  }

}
