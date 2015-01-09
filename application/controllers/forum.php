<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class Forum extends CI_Controller {

  function __construct(){
     parent::__construct();
     $this->load->library('form_validation');
     $this->load->model("forum_model");
  }
   
   public function index()
	{

   if($this->session->userdata('forum_log'))
   {
      $data = array(
        "r_forum" => $this->forum_model->get_all_forum(),
        );
      $this->load->view("forum/header_forum");
      $this->load->view("forum/home",$data);
      $this->load->view("footer");
   }
   else
   {
      redirect("login");
   }
	}

  function add()
  {

   if($this->session->userdata('forum_log'))
   {
      $data = array(
        "r_forum" => $this->forum_model->get_all_forum(),
        );
      $this->load->view("forum/header_forum");
      $this->load->view("forum/home",$data);
      $this->load->view("footer");
   }
   else
   {
      redirect("login");
   }
  }

  function inputforum(){
      $this->form_validation->set_rules('topik', 'Topik', 'trim|required|xss_clean');
      $this->form_validation->set_rules('mine', 'Isi', 'trim|required|xss_clean');

     if($this->form_validation->run() == FALSE)
     {
       redirect("forum/add");
     }
     else
     {
        $this->forum_model->add_forum();
        redirect("forum");
     }
  }
}
