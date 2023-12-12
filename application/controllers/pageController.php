<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pageController extends CI_Controller{

   public function accessdenied()
   {
    $this->load->view('template/header1');
    $this->load->view('errors/403');
    $this->load->view('template/footer');
   }
    public function userpage()

    {
      $this->load->view('userpage');
    }

}

?>