<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class Login extends CI_Controller {

  function __construct(){
     parent::__construct();
     $this->load->library('form_validation');
  }
   public function index()
	{

   if($this->session->userdata('forum_log'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['nama'] = $session_data['nama'];
     $data['id_cic'] = $session_data['id_cic'];

     redirect('forum/home', $data);
   }
   else
   {
     $this->load->view("forum/login");
   }

	}

  function validate(){

    
   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

   if($this->form_validation->run() == FALSE)
   {
     redirect("login");
   }
   else
   {
     $this->load->model("forum_model");
     
     $result = $this->forum_model->validasi($this->input->post("username"), $this->input->post("password"));
     
     if($result){
      
        $this->session->set_userdata("id_anggota"   ,$result->id_anggota);
        $this->session->set_userdata("username"     ,$result->username);
        $this->session->set_userdata("email"        ,$result->email);
        $this->session->set_userdata("nama"         ,$result->nama_lengkap);
        $this->session->set_userdata("angkatan"     ,$result->angkatan);
        $this->session->set_userdata("forum_log"    ,TRUE);
        $this->session->set_userdata("foto"         ,$result->foto);      
      redirect("forum");

     }

    else{
        redirect("login");
     }
   }

  }

  function logout()
      {
        $this->session->unset_userdata('forum_log');
        redirect('home', 'refresh');
      }
}