<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller
{
    public function __construct()
    {
      parent:: __construct();
      $this->load->model('Authentication');
    }
    public function index()
    {
        $this->load->view('template/header1');
        $this->load->view('userpage');
        $this->load->view('template/footer');
    }
    
}

?>