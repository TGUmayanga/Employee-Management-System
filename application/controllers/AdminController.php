<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller
{
    public function __construct()
    {
      parent:: __construct();
      $this->load->model('Authentication');
      $this->load->model('UserModel');
      $this->load->helper('form');
      $this->load->library('form_validation');
      $this->Authentication->check_isAdmin();
    }
    public function index()
    {
        $data['users']=$this->UserModel->getUser();
        $this->load->view('template/header1');
        $this->load->view('adminpag',$data);
        $this->load->view('template/footer');
       
    }
    public function add()
{
    //$data['users'] =$this->UserModel->getUser();
    $this->load->view('template/header1.php');
    $this->load->view('auth/add.php');
    $this->load->view('template/footer.php');
}
public function edit($Id)
{
  $this->load->view('template/header1.php');
  $this->load->Model("UserModel");
  $data ['users']=$this->UserModel->editUser($Id);
  
  $this->load->view('auth/edit.php',$data);
  $this->load->view('template/footer.php');
}
public function update($Id)
{
  $this->form_validation->set_rules('first_name','First Name','trim|required|alpha');
  $this->form_validation->set_rules('last_name','Last Name','trim|required|alpha');
  $this->form_validation->set_rules('email','Email ID','trim|required|valid_email');

  if($this->form_validation->run()):


  $data=[
    'first_name' => $this->input->post('first_name'), 
    'last_name' => $this->input->post('last_name'), 
   'email' => $this->input->post('email')

    
  ];

  $this->load->model("UserModel");
  $this->UserModel->updatUser($data,$Id);
  redirect(base_url('adminpag'));
else :

 $this->edit($Id);
endif;
}
public function delete($Id)
{
  $this->load->model('UserModel');
  $this->UserModel->deleteUser($Id);
  redirect(base_url('adminpag'));

}
}

?>