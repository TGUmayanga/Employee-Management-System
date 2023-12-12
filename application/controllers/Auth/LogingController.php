<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogingController extends CI_Controller
{
    public function __construct(){
        parent::__construct();

        if($this->session->has_userdata('authenticated'))
        {
          $this->session->set_flashdata('status','You are already Logging.! ');
          redirect(base_url('userpage'));
        }
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('UserModel');

    }
   public function index()
   {
    $this->load->view('template/header1');
    $this->load->view('auth/login');
    $this->load->view('template/footer');
   } 

   public function login()
   {
    $this->form_validation->set_rules('email_id','Email Address','trim|required|valid_email');
    $this->form_validation->set_rules('password','Password','trim|required');
    if($this->form_validation->run() == FALSE)
    {
     
        $this->index();


    }
    else
    {
        $data = 
        [
          'email' =>$this->input->post('email_id'),
          'password' =>$this->input->post('password')
        ];

        $user = new UserModel;
        $result= $user->loginUser($data);
        if($result != FALSE)
        {
          echo $auth_userdetails =
          [
            'first_name' => $result->first_name,
            'last_name' => $result->last_name,
            'email' => $result->email,
          ];
           
          $this->session->set_userdata('authenticated',$result->role_as);
          $this->session->set_userdata('auth_user',$auth_userdetails);
          $this->session->set_flashdata('status','You are Logging successfully');
          redirect(base_url('userpage'));



        }
        else
        {
            $this->session->set_flashdata('status','Invalid Email ID or Password');
            redirect(base_url('login'));
        }
        
    }

   }
}


?>